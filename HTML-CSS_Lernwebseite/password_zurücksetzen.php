<?php include_once("Datenbanken.php"); ?>
<?php 
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
	
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Passwortzurücksetzung</title>
  <link rel="stylesheet" href="style.css">
  <style>
    * {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.container {
  width: 500px;
  margin: 50px auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

h1 {
  text-align: center;
  color: #333;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  margin-top: 10px;
  margin-bottom: 5px;
  font-weight: bold;
  text-align: left;
}

input[type="password"], input[type="email"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: none;
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

input[type="submit"] {
  background-color: #4CAF50;
	color: #FFFFFF;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	font-size: 16px;
}

input[type="submit"]:hover {
  background-color: #555;
}

  </style>
</head>
<body>
<div class="container">
    <h1>Password zurücksetzen</h1>
    <form method="post">
      <label for="email">E-Mail Addresse</label>
      <input type="email" id="email" name="email" required>

      <label for="new_password">Neues kennwort</label>
      <input type="password" id="new_password" name="password_1" required>
      <label for="re_password">Bestätige das neue Passwort</label>
      <input type="password" id="re_password" name="password_2" required>
      <input type="submit" value="Password zurücksetzen" name="submit">
    </form>
  </div>

<?php
session_start();
// Dieser Code verarbeitet das Front-End der Passwortwiederherstellungsseite,
// generiert einen Schlüssel und speichert ihn zusammen mit anderen erforderlichen Elementen für die Passwortwiederherstellungslogik 
// und sendet dann eine E-Mail mit einem Link an den Benutzer, den er verlinken kann, um das Zurücksetzen des Passworts zu bestätigen.

// Wenn das Formular nicht leer ist, vergleichen wir das Passwort mit dem "Passwort bestätigen", dann prüfen wir, ob das Passwort weniger als 8 Zeichen oder mehr als 20 Zeichen hat, 
// wenn einer von der Bedingungenen wahr ist, beenden wir mit exit().


// Dann prüfen wir, ob der Benutzer eine aktive Anfrage zum Zurücksetzen des Passworts hat, wenn ja, 
// setzen wir das Token auf die aktuelle session_id, new_password als neu bereitgestelltes Passwort und verwenden den Schlüssel aus der vorherigen Anfrage,
// wenn jedoch keine aktive Anfrage gefunden wird, generieren wir ein key und speichern Sie in der Dattenbank zusammen mit dem Token (Sitzungs-ID), der E-Mail und dem neuen_Passwort. 

// Als nächstes richten wir unseren PHPMailer ein, finden die korrekte Höflichkeitsformel in Bezug auf das Geschlecht und erstellen dann einen E-Mail-Text und versenden ihn. 

if (!empty($_POST["submit"])){
  $password = $_POST["password_1"];
  $con_password = $_POST["password_2"];
  $email = $_POST["email"];

  if($con_password != $password){
    exit("<script>alert('Das Password ist nicht gleich.');</script>");
  }

  if (strlen($password) < 8) {	
    exit ("<script>alert('Das Kennwort soll bitte nicht kleiner als 8 Zeichen sein.');</script>");
  }

  if (strlen($password) > 20) {	
    exit ("<script>alert('Das Kennwort soll bitte nicht größer als 20 Zeichen sein.');</script>");
  }

  if (!isset($email)) {
    exit ("<script>alert('Wir haben Ihnen eine E-Mail gesendet, um diese Änderung zu bestätigen, falls Ihre E-Mail-Adresse existiert.');</script>");
  }

  // Nimmt Nachname und Geschlecht aus der Datenbank, wo die E-Mail mit der Benutzereingabe übereinstimmt.
  $stmt = $dbh->prepare("SELECT lastName, gender FROM `registration` WHERE email = ?");
  $stmt->execute([$email]);
  $ergebnis = $stmt->fetch();

  // Überprüft, ob etwas zurückgesendet wurde, wenn nicht, bedeutet dies, dass die E-Mail nicht registriert ist.
  if (!$ergebnis) {
    exit ("<script>alert('Wir haben Ihnen eine E-Mail gesendet, um diese Änderung zu bestätigen, falls Ihre E-Mail-Adresse existiert.');</script>");
  }
  
  $geschlecht = $ergebnis['gender'];
  $nachname = $ergebnis['lastName'];


  // Ruft jeden key_ aus der Datenbank ab, bei dem eine E-Mail mit derjenigen übereinstimmt, die gerade eine Anfrage zum Zurücksetzen des Passworts stellt
  $stmt = $dbh->prepare("SELECT key_ FROM `password-reset` WHERE email = ?");
  $stmt->execute([$email]);
  $ergebnis = $stmt->fetch();


  // Wenn etwas zurückgegeben wurde, bedeutet dies, dass ein Benutzer eine aktive Anforderung zum Zurücksetzen des Kennworts hat und dieser Schlüssel verwendet wird, 
  // anstatt einen neuen zu generieren
  if($ergebnis){
    $key = $ergebnis['key_'];

    $stmt = $dbh->prepare("UPDATE `password-reset` SET token = ? WHERE email = ?");
    $stmt->execute([session_id(), $email]);

    $stmt = $dbh->prepare("UPDATE `password-reset` SET new_password = ? WHERE email = ?");
    $stmt->execute([$password, $email]);
  } 

  else {
    // Dies erzeugt einen 16 Zeichen schlüssel
    $key = "";
    $zeichen = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $zeichen_len = strlen($zeichen);
    for ($i = 0; $i < 16; $i++) {
      $key .= $zeichen[rand(0, $zeichen_len - 1)];
    }

    $stmt = $dbh->prepare("INSERT INTO `password-reset` (token, new_password, key_, email) VALUES (?, ?, ?, ?)");
    $stmt->execute([session_id(), $password, $key, $email]); 
  }

  $gender = "geehrte ";
	if ($geschlecht == "m") $gender = "geehrter Herr ";
	else if ($geschlecht == "f" ) $gender = "geehrte Frau ";
  

  $body = "<div>
  <h1>Passwort zurücksetzen</h1>
  <p>Sehr ".$gender.$nachname.",</p>
  <p>Wir haben eine Anfrage erhalten, um Ihr Passwort zurückzusetzen. Bitte klicken Sie auf den folgenden Link, um das Zurücksetzen Ihres Passworts zu bestätigen:</p>
  <p><a href='http://localhost/obai_Viktor_projektarbeit/reset_password.php?key=".$key."'>Passwort zurücksetzen</a></p>
  <p>Wenn Sie kein Passwort zurücksetzen wollten, können Sie diese E-Mail ignorieren und Ihr Passwort wird nicht geändert.</p>
  <p>Vielen Dank,</p>
  <p>Das Team</p>
  </div>";

  // // http://localhost/obai_Viktor_projektarbeit/reset_password.php?key=testingKey
  $mail = new PHPMailer;

  $mail->isSMTP(); // Set mailer to use smtp
  $mail->Host = 'smtp.gmail.com'; // SMTP Mailer zu nutzen
  $mail->setLanguage('de');
  $mail->SMTPAuth = true;     // Erlaubt SMTP authentication
  $mail->SMTPSecure = "tls";  //Set smtp encryption typ (ssl/tls)
  $mail->Port = "587";
  $mail->Username = 'Obay.albeek@gmail.com'; // E-mail von wem der email geshickt wird
  $mail->Password = 'rfpjqehacvvkzdjg';  // SMTP login


  $mail->setFrom('Obay.albeek@gmail.com', 'OVCode');//
  $mail->addAddress($email);  // Address wo der email geschickt wird
  
  $mail->isHTML(true);
  $mail->CharSet = 'UTF-8';
  $mail->Subject = 'Bestätigen Sie Ihre Passwortzurücksetzung';
  $mail->Body = $body;
 
  $mail->send();
  $mail->smtpClose();

  echo "<script>alert('Wir haben Ihnen eine E-Mail gesendet, um diese Änderung zu bestätigen, falls Ihre E-Mail-Adresse existiert.');</script>";
  echo "<div style='text-align: center'>Wir haben Ihnen eine E-Mail gesendet, um diese Änderung zu bestätigen</div>";
}
 
  
  
?>
</body>
</html>
