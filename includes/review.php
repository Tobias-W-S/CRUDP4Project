<input type="radio" name="tabs" id="tab5" />
      <div class="tab-label-content" id="tab5-content">
        <label for="tab5">Stuur review</label>
        <div class="tab-content">
          <form class="review_form" method="post" action="includes/user.php">
            <input
              type="hidden"
              name="e-mail"
              <?php echo'value="' . $_SESSION['user'] . '"'?>
              readonly
            />
            <input
              type="hidden"
              name="reis"
              <?php echo'value="' . $_GET['id'] . '"'?>
              readonly
            />
            <textarea
              type="text"
              name="bericht"
              placeholder="Schrijf hier uw recensie"
              style="height: 100px"
            ></textarea>
            <input type="submit" name="RECENSIE" value="Verzenden" />
          </form>
        </div>
      </div>
