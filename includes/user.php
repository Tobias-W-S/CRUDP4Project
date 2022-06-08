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


    