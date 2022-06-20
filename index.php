<?php
      include("includes/nav.php");
?>
<div class="background_landing">
  <div class="logo" onclick="lightmode()"></div>
  <div class="search_bar">
    <h2>Vind uw perfecte cruise</h2>
    <form method="post" action="cruises.php">
      <div class="cruise_zoeken">
        <input name="Bestemming" type="text" placeholder="Bestemming.." />
        <input name="Start" type="text" placeholder="Startpunt.." />
        <input name="StartDatum" type="date" />
        <input name="EindDatum" type="date" />
        <input name="Personen" type="text" placeholder="Aantal personen.." />
        <input name="submitfilter" type="submit" value="Zoeken" />
      </div>
    </form>
  </div>
  <a href="#favoriet"><div class="arrow"></div></a>
</div>
<div id="favoriet" class="titel_card">
  <h2>Kies hier uw favoriete cruise vakantie</h2>
</div>
<div class="cards">
  <div class="card_box">
    <div class="card">
      <figure class="card__thumb">
        <img src="media/cruise_ship.jpg" alt="" class="card__image" />
        <figcaption class="card__caption">
          <h2 class="card__title">Populaire cruises</h2>
          <p class="card__snippet">
            In de winter op een van onze cruises? dan bent u bij ons bij het
            juiste adres
          </p>
          <a href="cruises.php" class="card__button">Bekijk aanbod</a>
        </figcaption>
      </figure>
    </div>
    <div class="card">
      <figure class="card__thumb">
        <img src="media/seabourn.jpg" alt="" class="card__image" />
        <figcaption class="card__caption">
          <h2 class="card__title">Zon vakantie</h2>
          <p class="card__snippet">
            Heerlijk naar de zon op een van onze cruises? dan bent u bij ons bij
            het juiste adres
          </p>
          <a href="cruises.php" class="card__button">Bekijk aanbod</a>
        </figcaption>
      </figure>
    </div>

    <div class="card">
      <figure class="card__thumb">
        <img src="media/winter.jpg" alt="" class="card__image" />
        <figcaption class="card__caption">
          <h2 class="card__title">Winter vakantie</h2>
          <p class="card__snippet">
            In de winter op een van onze cruises? dan bent u bij ons bij het
            juiste adres
          </p>
          <a href="cruises.php" class="card__button">Bekijk aanbod</a>
        </figcaption>
      </figure>
    </div>
    <div class="card">
      <figure class="card__thumb">
        <img src="media/lastminute.jpg" alt="" class="card__image" />
        <figcaption class="card__caption">
          <h2 class="card__title">Last minute</h2>
          <p class="card__snippet">
            In de winter op een van onze cruises? dan bent u bij ons bij het
            juiste adres
          </p>
          <a href="cruises.php" class="card__button">Bekijk aanbod</a>
        </figcaption>
      </figure>
    </div>
    <div class="card">
      <figure class="card__thumb">
        <img src="media/europa.jpg" alt="" class="card__image" />
        <figcaption class="card__caption">
          <h2 class="card__title">Europa cruises</h2>
          <p class="card__snippet">
            In de winter op een van onze cruises? dan bent u bij ons bij het
            juiste adres
          </p>
          <a href="cruises.php" class="card__button">Bekijk aanbod</a>
        </figcaption>
      </figure>
    </div>
    <div class="card">
      <figure class="card__thumb">
        <img src="media/zee.jpg" alt="" class="card__image" />
        <figcaption class="card__caption">
          <h2 class="card__title">Middelandse zee cruises</h2>
          <p class="card__snippet">
            In de winter op een van onze cruises? dan bent u bij ons bij het
            juiste adres
          </p>
          <a href="cruises.php" class="card__button">Bekijk aanbod</a>
        </figcaption>
      </figure>
    </div>
  </div>
</div>
<div class="cards"></div>
<script src="js/main.js"></script>
</body>
</html>
