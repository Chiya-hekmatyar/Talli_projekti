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
  <div class="container">
    <h2 class="left">Koulutukset ja kurssit</h2>
    <p class="left">Tässä ovat Tallin tarjoamat koulutukset ja kurssit.</p>

    <div class="row">
      <h2 class="left">Koulutuksia</h2>
      <!-- First Course -->
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="card h-100">
          <a href="javascriptkoulutus.php">
            <img class="card-img-top" src="kuva.png" alt="Javascript kurssi">
          </a>
          <div class="card-body text-center">
            <h5 class="card-title">Javascript kurssi</h5>
          </div>
        </div>
      </div>

      <!-- Second Course -->
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="card h-100">
          <a href="phpkoulutus.php">
            <img class="card-img-top" src="kuva2.png" alt="PHP kurssi">
          </a>
          <div class="card-body text-center">
            <h5 class="card-title">PHP kurssi</h5>
          </div>
        </div>
      </div>

      <!-- Third Course -->
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="card h-100">
          <a href="mysqlkoulutus.php">
            <img class="card-img-top" src="kuva3.png" alt="MySQL kurssi">
          </a>
          <div class="card-body text-center">
            <h5 class="card-title">MySQL kurssi</h5>
          </div>
        </div>
      </div>

      <!-- Fourth Course -->
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="card h-100">
          <a href="htmlcsskoulutus.php">
            <img class="card-img-top" src="kuva4.png" alt="HTML ja CSS kurssi">
          </a>
          <div class="card-body text-center">
            <h5 class="card-title">HTML ja CSS kurssi</h5>
          </div>
        </div>
      </div>

    </div> <!-- End of row -->
  </div> <!-- End of container -->
</div>

<?php include 'footer.html'; ?>
</body>
</html>