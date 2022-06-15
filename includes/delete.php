
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
        <a href="delete.php">Aanpassen en verwijderen</a>
        <a href="bevestigbezoeker.php">Informatie gebruiker</a>
        <a href="berichtlezen.php">Bericht lezen</a>
        <a href="">log uit</a>
      </div>
    </nav>
    <div class="toevoegen_tabel">
    <h2>Cruise aanpassen of verwijderen</h2>
      <table>
        <tr>
          <form class=form_admin action="php/create.php" method="POST">
            <tr>
              <th>Cruise titel</th>
              <td><input type="text" value="" name="naam" class="input_border"></td>
              <th><input type="submit" name="submit" class="button_admin" value="Verwijderen"></th>
            </tr>
            <tr>
              <th>Startbestemming</th>
              <td><input type="text" name="Startbestemming" class="input_border"></td>
              <th><input type="submit" name="submit" class="button_admin" value="Verwijderen"></th>
            </tr>
            <tr>
              <th>Eindbestemming</th>
              <td><input type="text" name="Eindbestemming" class="input_border"></td>
              <th><input type="submit" name="submit" class="button_admin" value="Verwijderen"></th>
            </tr>
            <tr>
              <th>Prijs per persoon</th>
              <td><input type="text" name="prijs" class="input_border"></td>
              <th><input type="submit" name="submit" class="button_admin" value="Verwijderen"></th>
            </tr>
            <tr>
              <th>Omschrijving</th>
              <td><input type="text" name="omschrijving" class="input_border"></td>
              <th><input type="submit" name="submit" class="button_admin" value="Verwijderen"></th>
            </tr>
            <tr>
              <th>Datum</th>
              <td><input type="text" name="Datum" class="input_border"></td>
              <th><input type="submit" name="submit" class="button_admin" value="Verwijderen"></th>
            </tr>
            <tr>
              <th>Aantal personen</th>
              <td><input type="text" name="Aantal personen" class="input_border"></td>
              <th><input type="submit" name="submit" class="button_admin" value="Verwijderen"></th>
            </tr>
            <tr>
              <th>Afbeelding</th>
              <td><input type="text" name="Afbeelding" class="input_border"></td>
              <th><input type="submit" name="submit" class="button_admin" value="Verwijderen"></th>
            </tr>
            <tr>
              <th>Opslaan</th>
              <td><input type="text" name="Afbeelding" class="input_border"></td>
              <th><input type="submit" name="submit" class="button_admin"></th>
            </tr>
          </form>
        </tr>
      </table>
    </div>
