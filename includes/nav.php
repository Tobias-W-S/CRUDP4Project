<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav>
      <div class="navbar">
        <a href="index.php">Home</a>
        <a href="cruises.php">Cruises</a>
        <a href="about.php">Over ons</a>
        <a href="contact.php">Contact</a>
      </div>
      <?php 
        if(isset($_SESSION['id'])){
          include_once("logoutNav.php");
        }
        else{
          include_once("loginNav.php");
        }
      ?>
    </nav>

