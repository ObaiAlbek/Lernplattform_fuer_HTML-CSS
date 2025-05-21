<?php include_once ("Datenbanken.php"); ?>
<?php
	session_start();

	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
	
	// Name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	if (!empty($_POST["submit"])){ 
		$vorname = $_POST['firstName'];
		$nachname = $_POST['lastName'];
		$geschlecht = $_POST['gender'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$number = $_POST['number'];
		$land = $_POST["land"];
		$geburt =$_POST["geburt"];
		
		// Überprüfe, ob der Email bereits in Datenbanken ist

		$query = "SELECT * FROM registration WHERE email = '$email'";
		$ergebnis = $dbh->query($query);

		$stmt = $dbh->prepare("SELECT * FROM registration WHERE email = ?");
		$stmt->execute([$email]);
		$ergebnis = $stmt->fetch();
	
		// Wenn der Benutzer ist schon in der Datenbank
		if ($stmt->rowCount() > 0){

			exit("<p style = 'text-align:left; color: red; margin-left: 30px; border-bottom: none;'>Die E-Mail ist bereits registriert.</p>
				 <butto class='log_php'><a href='Anmelden.php'>Anmelden</a></button>
				 ");
		}
		
		if (strlen($password) < 8) {
			exit ("<script>alert('Das Kennwort soll nicht kleiner als 8 Zeichen sein.');</script>");
		}

		// Wenn der Benutzer ist nicht in der Databank
		else { 
			$hash = password_hash($password, PASSWORD_DEFAULT);
			$stmt = $dbh->prepare("INSERT INTO registration(firstName, lastName, gender, email, password, number, land, geburt, verified) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
			$stmt->execute([$vorname, $nachname, $geschlecht, $email, $hash, $number, $land, $geburt, false]);
			
			$_SESSION['email'] = $email;
			$_SESSION['gender'] = $geschlecht;
			$_SESSION['nachname'] = $nachname;
			$_SESSION['vorname'] = $vorname;

			
			// PHP Mailer
			// neue Instanz von PHPMailer
			$mail = new PHPMailer();

			// Mailer soll SMTP nutzen
			$mail->isSMTP();

			// Smtp host
			$mail->Host = "smtp.gmail.com";
			
			// unterstütze deutsche Sprahce
			$mail->setLanguage('de');

			// Smtp authentication erlauben
			$mail->SMTPAuth = true;

			// Smtp encryption type (ssl/tls)
			$mail->SMTPSecure = "tls";

			// Port fur smtp
			$mail->Port = "587";

			// Gmail username
			$mail->Username = "Obay.albeek@gmail.com";

			// Gmail passwort
			$mail->Password = "rfpjqehacvvkzdjg";

			// Email Thema
			$mail->Subject = "Ihre Anmeldung war erfolgreich";
			
			// Empfänger hinzufugen
			$mail->addAddress($email);

			// Erlaub HTML
			$mail->isHTML(true);

			// Sender hinzufugen
			$mail->setFrom("Obay.albeek@gmail.com", "OVCode");

			$code = '';
			$zeichen = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$zeichen_len = strlen($zeichen);
			for ($i = 0; $i < 8; $i++) {
				$code .= $zeichen[rand(0, $zeichen_len - 1)];
			}

			$stmt = $dbh->prepare("INSERT INTO `verify-code`(email,code) VALUES (?, ?)");
			$stmt->execute([$email, $code]);
			$_SESSION['code'] = $code;


			// Gender anrede auswahlen
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$gender = "geehrte ".$vorname;
				if ($_POST["gender"] == "m") $gender = "geehrter Herr";
				else if ($_POST["gender"] == "f" ) $gender = "geehrte Frau";
				
			
			// Mail body erstellen in html
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

			// Mail schicken
			$mail->send();
					
			// SMTP verbindung beenden
			$mail->smtpClose();

			header("Location: email_bestätigen.php");
		}
	}	
}
	
?>
<script>
	//Password zeigen
	function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "Stext";
        } else {
          x.type = "password";
      }
    }
</script>
