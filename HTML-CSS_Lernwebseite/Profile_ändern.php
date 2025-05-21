<!DOCTYPE html>
<html>
<head>
	<title>Ändere Deine Daten</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f1f1f1;
		}
		h2{
			text-align: center;
		}
		form {
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
			width: 500px;
			margin: 0 auto;
			font-weight: bolder;
		}
		input[type="text"], input[type="email"], input[type="number"],input[type="password"], select {
			padding: 10px;
			border-radius: 5px;
			margin-bottom: 10px;
			width: 90%;
			font-weight: bolder;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		
	</style>
</head>
<body>
	<form method = "post">
		<h2>Ändere Ihre Daten</h2>
		<label for="vorname">Vorname:</label>
		<input type="text" id="vorname" name="vorname"><br>

		<label for="nachname">Nachname:</label>
		<input type="text" id="nachname" name="nachname"><br>

		<label for="email">E-Mail:</label>
		<input type="email" id="email" name="email"><br>

		<label for="email2">E-Mail wiederholen (wenn geändert):</label>
		<input type="email" id="email2" name="email2"><br>

		<label for="land">Land:</label>
		<input type="text" id="land" name="land"><br>

		<label for="number">Telefonnummer:</label>
		<input type="number" id="number" name="number"><br>

		<label for="password">Kennwort:</label>
		<input type="password" id="password" name="password"><br>

		<label for="password2">Kennwort wiederholen (wenn geändert):</label>
		<input type="password" id="password2" name="password2"><br>

		<input type="submit" value="Speichern" name="submit">
	</form>
	<?php include_once("Datenbanken.php"); ?>
	<?php
		session_start();
		if(!empty($_POST["submit"])){
			$vorname = $_POST["vorname"];
			$nachname = $_POST["nachname"];

			$neu_email = $_POST["email"];
			$neu_email2 = $_POST["email"];

			$land = $_POST["land"];
			$telefonnummer = $_POST["number"];

			$password = $_POST["password"];
			$re_password = $_POST["password2"];


			// Erhalten Sie E-Mails von Cookies, die vor dem Zugriff auf diese Seite gesetzt wurden.
			$email = $_SESSION["email"];

			// Wählen Sie die passende E-Mail aus der Datenbank aus.
			$query = "SELECT * FROM registration WHERE email = ?";
			$stmt = $dbh->prepare($query);
			$stmt->execute([$email]);
			
			// Holen Sie sich die gesamte Zeile und ID.
			$row = $stmt->fetch();
			$user_ID = $row["ID"];


			// Handler für Kennwort änderungen.
			if (!empty($password)){
				// Länge des Passworts prüfen.
				if (strlen($password) < 8){
					exit ("<script>alert('Das Kennwort soll nicht kleiner als 8 Zeichen sein.');</script>");
				}
				
				// Überprüfen, ob die Passwörter übereinstimmen.
				if ($password != $re_password){
					exit ("<script>alert('Passwörter stimmen nicht überein.');</script>");	
				}

				// Aktualiseren das Passwort in der Datenbank.
				$query = "UPDATE registration SET `password` = ? WHERE ID = ?";
				$stmt = $dbh->prepare($query);
				$hash = password_hash($password, PASSWORD_DEFAULT);
				$stmt->execute([$hash, $user_ID]);
			}



			// Handler für E-Mail änderungen.
			if (!empty($neu_email)){
				// Überprüfen, ob die E-Mails übereinstimmen.
				if ($neu_email != $neu_email2){
					exit ("<script>alert('E-mails stimmen nicht überein.');</script>");	
				}

				// Aktualiseren das E-Mail in der Datenbank.
				$query = "UPDATE registration SET `email` = ? WHERE ID = ?";
				$stmt = $dbh->prepare($query);
				$stmt->execute([$neu_email, $user_ID]);
				$_SESSION["email"] = $neu_email;
			}


			if (!empty($vorname)) {
				$query = "UPDATE registration SET firstName = ? WHERE ID = ?";
				$stmt = $dbh->prepare($query);
				$stmt->execute([$vorname, $user_ID]);
			}
	
			if (!empty($nachname)) {
				$query = "UPDATE registration SET lastName = ? WHERE ID = ?";
				$stmt = $dbh->prepare($query);
				$stmt->execute([$nachname, $user_ID]);
			}
	
			if (!empty($land)) {
				$query = "UPDATE registration SET land = ? WHERE ID = ?";
				$stmt = $dbh->prepare($query);
				$stmt->execute([$land, $user_ID]);
			}
	
			if (!empty($telefonnummer)) {
				$query = "UPDATE registration SET `number` = ? WHERE ID = ?";
				$stmt = $dbh->prepare($query);
				$stmt->execute([$telefonnummer, $user_ID]);
			}
	
			// Erfolgsmeldung
			echo "<script>alert('Ihre Daten wurden erfolgreich geändert.');</script>";
		}
	?>
</body>
</html>
