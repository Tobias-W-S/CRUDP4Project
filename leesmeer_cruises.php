  <?php
      include("includes/nav.php");
      include("includes/connect.php");

      $sql = "SELECT * FROM `cruises` WHERE `reisID` = $_GET[id]";
      $stmt = $connect->prepare($sql); $stmt->execute(); $result =
      $stmt->fetchAll(); foreach($result as $value){ ?>
  <div class="background_leesmeer">
    <div class="info_cruises"></div>
    <div class="tab-wrap">
      <input type="radio" name="tabs" id="tab1" checked />
      <div class="tab-label-content" id="tab1-content">
        <label for="tab1">Beschrijving</label>
        <div class="tab-content">
          <?php echo '<strong
            >Voor ' . $value['Aantal personen'] . ' Personen</strong
          >
          ' . $value['Beschrijving'];?>
        </div>
      </div>

      <input type="radio" name="tabs" id="tab2" />
      <div class="tab-label-content" id="tab2-content">
        <label for="tab2">Prijzen</label>
        <div class="tab-content">
          De kosten zijn €
          <?php echo $value['Prijs'];?>
          per persoon.
        </div>
      </div>

      <input type="radio" name="tabs" id="tab3" />
      <div class="tab-label-content" id="tab3-content">
        <label for="tab3">Duur</label>
        <div class="tab-content">
          Deze cruise duurt
          <?php echo $value['Duur'];?>
          dagen. Van
          <?php echo $value['Startbestemming']?>
          naar
          <?php echo $value['Eindbestemming']?>
        </div>
      </div>

      <input type="radio" name="tabs" id="tab4" />
      <div class="tab-label-content" id="tab4-content">
        <label for="tab4">Recensies</label>
        <div class="tab-content"></div>

        <div class="tab-content">


          <?php 
            $sql = "SELECT * FROM `recensies` JOIN `accounts` USING(`USER_ID`) 
            WHERE `reisID` = $_GET[id]";
            $stmt = $connect->prepare($sql); $stmt->execute(); $result2 =
            $stmt->fetchAll(); 
            foreach($result2 as $recensie){
          ?>
            <div>
              <strong><?php echo $recensie['Mail'] ?></strong>
              <?php echo $recensie['recensieText'];?>
            </div>
            <br>
          <?php }?>
        </div>
      </div>

      <?php 
        if(isset($_SESSION['id'])){
          include_once ("includes/review.php");
        }
      ?>
  
    </div>
  </div>
  <?php break;}?>
</body>
</html>