<?php

  include ('connect.php');



  if(isset($_POST['submitlogin'])) {



    $sql = "SELECT * FROM `accounts` WHERE `Mail` = '" . $_POST['Gebruikersnaam'] . "'";

    $stmt = $connect->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetchAll();



   if ($result[0]['Mail'] == $_POST['Gebruikersnaam'] AND $result[0]['Password'] == $_POST['Wachtwoord'] AND $result[0]['Geaccepteerd'] == 1) {

    session_start();



    $_SESSION['user'] = $_POST['Gebruikersnaam'];
    $_SESSION['id'] = session_id();

    if($result[0]['Admin'] == 1){
      $_SESSION['admin'] = true;
      header('location: admin.php');
    }
    else{
      header('location: ../index.php');
    }






    exit();

  }



}

  //Gebruiker aanmelden


  else if(isset($_POST['submitAanmelden'])){
    $sql = "INSERT INTO `accounts`(`Mail`, `Password`, `Admin`, `Geaccepteerd`) 
    VALUES (:Email,:Wachtwoord,'0','0')";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":Email", $_POST['Gebruikersnaam']);
    $stmt->bindParam(":Wachtwoord", $_POST['Wachtwoord']);
    $stmt->execute(); 
    header("location: ../index.php");   
    
    exit();
  }   

  else {

    header('location: ../php/login.php');

    exit();

  }

  var_dump($_POST['submitAanmelden']);


?>