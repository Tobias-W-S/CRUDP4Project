<?php
  include("includes/nav.php");
  include("includes/connect.php");

  $bestemming = "";
  $start = "";
  $personen = "";

  if(isset($_POST['submitfilter'])){
    $bestemming = $_POST['Bestemming'];
    $start = $_POST['Start'];
    $personen = $_POST['Personen'];
  }

  $sql = "SELECT * FROM `cruises` WHERE `Eindbestemming` LIKE '%" . $bestemming . "%' AND `Startbestemming` LIKE '%" . $start . "%' AND `Aantal personen` LIKE '%" . $personen . "%'"; 

  if(isset($_POST['StartDatum']) && isset($_POST['EindDatum'])){
    $startdatum = $_POST['StartDatum'];
    $einddatum = $_POST['EindDatum'];
    $sql = "SELECT * FROM `cruises` WHERE `Eindbestemming` 
    LIKE '%" . $bestemming . "%' AND `Startbestemming` LIKE '%" . $start  . "%' AND `Aantal personen` LIKE '%" . $personen . 
    "%' AND `Datum` BETWEEN '" . $startdatum . "'AND'". $einddatum ."' AND `Datum` BETWEEN '" . $startdatum . "'AND'". $einddatum ."'";  
  }

  
  $stmt = $connect->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll();
?>
    <div class="cruises_titel">
      <h2>Kies hier uw cruise!</h2>

      </div>
<div class="background_cruises">

<?php 
  foreach($result as $value){
    echo '<div class="container">';
    echo '<div class="images">';
    echo '<img src="media/' . $value['Afbeelding'] . '" />';
    echo '</div>';
    echo '<div class="product">';
    echo '<h2>' . $value['Naam'] . '</h2>';
    echo '<h3>Vanaf €' . $value['Prijs'] . ' per persoon</h3>';
    echo '<p class="desc">' . $value['Beschrijving'] . '</p>';
    echo '<div class="buttons">';
    echo '<a href="leesmeer_cruises.php?id=' . $value['reisID'] .'" id=' . $value['reisID'] . ' class="add">lees meer</a><br>';
    //Moet nog gecheckt worden of je ingelogd bent
    if(isset($_SESSION['id'])){
      echo '<br><a href="php/boeking.php?id='  . $value['reisID'] .'" id=' . $value['reisID'] . ' class="add">voeg toe</a>';
    }
   
    
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }

?>
</div>
<?php
      include("includes/footer.php");
?>

