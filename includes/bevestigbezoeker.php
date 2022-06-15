<?php  include("connect.php"); ?>
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
    <div class="bezoeker_tabel">
    <h2>Informatie bezoeker</h2>
<table>
    <th>Pas aan</th>
    <th>Verwijderen</th>
  </tr>
  <?php 
    $sql = "SELECT * FROM `accounts`";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    foreach($result as $value){
  ?>

  <tr><form method="post" action="UserAdmin.php">
    <input type="hidden" name="userID" <?php echo'value="' . $value['USER_ID'] . '"'?> >
    <td><input type="text" <?php echo 'value="' . $value['Mail'] . '"' ?> name="naam" class="input_border"></td>
    <td><input type="text" <?php echo 'value="' . $value['Password'] . '"' ?> value="" name="wachtwoord" class="input_border"></td>
    <td>
      <input type="radio" value="0" id="adminNee" name="Admin" class="input_border" <?php if($value['Admin'] == 0){echo 'checked="checked"';} ?>>
      <label for="adminNee">Nee</label><br>
      <input type="radio" value="1" id="adminJa" name="Admin" class="input_border" <?php if($value['Admin'] == 1){echo 'checked="checked"';} ?>>
      <label for="adminJa">Ja</label><br>
    </td>
    <?php 
      if($value['Geaccepteerd'] == 1){
        echo '<td><input type="submit" name="geaccepteerd" class="button_admin" value="Geaccepteerd" disabled></td>';
      }
      else{
        echo '<td><input type="submit" name="accepteren" class="button_admin" value="Accepteren"></td>';
      }
    ?>
    
    <td><a type="submit" <?php echo 'href="../accountPageAdmin.php?id=' . $value['USER_ID'] . '"' ?> class="button_admin">Bekijk boekingen</td>
    <td><input type="submit" name="edit" class="button_admin" value="Pas aan"></td>
    <td><input type="submit" name="delete" class="button_admin" value="Verwijder"></td>  
  </form>

  </tr>
  <?php }; ?>
</table>
    </div>
   