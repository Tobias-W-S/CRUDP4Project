<?php

  include ('connect.php');



  if(isset($_POST['submitlogin'])) {



    $sql = "SELECT * FROM `accounts` WHERE `Mail` = '" . $_POST['Gebruikersnaam'] . "'";

    $stmt = $connect->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetchAll();



   if ($result[0]['Mail'] == $_POST['Gebruikersnaam'] AND $result[0]['Password'] == $_POST['Wachtwoord']) {

    session_start();



    $_SESSION['admin'] = true;



    header('location: ../goedgedaan.php');

    exit();

   }

   

  else {

    header('location: ../index.php');

    exit();

  }

}

?>