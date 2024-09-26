<!DOCTYPE html>
<html>
<head>
    <title><?= $title; ?></title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="site.css">
    <?php if (isset($css)) echo "<link rel='stylesheet' href='$css'>"; ?>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script defer src="scripts.js"></script>
    <script defer src="kaupunki.js"></script>
    <?php if (isset($js)) echo "<script defer src='$js'></script>"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  
<nav>
    <div class="navbar">
      <div><a href="index.php">Home</a></div>
              <div><a href="login.php">Login</a></div>
        <div><a href="register.php">Register</a></div>
            </div>




  <h1>Production Index page</h1>
  <h3 class='info'>You are in production now.</h3> 
  <p>This is a test version of the cardgame creator</p>

  

  <footer>
  This is a very simple test site fetched and running at: 2024-09-26 12:59:31  </footer>

</body>