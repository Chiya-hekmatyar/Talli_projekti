<!DOCTYPE html>
<html>
<?php
$title = "Yhteydenottopyyntö";
$css = "yhteystiedot.css";
include 'head.php';
?>
<body>
<?php include 'navigointi.html'; ?>  
<div class="content">
<h1>Yhteydenottopyyntö</h1>
<div class="left">
  <h2>Ota yhteyttä</h2>
  <p>Voit ottaa meihin yhteyttä</p>
  <ul>
    <li>Puhelimitse yksittäisiin myymälöihin</li>
    <li>Sähköpostitse: <a href="mailto:asiakaspalvelu@puutarhaliikeneilikka.fi">asiakaspalvelu@puutarhaliikeneilikka.fi</a></li>
    <li>Alla olevalla lomakkeella</li>
</ul>

<form action="/submit-form" method="post">
    <label for="name">Nimi:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="email">Sähköposti:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="message">Viesti:</label><br>
    <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
    
    <input type="submit" value="Lähetä">
</form>
</div> 
</div>
</div>
<?php include 'footer.html'; ?>
</body>
</html>

