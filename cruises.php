<?php
  include("includes/nav.php");
  include("includes/connect.php");

  $bestemming = "";
  $start = "";
  $duur = "";
  $personen = "";

  if(isset($_POST['submitfilter'])){
    $bestemming = $_POST['Bestemming'];
    $start = $_POST['Start'];
    $duur = $_POST['Duur'];
    $personen = $_POST['Personen'];
  }
  $sql = "SELECT * FROM `cruises` WHERE `Eindbestemming` LIKE '%" . $bestemming . "%' AND `Startbestemming` LIKE '%" . $start . "%' AND `Duur` LIKE '%" . $duur . "%' AND `Aantal personen` LIKE '%" . $personen . "%'"; 
  $stmt = $connect->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll();
?>
    <div class="cruises_titel">
      <h2>Kies hier uw cruise!</h2>

      </div>
<div class="background_cruises">

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
    //Moet nog gecheckt worden of je ingelogd bent
    echo '<br><a href="php/boeking.php?id='  . $value['reisID'] .'" id=' . $value['reisID'] . ' class="add">voeg toe</a>';
    
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }

?>

