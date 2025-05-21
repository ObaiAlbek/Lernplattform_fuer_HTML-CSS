<!DOCTYPE html>
<html>
<head>
    <title>Email Bestätigung</title>
    <meta charset="UTF-8">
    <meta name="author" content="Obai und Viktor">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			color: #333;
			text-align: center;
		}

		h1 {
			font-size: 2em;
			margin-top: 30px;
		}

		form {
			display: inline-block;
			margin-top: 50px;
			padding: 20px;
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0,0,0,0.2);
		}

        form a {
            float: left;
            font-size: 15px;
        }

		input[type="text"] {
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-bottom: 10px;
			width: 100%;
			box-sizing: border-box;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			width: 100%;
			box-sizing: border-box;
			margin-top: 10px;
		}

        #resend {
            display: none;
        }
    </style>

</head>


<body>
<div class="description">
    Wir haben Ihnen einen Bestätigungscode per E-Mail gesendet. Bitte kopieren Sie es in das unten stehende Feld, um Ihre Registrierung zu bestätigen.
</div>

<h1>Email Bestätigung</h1>
<form method="POST">
    <label for="code">Geben Sie den 8-stelligen Bestätigungscode ein:</label><br>
	<input type="text" id="code" name="verify" placeholder="Bestätigungscode"><br>
	<input type="submit" value="Bestätigen" name="submit">
    <a href="#" id="resend">Resend email</a>
</form>

<?php include_once ("Datenbanken.php"); ?>
<?php
    function alert_false_code($code){
        // resend <a> tag anzeigen und popup window zeigen
        echo "<script>document.getElementById('resend').style.display = 'block';</script>";
        echo '<script type="text/javascript">window.onload = function () { alert("'.$code.' ist ungültig"); } </script>'; 
    }
    if (!empty($_POST)){
        $gegebene_code = $_POST["verify"];
        
        //Select der email wo der benutzer gegebene code ist gleich wie code in db
        //$query = "SELECT email FROM `verify-code` WHERE code = '$gegebene_code'";
		//$ergebnis = $dbh->query($query);

        $query = "SELECT email FROM `verify-code` WHERE code = ?";
        $stmt = $dbh->prepare($query);

        $stmt->execute([$gegebene_code]);
        $ergebnis = $stmt->fetch(PDO::FETCH_ASSOC);

        // wenn kein resultat zuruck gegeben wird exit()
        if (empty($ergebnis)) {
            alert_false_code($gegebene_code);
        }

        // Der code passt zur email
        if($ergebnis){
            $email = $ergebnis['email'];

            // Loschen der code von der databank
            $stmt = $dbh->prepare("DELETE FROM `verify-code` WHERE email = ?");
            $stmt->execute([$email]);

            // Andern der verified auf true
            $stmt = $dbh->prepare("UPDATE registration SET verified = true WHERE email = ?");
            $stmt->execute([$email]);
            $_SESSION['loggedIn'] = true;

            // Redirect auf homepage
            header("Location: Homepage.php");

          } else alert_false_code($gegebene_code);
    }
?>
<script>
    const sendResendEmail = document.getElementById('resend');
    // Click listener
    sendResendEmail.addEventListener('click', function(event) {
        event.preventDefault();        
 
        // Shick ein request an AJAX zur der PHP script der, der email wiedershickt
        const nxhr = new XMLHttpRequest();
        nxhr.open('POST', 'email_bestatigen_resend.php', true);
        nxhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        nxhr.onreadystatechange = function() {
            if (nxhr.readyState === 4 && nxhr.status === 200) {
                console.log(nxhr.responseText);
            }
        }
    nxhr.send();
}); 
        
        
              
</script>

<script>
    const resendLink = document.getElementById('resend');
    
    resendLink.addEventListener('click', function(event) {
        event.preventDefault();
        alert("Der email war wieder gesendet");
    });
</script>
</body>









</html>