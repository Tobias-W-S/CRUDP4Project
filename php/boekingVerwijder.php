<?php
include ("../includes/connect.php");
session_start();

if(isset($_SESSION['id'])){


    $sql = "DELETE FROM `boekingen` WHERE `boekingID` = :boeking";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":boeking", $_GET['id']);
    $stmt->execute(); 

    header("location: ../accountPage.php");
    exit();

}

header("location: ../cruises.php");
exit();