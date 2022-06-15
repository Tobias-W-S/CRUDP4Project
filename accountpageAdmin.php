<?php 
    include("includes/nav.php");
    include("includes/connect.php");

    if($_SESSION['admin'] != true){
        header("location: index.php");
        exit();
    }

    $sql = "SELECT * FROM `accounts` JOIN `boekingen` USING(`USER_ID`) LEFT JOIN `cruises` USING(`reisID`) WHERE `USER_ID` = $_GET[id]";

    $stmt = $connect->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetchAll();

    ?>
    <div class="background_account">


<?php

    foreach($result as $value){
        echo '<div class="container">';
        echo '<div class="images">';
        echo '<img src="media/' . $value['Afbeelding'] . '" />';
        echo '</div>';
        echo '<div class="product">';
        echo '<h2>' . $value['Naam'] . '</h2>';
        echo '<h3>Vanaf €' . $value['Prijs'] . ' per persoon</h3>';
        echo '<p class="desc">' . $value['Beschrijving'] . '</p>';
        echo '<div class="buttons">';
        echo '<a href="leesmeer_cruises.php?id=' . $value['reisID'] .'" id=' . $value['reisID'] . ' class="add">lees meer</a><br>';
        echo '<br><a href="php/boekingVerwijder.php?id=' . $value['boekingID'] .'" id=' . $value['boekingID'] . ' class="add">verwijder</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    ?>
    </div>