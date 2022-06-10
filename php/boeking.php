<?php
include ("../includes/connect.php");
session_start();

if(isset($_SESSION['id'])){

    $sql = 'SELECT `USER_ID` FROM `accounts` WHERE `Mail` ="' . $_SESSION['user'] . '"';

    $stmt = $connect->prepare($sql);

    $stmt->execute();
    
    $result = $stmt->fetchAll();

    foreach($result as $value){
        $gebruiker = $value['USER_ID'];
    }

    //var_dump($_GET['id']);

    //var_dump($gebruiker); ----> Toont id van ingelogde gebruiker

    $sql = "INSERT INTO `boekingen`(`USER_ID`, `reisID`) 
    VALUES (:gebruiker, :id)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":gebruiker", $gebruiker);
    $stmt->bindParam(":id", $_GET['id']);
    $stmt->execute(); 

    header("location: ../accountPage.php");
    exit();
}

header("location: ../cruises.php");
exit();