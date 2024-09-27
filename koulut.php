<!DOCTYPE html>
<html>
<?php
$title = "Koulut";
$css = "koulut.css";
include 'headers.php';
?>
<body>
<?php include 'navigointi.html'; ?>  
<div class="content">
<h2 class="store">Koulut</h2>
  <p class="store">Tässä ovat koulut jossa jotkut koulutukset ja kurssit pidetään viikottain</p>
  <div class="store">
    <h2>Talli, Helsinki</h2>
    <p>Fabianinkatu 42</p>
    <p>00100 Helsinki</p>
    <p>Puh. xx-xxxxxx</p>
    <p>Sähköposti: <a href="mailto:helsinki@talli.fi">helsinki@talli.fi</a></p>
    <p>Avoinna 7-18</p>
</div>

<div class="store">
    <h2>Talli, Espoo</h2>
    <p>Kivenlahdentie 10</p>
    <p>01234 Espoo</p>
    <p>Puh. xx-xxxxxx</p>
    <p>Sähköposti: <a href="mailto:espoo@talli.fi">espoo@talli.fi</a></p>
    <p>Avoinna 7-18</p>
</div>
</div>
<?php include 'footer.html'; ?>
</body>
</html>