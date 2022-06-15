<?php
    include("../includes/connect.php");

    if(isset($_POST['Create'])){
        $sql = "INSERT INTO `cruises`(`Naam`, `Eindbestemming`, `Startbestemming`, `Datum`, `EindDatum`, 
        `Prijs`, `Beschrijving`, `Aantal personen`, `Afbeelding`) 
        VALUES (:Naam, :Eindbestemming, :Startbestemming, :Datum, :EindDatum,
        :Prijs, :Beschrijving, :Aantal, :Afbeelding)";

        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":Naam", $_POST["Naam"]);
        $stmt->bindParam(":Eindbestemming", $_POST["Eindbestemming"]);
        $stmt->bindParam(":Startbestemming", $_POST["Startbestemming"]);
        $stmt->bindParam(":Datum", $_POST["Datum"]);
        $stmt->bindParam(":EindDatum", $_POST["EindDatum"]);
        $stmt->bindParam(":Prijs", $_POST["Prijs"]);
        $stmt->bindParam(":Beschrijving", $_POST["Omschrijving"]);
        $stmt->bindParam(":Aantal", $_POST["Aantal"]);
        $stmt->bindParam(":Afbeelding", $_POST["Afbeelding"]);
        $stmt->execute(); 
    }

    header("location: ../includes/admin.php");
    exit();