<?php 
  session_start();
  include("connect.php");
  if($_SESSION['admin'] != true){
    header("location: ../index.php");
    exit();
  }

  $sql = "SELECT * FROM `cruises`";
  $stmt = $connect->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll();
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
    <h2>Cruise aanpassen of verwijderen</h2>
      <table>
        <?php foreach($result as $value){?>
          
            <tr>
              <form class=form_admin action="delete.php" method="POST">
                <th><?php echo $value['Naam'] ?><input name="id" type="hidden" <?php echo 'value="' . $value['reisID'] . '"' ?> ></th>
                <td><a <?php echo 'href="update.php?id=' . $value['reisID'] . '"' ?>  class="button_admin">Edit</a></td>
                <th><input type="submit" name="Delete" class="button_admin" value="Verwijderen"></th>
              </form>
            </tr>

        <?php }?>
      </table>
    </div>
