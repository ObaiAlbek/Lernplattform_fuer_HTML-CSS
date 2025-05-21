<?php
session_start();

require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
	
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer;

$mail->isSMTP(); // Set mailer to use smtp
$mail->Host = 'smtp.gmail.com'; // SMTP Mailer zu nutzen
$mail->setLanguage('de');
$mail->SMTPAuth = true;     // Erlaubt SMTP authentication
$mail->SMTPSecure = "tls";  //Set smtp encryption typ (ssl/tls)
$mail->Port = "587";
$mail->Username = 'Obay.albeek@gmail.com'; // E-mail von wem der email geshickt wird
$mail->Password = 'rfpjqehacvvkzdjg';  // SMTP login



if (isset($_SESSION['email']) && isset($_SESSION['gender']) && isset($_SESSION['code']) && isset($_SESSION['nachname'])) {
    // $gender ist eine default variable die bei default auskommt wie "geehrte <name>" also in benutzung wird es "sehr geheerte <name> <nachname>" kommen
    // $gender wird geandert so dass es zu gewahlten geschelecht passt, default=o==divers
    $recipient = $_SESSION['email'];
    $nachname = $_SESSION['nachname'];
    $code = $_SESSION['code'];
    $vorname = $_SESSION['vorname'];

    $gender = "geehrte ".$vorname;
	if ($_SESSION["gender"] == "m") $gender = "geehrter Herr";
	else if ($_SESSION["gender"] == "f" ) $gender = "geehrte Frau";
    
} else {
    echo "<script>alert('errorn1');</script>";
    echo "<script>console.log('errorn1');</script>";
    exit("Error mit session werte");
}
$mail->setFrom('Obay.albeek@gmail.com', 'OVCode');//
$mail->addAddress($recipient);  // Address wo der email geschickt wird
$mail->isHTML(true);
$mail->Subject = 'Ihre Anmeldung war erfolgreich';


$body = '
	<div style="color:black">
	<p>Sehr '.$gender.' '.$nachname.'<br>
	Vielen Dank für die Registrierung auf unserer Website.<br>
	Bitte bestätigen Sie Ihre Anmeldung mit dem unten stehenden Code</p>
	<div style="background-color: #CCCCCC; padding: 10px; margin-top: 10px; display: inline-block;">
	<p style="font-size: 24px; margin: 0;"><span style="font-size: 36px;">'.$code.'</span></p>
	</div>
	<p>Wenn Sie diese E-Mail nicht angefordert haben, ignorieren Sie sie bitte.<br><br>
	Mit freundlichen Grüßen,<br>
	Viktor Benkovic<br>
	Obai Albek</p><br>
	</div>';
$mail->Body = $body;

// Send the email
$mail->send();
$mail->smtpClose();
?>