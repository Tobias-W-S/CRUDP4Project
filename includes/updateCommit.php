<?php 
  session_start();
  include("connect.php");
  if($_SESSION['admin'] != true){
    header("location: ../index.php");
    exit();
  }

  if(isset($_POST['update'])){
    $sql = "UPDATE `cruises` SET `Naam`=:Naam,`Eindbestemming`=:Eindbestemming,`Startbestemming`=:Startbestemming,`Datum`=:Datum,
    `EindDatum`=:EindDatum, `Prijs`=:Prijs,`Beschrijving`=:Beschrijving,`Aantal personen`=:Aantal,`Afbeelding`=:Afbeelding 
      WHERE `reisID` ='" . $_POST['id'] . "'";
          $stmt = $connect->prepare($sql);
          $stmt->bindParam(":Naam", $_POST["Naam"]);
          $stmt->bindParam(":Eindbestemming", $_POST["EindBestemming"]);
          $stmt->bindParam(":Startbestemming", $_POST["StartBestemming"]);
          $stmt->bindParam(":Datum", $_POST["Datum"]);
          $stmt->bindParam(":EindDatum", $_POST["EindDatum"]);
          $stmt->bindParam(":Prijs", $_POST["Prijs"]);
          $stmt->bindParam(":Beschrijving", $_POST["Omschrijving"]);
          $stmt->bindParam(":Aantal", $_POST["Aantal"]);
          $stmt->bindParam(":Afbeelding", $_POST["Afbeelding"]);
          $stmt->execute(); 
  }

  header("location: ../includes/edit.php");
  exit();
?>