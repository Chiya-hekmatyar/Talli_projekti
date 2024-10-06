<!DOCTYPE html>
<html>
<?php
$title = "PHP koulutus";
$css = "koulutuksiencss.css";
include 'headers.php';
?>
<body>
    <?php include 'navigointi.html'; ?>  

    <div class="content container mt-6">
      
        <h1>PHP Koulutus</h1>
        
      
        <p class="left">
            PHP on palvelinpuolen ohjelmointikieli, jota käytetään verkkosivujen ja web-sovellusten kehittämisessä.
            Se on erityisen tehokas dynaamisten sivustojen rakentamiseen ja vuorovaikutukseen tietokantojen kanssa.
            PHP-koulutuksessa opit, kuinka kehitetään tehokkaita ja turvallisia web-sovelluksia.
        </p>

       
        <div class="row justify-content-center mt-4">
            <!-- Login Box -->
            <div class="col-md-5">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title text-center">Kirjaudu sisään</h2>
                        <form action="login.php" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Käyttäjätunnus:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Salasana:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Kirjaudu</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Register Box -->
            <div class="col-md-5 mt-3 mt-md-0">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h2 class="card-title">Rekisteröidy</h2>
                        <p>Jos sinulla ei ole vielä tiliä, rekisteröidy nyt!</p>
                        <a href="rekisteroityminen.php" class="btn btn-outline-secondary">Rekisteröidy tästä</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.html'; ?>
</body>
</html>
