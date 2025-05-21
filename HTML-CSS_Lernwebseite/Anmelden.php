<?php include_once ("Datenbanken.php") ?>

<!DOCTYPE html>
<html>
<head>
	<title>Anmelden</title>
    <style>
        body {
	background-color: #F5F5F5;
	font-family: Arial, sans-serif;
}

.login-box {
	background-color: #FFFFFF;
	border-radius: 10px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
	padding: 20px;
	margin: 100px auto;
	width: 400px;
}

h1 {
	text-align: center;
	margin-bottom: 30px;
}

label {
	display: block;
	margin-bottom: 8px;
}

input[type="email"], input[type="password"] {
	padding: 10px;
	width: 80%;
	border-radius: 5px;
	border: 1p solid black;
	margin-bottom: 20px;
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

    </style>
</head>
<body>
	<div class="login-box">
		<h1>Anmelden</h1>
		<form method="post">
			<label for="email">Email-Adresse:</label>
			<input type="email" name="email" id="email" placeholder="Ihre Email-Adresse" required>
			<label for="password">Passwort:</label>
			<input type="password" name="password" id="password" placeholder="Ihr Passwort" required>
			<input type="submit" name="submit" value="Anmelden"><br><br>
			<?php include_once ("Anmelden quellcode.php") ?>
		</form>
	</div>
</body>


</html>
