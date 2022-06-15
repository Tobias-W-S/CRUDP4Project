<?php

include("connect.php");


if(isset($_POST['Delete'])){
    $sql = "DELETE FROM `cruises` WHERE `reisID` = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_POST["id"]);    
    $stmt->execute(); 
}


header("location: ../includes/edit.php");
exit();