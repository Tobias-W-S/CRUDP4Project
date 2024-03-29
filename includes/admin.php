<?php 
  session_start();
  include("connect.php");
  if($_SESSION['admin'] != true){
    header("location: ../index.php");
    exit();
  }
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
      <div class="navbar_admin">
        <a href="admin.php">Aanmaken</a>
        <a href="edit.php">Aanpassen en verwijderen</a>
        <a href="bevestigbezoeker.php">Informatie gebruiker</a>
        <a href="berichtlezen.php">Bericht lezen</a>

        <a href="../php/logout.php">log uit</a>
      </div>
    </nav>
    <div class="toevoegen_tabel">
    <h2>Cruise toevoegen</h2>
      <table>
        <tr>
          <form class=form_admin action="../php/create.php" method="post">
            <tr>
              <th>Cruise titel</th>
              <td><input type="text" value="<?php  ?>" name="Naam" class="input_border"></td>
            </tr>
            <tr>
              <th>Startbestemming</th>
              <td><input type="text" name="Startbestemming" class="input_border"></td>
            </tr>
            <tr>
              <th>Eindbestemming</th>
              <td><input type="text" name="Eindbestemming" class="input_border"></td>
            </tr>
            <tr>
              <th>Prijs per persoon</th>
              <td><input type="text" name="Prijs" class="input_border"></td>
            </tr>
            <tr>
              <th>Omschrijving</th>
              <td><input type="text" name="Omschrijving" class="input_border"></td>
            </tr>
            <tr>
              <th>Datum</th>
              <td><input type="date" name="Datum" class="input_border"></td>
            </tr>
            <tr>
              <th>Datum</th>
              <td><input type="date" name="EindDatum" class="input_border"></td>
            </tr>
            <tr>
              <th>Aantal personen</th>
              <td><input type="text" name="Aantal" class="input_border"></td>
            </tr>
            <tr>
              <th>Afbeelding</th>
              <td><input type="text" name="Afbeelding" class="input_border"></td>
            </tr>
            <tr>
              <th>Opslaan</th>
              <th><input type="submit" name="Create" class="button_admin"></th>
            </tr>
          </form>
        </tr>
      </table>
    </div>
