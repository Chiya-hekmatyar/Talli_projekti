<!DOCTYPE html>
<html>
<?php
$title = "Yhteydenottopyyntö";
$css = "yhteystiedot.css";
$servername = "datasql7.westeurope.cloudapp.azure.com";
$username = "hekmatyarch";
$password = "73711"; 
$dbname = "db04";

include 'headers.php';

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Prepare the SQL statement with placeholders
    $stmt = $conn->prepare("INSERT INTO contact_requests (name, email, message) VALUES (?, ?, ?)");
    
    // Bind parameters (s = string, for name, email, and message)
    $stmt->bind_param("sss", $name, $email, $message);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "<p>Yhteydenottopyyntö on lähetetty onnistuneesti!</p>";
    } else {
        echo "<p>Virhe: " . $stmt->error . "</p>";
    }
    
    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
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

    <form action="" method="post">
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
