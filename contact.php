<?php
      include("includes/nav.php")
?>
  <div class="background_contact">
    <div class="contact">
      <p>
        <strong>Contact</strong><br />
        <br />
        - Mail: fakfnanfla@gmail.com<br /><br />
        - Telefoonnummer: 06 12345678<br /><br />
        - Adres: Een straat 101, 1234 AB Nijmegen<br />
      </p>
    </div>
    <div class="contact_form">
      <form action="includes/user.php" method="post">
        <label for="e-mail">Uw e-mail</label>
        <input
          type="text"
          id="e-mail"
          name="e-mail"
          placeholder="Uw e-mailadres"
        />

        <label for="onderwerp">Onderwerp</label>
        <input
          type="text"
          id="onderwerp"
          name="onderwerp"
          placeholder="Typ hier het onderwerp"
        />

        <label for="bericht">Uw bericht</label>
        <textarea
          type="text"
          id="bericht"
          name="bericht"
          placeholder="Schrijf hier uw bericht"
          style="height: 200px"
        ></textarea>

        <input type="submit" name="CONTACT" value="Verzenden" />
      </form>
    </div>
  </div>
</body>
</html>