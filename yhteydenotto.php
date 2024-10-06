<!DOCTYPE html>
<html>
<?php
$title = "Yhteydenottopyyntö";
$css = "yhteystiedot.css";
include 'headers.php';
?>
<body>
<?php include 'navigointi.html'; ?>  
<div class="content container mt-2"> 
  <h1>Yhteydenottopyyntö</h1>
  
  <div class="left">
    <h2>Ota yhteyttä</h2>
    <p>Voit ottaa meihin yhteyttä</p>
    <ul>
      <li>Puhelimitse yksittäisiin myymälöihin</li>
      <li>Sähköpostitse: <a href="mailto:asiakaspalvelu@talli.fi">asiakaspalvelu@talli.fi</a></li>
      <li>Alla olevalla lomakkeella</li>
    </ul>

   
    <form action="/submit-form" method="post">
      <div class="row mb-3"> 
        <label for="name" class="col-sm-2 col-form-label">Nimi:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
      </div>
      
      <div class="row mb-3"> 
        <label for="email" class="col-sm-2 col-form-label">Sähköposti:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
      </div>
      
      <div class="row mb-3"> 
        <label for="message" class="col-sm-2 col-form-label">Viesti:</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>
      </div>
      
      <div class="row mb-3"> 
        <div class="col-sm-10 offset-sm-2">
          <button type="submit" class="btn btn-primary w-100">Lähetä</button> 
        </div>
      </div>
    </form>
    
  </div>
</div>

<?php include 'footer.html'; ?>
</body>
</html>
