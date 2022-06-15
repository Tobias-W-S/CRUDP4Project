<?php 
  session_start();
  include("connect.php");
  if($_SESSION['admin'] != true){
    header("location: ../index.php");
    exit();
  }

  $sql = "SELECT * FROM `cruises` WHERE `reisID` = " . $_GET['id'];
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
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300&display=swap" rel="stylesheet" />
</head>

<body>
    <nav>
        <div class="navbar_admin">
            <a href="admin.php">Aanmaken</a>
            <a href="edit.php">Aanpassen en verwijderen</a>
            <a href="bevestigbezoeker.php">Informatie gebruiker</a>
            <a href="berichtlezen.php">Bericht lezen</a>

            <a href="">log uit</a>
        </div>
    </nav>
    <div class="toevoegen_tabel">
        <h2>Cruise aanpassen of verwijderen</h2>
        <table>

            <form method="post" action="updateCommit.php">
                <tr>
                    <th>Cruise naam</th>
                    <?php foreach($result as $value){?>
                    <td>
                    <input type="hidden" name="id" <?php echo 'value="' . $value['reisID'] .'"' ?>>
                        <input type="text" name="Naam" <?php echo"value='" . $value['Naam'] . "'" ?>>
                    </td>
                </tr>
                <tr>
                    <th>Eindbestemming</th>
                    <td>
                        <input type="text" name="EindBestemming"
                            <?php echo"value='" . $value['Eindbestemming'] . "'" ?>>
                    </td>
                </tr>
                <tr>
                    <th>Startbestemming</th>
                    <td>
                        <input type="text" name="StartBestemming"
                            <?php echo"value='" . $value['Startbestemming'] . "'" ?>>
                    </td>
                </tr>
                <tr>
                    <th>Datum</th>
                    <td>
                        <input type="date" name="Datum"
                            <?php echo"value='" . $value['Datum'] . "'" ?>>
                    </td>
                </tr>
                <tr>
                    <th>Datum</th>
                    <td>
                        <input type="date" name="EindDatum"
                            <?php echo"value='" . $value['EindDatum'] . "'" ?>>
                    </td>
                </tr>
                <tr>
                    <th>Prijs</th>
                    <td>
                        <input type="text" name="Prijs"
                            <?php echo"value='" . $value['Prijs'] . "'" ?>>
                    </td>
                </tr>
                <tr>
                    <th>Beschrijving</th>
                    <td>
                        <input type="text" name="Omschrijving"
                            <?php echo"value='" . $value['Beschrijving'] . "'" ?>>
                    </td>
                </tr>
                <tr>
                    <th>Aantal personen</th>
                    <td>
                        <input type="text" name="Aantal"
                            <?php echo"value='" . $value['Aantal personen'] . "'" ?>>
                    </td>
                </tr>
                <tr>
                    <th>Afbeelding</th>
                    <td>
                        <input type="text" name="Afbeelding"
                            <?php echo"value='" . $value['Afbeelding'] . "'" ?>>
                    </td>
                </tr>
                <tr>
                    <th>Edit</th>
                    <td>
                        <input class="button_admin" type="submit" value="Edit" name="update">
                    </td>
                </tr>
                <?php }?>

            </form>


        </table>
    </div>