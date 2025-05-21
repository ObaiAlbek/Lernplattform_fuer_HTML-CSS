
<!DOCTYPE html>
<html>
<head>
	<title>Jetzt registrieren
</title>
<meta charset="UTF-8">
    <meta name="author" content="Obai & Viktor">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/für die Registieren.css">
</head>
<body>
	<div class="login-box">
		<h1>Jetzt registrieren</h1>


		<form method="post">
    <label class="genlab">Geschlecht<span style="color:red">*</span></label>
      <div class="gender">


            <label for="male">
              <input type="radio"  name="gender" value="m" id="male" class="radio" required/> Männlich
            </label>

            <div class="rest">
            <label for="female" >
              <input type="radio" name="gender" value="f" id="female" class="radio" required/>Weiblich
            </label>

            <label for="others">
              <input type="radio" name="gender" value="o" id="others" class="radio" required/>Divers
            </label><br> 

        </div></div>

      <div class="container">

      <label for="firstName">Vorname<span>*</span></label>              
      <input type="text" id="firstName" name="firstName" placeholder="Ihren Vorname" class="textInput" required>

			<label for="lastName">Nachname<span>*</span></label>              
      <input type="text" id="lastName" name="lastName" placeholder="Ihren Nachname" class="textInput" required>

      <label for="geburt">Geburtstag<span>*</span></label>          
      <input type="date" id="geburt" name="geburt" required placeholder="Ihren Geburtstag" class="textInput">

      <label for="email">E-Mail<span>*</span></label>            
      <input type="text" id="email" name="email" placeholder="Ihre E-Mail" class="textInput" >     

      <label for="password">Kennwort<span>*</span></label>        
      <input type="password" id="password" name="password" placeholder="Ihr Kennwort" class="textInput" style="margin-bottom: 1px; padding-right: 20.5px" required >
<br>
      <input type="checkbox" onclick="myFunction()" id="zeige_pass"> Kennwort anzeigen
<br><br>
      <label for="number">Telefonnummer<span>*</span></label>
      <input type="number" id="number" name="number" placeholder="Ihre Telefonnummer" class="textInput" style="padding-right: 20.5px" required/>

      <label for="land">Land<span>*</span></label>
      <input type="text" id="land" name="land" placeholder="Ihre Land" class="textInput"  /> 
    </div>

      <input type="submit" name="submit" value="Anmelden"><br><br>
      <?php include "for die Registieren.php"; ?>

		</form>
	</div>
</body>


</html>
