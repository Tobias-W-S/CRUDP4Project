<?php

  include ('connect.php');



  if(isset($_POST['submitlogin'])) {



    $sql = "SELECT * FROM `accounts` WHERE `Mail` = '" . $_POST['Gebruikersnaam'] . "'";

    $stmt = $connect->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetchAll();



   if ($result[0]['Mail'] == $_POST['Gebruikersnaam'] AND $result[0]['Password'] == $_POST['Wachtwoord']) {

    session_start();



    $_SESSION['user'] = $_POST['Gebruikersnaam'];
    $_SESSION['id'] = session_id();

    if($result[0]['Admin'] == 1){
      $_SESSION['admin'] = true;
      header('location: ../admin.php');
    }
    else{
      header('location: ../index.php');
    }






    exit();

   }

   

  else {

    header('location: ../php/login.php');

    exit();

  }

}

?>