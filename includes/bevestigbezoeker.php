
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
        <a href="">log uit</a>
      </div>
    </nav>
    <div class="bezoeker_tabel">
    <h2>Informatie bezoeker</h2>
<table>
  <tr>
    <th>E-mailadres</th>
    <th>Wachtwoord</th>
    <th>admin</th>
    <th>Accepteren</th>
    <th>Boekingen</th>
  </tr>
  <tr>
  <td><input type="text" value="" name="naam" class="input_border"></td>
  <td><input type="text" value="" name="naam" class="input_border"></td>
  <td><input type="text" value="" name="naam" class="input_border"></td>
  <td><input type="submit" name="submit" class="button_admin" value="Accepteren"></td>
  <td><input type="submit" name="submit" class="button_admin" value="Bekijk boekingen"></td>
  </tr>
</table>
    </div>
   