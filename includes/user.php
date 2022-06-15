<?php 

    include("connect.php");


    //Contactformulier verzenden
    if(isset($_POST['CONTACT'])){
        $sql =  "INSERT INTO `contact`(`Email`, `Onderwerp`, `Bericht`) 
        VALUES (:Email, :Onderwerp, :Bericht)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":Email", $_POST['e-mail']);
        $stmt->bindParam(":Onderwerp", $_POST['onderwerp']);
        $stmt->bindParam(":Bericht", $_POST['bericht']);
        $stmt->execute(); 
        header("location: ../contact.php");
    }

    if(isset($_POST['RECENSIE'])){
        $sql = "SELECT `USER_ID` FROM `accounts` WHERE `Mail` ='" . $_POST['e-mail'] . "'";
        $stmt = $connect->prepare($sql);
        $stmt->execute(); 
        $result = $stmt->fetchAll();
        foreach($result as $value){
            $user = $value['USER_ID'];
        }

        $sql = "INSERT INTO `recensies` (`USER_ID`, `reisID`, `recensieText`, `validatie`) 
        VALUES(:User, :Reis, :Recensie, '1')";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":User", $user);
        $stmt->bindParam(":Reis", $_POST['reis']);
        $stmt->bindParam(":Recensie", $_POST['bericht']);
        $stmt->execute();         
        header("location: ../cruises.php");
    }
    