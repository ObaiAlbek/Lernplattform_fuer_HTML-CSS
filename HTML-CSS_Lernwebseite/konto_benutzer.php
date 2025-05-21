<?php include_once ("Datenbanken.php") ?>
<?php include_once("for die Registieren.php"); ?>
<?php
    	$query = "SELECT * FROM registration WHERE ID";
        $ergebnisse = $dbh->query($query);
        foreach($ergebnisse as $row);
        $user_ID = $row["ID"];
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Benutzerkonto</title>
    <style>
           body {
	background-color: #F5F5F5;
	
}
        .container {
    background-color: #FFFFFF;
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 2px solid #000;
    margin-top:90px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

h1 {
    font-size: 36px;
    font-weight: bold;
}

p {
    font-size: 24px;
    margin-bottom: 10px;
}
a{
    color: #036;
    text-decoration: none;
    margin-top:10px;
}


    </style>
</head>
<body>
    <form method="post">
        <div class="container">
            <?php echo "<h1>".$row["firstName"]." ".$row["lastName"]."</h1>"; ?>
            <p> <strong>Email</strong></p>
            <?php echo "<p>".$row["email"]."</p>"; ?>
            <p> <strong>Land</strong></p>
            <?php echo "<p>".$row["land"]."</p>"; ?>
            <p> <strong>Geburt</strong></p>
            <?php echo "<p>".$row["geburt"]."</p>"; ?>
            <p> <strong>Telefonnummer</strong></p>
            <?php echo "<p>".$row["number"]."</p>"; ?>
            <a href="Profile_ändern.php">Profil bearbeiten</a><br><br>
            <input type="submit" name="abmelden" value="Abmelden" />
        </div>
    </form>
    <?php
        session_start();
        if (isset($_POST["abmelden"])){

            // Zurücksetzen der Session und Redirect.
			session_destroy();
            session_start();
			header("Location:Registrieren.php");
		}
    ?>	
</body>
</html>
