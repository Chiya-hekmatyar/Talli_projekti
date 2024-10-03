<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $nimi = $_POST['nimi'];

    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'b5d4fc4458fd21';                     //SMTP username
    $mail->Password   = 'bd1fdfd53d1005';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom(address:'talli@gmail.com', name:'Mailer');
    $mail->addAddress(address:'chibiis088@gmail.com', name:'nimi');     //Add a recipient
   

 

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Talli rekistöroityminen';
    $mail->Body    = '<html><body><h1>Talli rekistoroityminen</h1>
    <p>Tervetuluo '.$nimi.' Talliin klikkaa alla olevaa linkkia valitsemaan koulutuksen ja hauskaa opiskelua</p>
    <p href="https://hekmatyarch-hxayb4dxd0dhdkan.westeurope-01.azurewebsites.net/koulutukset.php">klikkaa tasta</p></body></html>';
   

    $mail->send();
    header('Location: index.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}