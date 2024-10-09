<!DOCTYPE html>
<html>
<?php
$title = "Yhteydenottopyyntö";
$css = "yhteystiedot.css";

// Display all PHP errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "http://datasql7.westeurope.cloudapp.azure.com:8081/index.php?route=/&route=%2F&server=4";
$username = "hekmatyarch";
$password = "73711"; 
$dbname = "app_db";

include 'headers.php';

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Debug: Check if form data is received
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . $message . "<br>";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->options(MYSQLI_OPT_CONNECT_TIMEOUT, 20); // 20 seconds

    // Check connection
    if ($conn->connect_error) {
        // Log the error to the server log
        error_log("Connection failed: " . $conn->connect_error);
        echo "<script>console.error('Database connection failed: " . $conn->connect_error . "');</script>";
        die("Connection failed: " . $conn->connect_error);  // Stop execution on connection failure
    } else {
        echo "Database connected successfully!";
    }
    
    // Prepare the SQL statement with placeholders
    $stmt = $conn->prepare("INSERT INTO contact_requests (name, email, message) VALUES (?, ?, ?)");

    if (!$stmt) {
        error_log("Prepare failed: " . $conn->error);
        echo "<script>console.error('Prepare statement failed: " . $conn->error . "');</script>";
        die("Prepare failed: " . $conn->error);
    }

    // Bind parameters (s = string, for name, email, and message)
    $stmt->bind_param("sss", $name, $email, $message);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>console.log('Form submitted successfully');</script>";
        echo "<p>Yhteydenottopyyntö on lähetetty onnistuneesti!</p>";
    } else {
        error_log("Execution failed: " . $stmt->error);
        echo "<script>console.error('Execution failed: " . $stmt->error . "');</script>";
        echo "<p>Virhe: " . $stmt->error . "</p>";
    }
    
    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
<body>
<?php include 'navigointi.html'; ?>  
<div class="content container mt-5 pt-4"> 
  <h1>Yhteydenottopyyntö</h1>
  
  <div>
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
