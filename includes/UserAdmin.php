<?php

include("connect.php");

if(isset($_POST['accepteren'])){
    $sql = "UPDATE `accounts` SET `Geaccepteerd`= 1 
    WHERE `USER_ID` = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_POST["userID"]);    
    $stmt->execute(); 
}

if(isset($_POST['edit'])){
    $sql = "UPDATE `accounts` SET `Mail`=:naam,`Password`=:wachtwoord,`Admin`=:useradmin 
    WHERE `USER_ID` = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_POST["userID"]);    
    $stmt->bindParam(":naam", $_POST["naam"]);
    $stmt->bindParam(":wachtwoord", $_POST["wachtwoord"]); 
    $stmt->bindParam(":useradmin", $_POST["Admin"]);     
    $stmt->execute(); 
}

if(isset($_POST['delete'])){
    $sql = "DELETE FROM `accounts` WHERE `USER_ID` = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_POST["userID"]);    
    $stmt->execute(); 
}

header("location: ../includes/bevestigbezoeker.php");
exit();