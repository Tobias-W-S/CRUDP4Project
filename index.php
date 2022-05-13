<?php
      include("includes/nav.php")
    ?>
<div class="background_landing">
    <div class="search_bar">
        
        <form class="indexFilter" method="post" action="cruises.php">
            <label>Vind uw perfecte cruise!</label>
            <div>
                <input type="text" placeholder="Bestemming..">
                <input type="text" placeholder="Startpunt..">
                <input type="text" placeholder="Duur..">
                <input type="text" placeholder="Aantal personen..">
                <input type="submit" value="Vind mijn cruise">
            </div>    

            
        </form>
    </div>
    <div class="cards"></div>
</div>
</body>
</html>