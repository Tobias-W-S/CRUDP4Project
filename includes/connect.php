<?php 

$host = "localhost";
$db = "cruisetours";
$user = "root";
$pass = "";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $connect = new PDO($dsn, $user, $pass, $opt);

} 
catch (PDOException $e) 
{
    echo $e->getMessage();
    die("Sorry, database probleem."); 
}