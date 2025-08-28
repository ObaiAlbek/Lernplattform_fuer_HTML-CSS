<?php
    if(!empty($_POST["submit"])){
        $email = $_POST["email"];
        $passwort = $_POST["password"];
        $stmt = $dbh->prepare("SELECT `password` FROM registration WHERE email = ?");
        $stmt->execute([$email]);
        $zeile = $stmt->fetch();
        $hash_passwort = $zeile['password'];

        // Password prufen
        if (password_verify($passwort, $hash_passwort)) {
            header("Location: konto_benutzer.php");
            exit();
        } else {
            exit("<script>alert('Falsche E-Mail Adresse oder kennwort.');</script>".
				 "<a style= 'margin-left: 2px; margin-top:20px;' href='password_zurücksetzen.php'>password vergessen?</a>");
        }
    }
?>