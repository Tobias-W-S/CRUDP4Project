<?php
  include("includes/nav.php");


      include("includes/nav.php");
    ?>
<?php
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
  $sortname = "SELECT * FROM `cruises` WHERE `Eindbestemming` LIKE '" . $bestemming . "' AND `Startbestemming` LIKE ' " . $start . "' AND `Duur` LIKE '" . $duur . "' AND `Aantal personen` LIKE '" . $personen . "'"; 
?>
    <div class="cruises_titel">
      <h2>kies hier uw cruise!</h2>

      </div>
<div class="background_cruises">
<div class="container">
  <div class="images">
    <img src="media/cruise1.jpg" />
  </div>
  <div class="product">
    <h2>Norwegian Cruise Line</h2>
    <h3>Vanaf 800,- per persoon</h3>
    <p class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto quam dignissimos officiis natus aliquam laborum unde quasi. Quam, quidem. Consequuntur.</p>
    <div class="buttons">
    <button class='add' onclick="document.location='leesmeer_cruises.php'">lees meer</button>
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