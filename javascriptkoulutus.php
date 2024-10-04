<!DOCTYPE html>
<html>
<?php
$title = "Javascript koulutus";
$css = "koulutuksiencss.css";
include 'headers.php';
?>
<body>
    <?php include 'navigointi.html'; ?>  

    <div class="content container mt-5">
      
        <h1 class="text-left">Javascript Koulutus</h1>
        
        <p class="text-left">
            JavaScript on yksi tärkeimmistä ohjelmointikielistä, jota käytetään laajasti web-kehityksessä. 
            Se mahdollistaa dynaamiset ja interaktiiviset verkkosivut. Koulutuksessa opit perusasiat 
            JavaScriptistä, sekä kuinka sitä käytetään web-sovellusten kehittämiseen.
        </p>

        <!-- Login and Register Section -->
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
