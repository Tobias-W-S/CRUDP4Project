<?php
  include("includes/nav.php");
  include("includes/connect.php");

  $bestemming = "";
  $start = "";
  $duur = "";
  $personen = "";

  if(isset($_POST['submitfilter'])){
    $bestemming = $_POST['Bestemming'];
    $start = $_POST['Start'];
    $duur = $_POST['Duur'];
    $personen = $_POST['Personen'];
  }
  $sql = "SELECT * FROM `cruises` WHERE `Eindbestemming` LIKE '%" . $bestemming . "%' AND `Startbestemming` LIKE '%" . $start . "%' AND `Duur` LIKE '%" . $duur . "%' AND `Aantal personen` LIKE '%" . $personen . "%'"; 
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
    echo '<h3>Vanaf €' . $value['Prijs'] . ',- per persoon</h3>';
    echo '<p class="desc">' . $value['Beschrijving'] . '</p>';
    echo '<div class="buttons">';
    echo '<button class="add">lees meer</button>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }

?>

<?php 
/*
<div class="container">
  <div class="images">
    <img src="media/cruise1.jpg" />
  </div>
  <div class="product">
    <h2>Norwegian Cruise Line</h2>
    <h3>Vanaf 800,- per persoon</h3>
    <p class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto quam dignissimos officiis natus aliquam laborum unde quasi. Quam, quidem. Consequuntur.</p>
    <div class="buttons">
    <button class="add">lees meer</button>
    </div>
  </div>
</div>
<div class="container">
  <div class="images">
    <img src="media/cruise2.jpg" />
  </div>
  <div class="product">
    <h2>Oceania Cruises</h2>
    <h3>Vanaf 700,- per persoon</h3>
    <p class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto quam dignissimos officiis natus aliquam laborum unde quasi. Quam, quidem. Consequuntur.</p>
    <div class="buttons">
    <button class='add' onclick="document.location='leesmeer_cruises.php'">lees meer</button>
    </div>
  </div>
</div>
<div class="container">
  <div class="images">
    <img src="media/zee.jpg" />
  </div>
  <div class="product">
    <h2>Royal Caribbean</h2>
    <h3>Vanaf 900,- per persoon</h3>
    <p class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto quam dignissimos officiis natus aliquam laborum unde quasi. Quam, quidem. Consequuntur.</p>
    <div class="buttons">
    <button class='add' onclick="document.location='leesmeer_cruises.php'">lees meer</button>
    </div>
  </div>
</div>
<div class="container">
  <div class="images">
    <img src="media/winter.jpg" />
  </div>
  <div class="product">
    <h2>AIDA Cruises</h2>
    <h3>Vanaf 750,- per persoon</h3>
    <p class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto quam dignissimos officiis natus aliquam laborum unde quasi. Quam, quidem. Consequuntur.</p>
    <div class="buttons">
    <button class='add' onclick="document.location='leesmeer_cruises.php'">lees meer</button>
    </div>
  </div>
</div>
</div> 
*/
?>

