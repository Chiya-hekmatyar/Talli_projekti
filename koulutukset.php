<!DOCTYPE html>
<html>
<?php
$title = "koulutukset";
$css = "koulutukset.css";
include 'headers.php';
?>
<body>
<?php include 'navigointi.html'; ?>  
<div class="content">
  <h2 class="left">Koulutukset ja kurssit</h2>
  <p class="left">Tässä ovat Tallin tarjoamat koulutukset ja kurssit.</p>:
  <div class="sailio">
    <h2 class="left">Koulutuksia</h2>
    <div class="kuvaboxi-container">
        <div class="kuvaboxi">
            <img src="kuva.png" alt="Kuvan teksti">
            <div class="kuvaus" href="koulut.php">Javascript kurssi</div>
        </div>
        <div class="kuvaboxi">
            <img src="kuva2.png" alt="Kuvan teksti">
            <div class="kuvaus">php kurssi</div>
        </div>
        <div class="kuvaboxi">
            <img src="kuva3.png" alt="Kuvan teksti">
            <div class="kuvaus">mysql kurssi</div>
        </div>
        <div class="kuvaboxi">
            <img src="kuva4.png" alt="Kuvan teksti">
            <div class="kuvaus">html ja css kurssi</div>
        </div>
    </div>
</div>
</div>
<?php include 'footer.html'; ?>
</body>
</html>