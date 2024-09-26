

<!DOCTYPE html>
<html>
<?php
$title = "Tuotteet";
$css = "tuotteet.css";
include 'head.php';
?>
<body>
<?php include 'navigointi.html'; ?>  
<div class="content">
  <h2 class="left">Tuotteet</h2>
  <p class="left">Tuotevalikoimaamme kuuluu ruokia, ulkokasveja sekä työkaluja ja muita tarvikkeita kasvien hoitoon.</p>
  <div class="sailio">
    <h2 class="left">Ruokia</h2>
    <div class="kuvaboxi-container">
        <div class="kuvaboxi">
            <img src="kuva.jpg" alt="Kuvan teksti">
            <div class="kuvaus">wrap</div>
        </div>
        <div class="kuvaboxi">
            <img src="kuva2.jpg" alt="Kuvan teksti">
            <div class="kuvaus">keitto</div>
        </div>
        <div class="kuvaboxi">
            <img src="kuva3.jpg" alt="Kuvan teksti">
            <div class="kuvaus">Lihapiirakka</div>
        </div>
        <div class="kuvaboxi">
            <img src="kuva4.jpg" alt="Kuvan teksti">
            <div class="kuvaus">Jälkiruoka</div>
        </div>
    </div>
</div>
</div>
<?php include 'footer.html'; ?>
</body>
</html>