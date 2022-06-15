<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/styles.css" />
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
        <a href="admin.php">Aanmaken</a>
        <a href="delete.php">Aanpassen en verwijderen</a>
        <a href="bevestigbezoeker.php">Informatie gebruiker</a>
        <a href="berichtlezen.php">Bericht lezen</a>
        <a href="">log uit</a>
      </div>
    </nav>
    <?php
      $sql = "SELECT * FROM `contact`";

      $stmt = $connect->prepare($sql);
  
      $stmt->execute();
  
      $result = $stmt->fetchAll();
      ?>
<div class="tabel">
      <h2>Bericht lezen van gebruiker</h2>
      <table>
        <tr>
          <th>e-mailadres</th>
          <th>Onderwerp</th>
          <th>bericht</th>
        </tr>
        <?php foreach ($result as $contact){ ?>
        <tr>
          <th><?php echo $contact['Email'] ?></th>
          <th><?php echo $contact['Onderwerp'] ?></th>
          <th><?php echo $contact['Bericht'] ?></th>
        </tr>
        <?php }
        ?>
      </table>
    </div>