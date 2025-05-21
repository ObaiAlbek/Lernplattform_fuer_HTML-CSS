<?php include("../Datenbanken.php");?>
<?php include_once ("../Schicke Nachricht.php");?>
<?php
	$query = "SELECT * FROM registration WHERE ID ";
	$ergebnisse = $dbh->query($query);
    foreach($ergebnisse as $row);
?>

<!--Beginn der Seite-->
<!DOCTYPE html>
<html lang="de">    
<!--Beginn des Kopfes-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mit uns können Sie HTML & CSS kostenlos lernen.">
    <meta name="keywords" content="HTML">
    <meta name="author" content="Obai Albek">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../CSS/für den CSS-Kurs.css" rel="stylesheet">
    
    <title>CSS-Margin</title>
    <style>
        .navbar.profile {
    display: none;
}

.navbar .profile .profile2 {
    display: none;
}

.navbar .profile:hover .profile2 {
    display: block;
    position: absolute;
    margin-top: 15px;
    margin-left: -15px;
    background-color: #01d28e !important;
    width: 30%;
    text-align: justify;
    padding: 15px;
    color: #FFFFFF !important;
    border-radius: 1%;
}

.navbar .profile .profile2 strong {
    color: black;
    font-weight: bolder;
}

.code-box {
    display: inline-block;
}

.code-box pre {
    padding: 10px;
    background-color: whitesmoke;
}

.container {
    display: flex;
    flex-direction: row;
    justify-content: start;
    align-items: center;
    margin-top: -1em;
}

.shorthand ul {
    display: inline-block;
}

.shorthand span {
    border-radius: 4px;
    padding: 2px;

}

.shorthand li {
    margin-bottom: 10px;
    padding: 2px;
}

#oben {
    background-color: aquamarine;
}

#unten {
    background-color: cadetblue;
}

#rechts {
    background-color: burlywood;
}

#links {
    background-color: chocolate;
}

.körper ul {
    display: inline-block;
    background-color: whitesmoke;
    border-left: 4px solid red;
    padding: 5px 25px;
}
    </style>
</head>
<!--Ende des Kopfes-->

<!--Begin des Körpers-->
<body>
    <form method="POST">
        <!--Der Heder -->
        <div class="header">
            <h1>CSS-Margin</h1>
        </div>
        <!-- die Listen -->
        <div class="navbar">
            <a href="../Homepage.php">Home</a>
            <a class="überuns" href="../Über uns.php">Über uns</a>
            <a class="kontakt">
                Kontakt
                <div class="kontakt">
                    <h1>Lassen Sie uns Kontakt aufnehmen</h1>
                    <p style="text-align: center;">Wir sind offen für jeden Vorschlag oder einfach nur für ein Gespräch</p>
                    <span class="material-icons">&#xe55f; rfqre3ewqe</span>
                    <span >Adresse: Deutschland, Baden-Württemberg, mannheim-Gärtnerstraße.25</span><br>
                    <span class="material-icons">&#xe551;</span>
                    <span>Telefonnummer: +49 178 3740356</span><br>
                    <span class="material-icons">&#xe569;</span>
                    <span>E-Mail: obay.albeek@gmail.com</span>
                </div>
            </a>

            <a class="profile" href="../konto_zeigen.php">Profile</a>

        
        </div>

        <div class="Zeile">
            <div class="seite">
                <div class="seite2" style="height:200px;">
                    <img style="width: 140%; border-bottom:1px solid" src="../Die Bilder/O_V3schools-removebg-preview.png">
                    <img  style="width: 80%; margin-left:70px;border-bottom: 1px solid red" src="../Die Bilder/CSS.png" alt="CSS Foto">
                    <ul class="lists">
                        <a href="../CSS-Einführung.php"><li>CSS - Einführung</li></a>
                        <a href="Farben.php"><li>CSS - Farben</li></a>
                        <a href="Margin.php"><li>CSS - Margin</li></a>
                        <a href="Border.php"><li>CSS - Border</li></a>
                        <a href="Position.php"><li>CSS - Position</li></a>
                        <a href="Display.php"><li>CSS - Display</li></a>
                        <a href="Font.php"><li>CSS - Font</li></a>
                    </ul>
                </div>
            </div>
        <!-- Die Inhalt des Körper der Seiten -->
        <div class="körper">
        <div style="border-bottom: 1.2px solid gray; margin-bottom: 1em">
        <p><b>CSS Margin</b></p>
        <p>Margin bezieht sich auf den Abstand zwischen dem Inhalt eines HTML-Elements und dem Rand, der es umgibt. 
        Margin wird verwendet, um manuell einen Abstand zwischen Elementen zu setzen.
        </p>
        </div>
        <p>Der Margin wird standardmäßig auf alle Seiten eines Elements angewendet.<br>
        Das bedeutet, dass <span style="color:orange;background-color:whitesmoke">margin: 10px</span> wird 10 Pixel Abstand von jeder Seite des Elements machen, auf das es angewendet wird.
        </p>
        Der Margin kann auf bestimmten Seiten geändert werden. Dies geschieht mit den folgenden Eigenschaften:
        <br><ul style="list-style-type: square; color:orange;">
            <li>margin-top: 10px</li>
            <li>margin-bottom: 10px</li>
            <li>margin-left: 10px</li>
            <li>margin-left: 10px</li>
        </ul>
        <br><a href="../selbst_versuch_css.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst" style="padding: 8px!important;margin-top: -0.6em"></a>
        
        <br><br>Margin Eigenschaften konnen die Folgende Werte haben:<br>
        <ul>
            <li><i>länge</i> <b>»</b> 1px || 1em || 1cm usw.</li>
            <li><i>auto</i> <b>»</b> Automatisch von der Browser berechnet.</li>
            <li><i>prozent</i> <b>»</b> Ein Prozent der Breite des Elements.</li>
            <li><i>erben(inherit)</i> <b>»</b> Der Margin sollte durch das übergeordnete Element festgelegt werden.</li>
        </ul>

<div style="width:100%; border-bottom: 1.2px solid gray; margin-top: 10px"></div>
<p style="margin:0"><br>Der folgende Code würde so aussehen:</p>
<p style="margin-top: 0; ">Der <span style="background-color:cyan!important;color:black; border-radius: 5px; padding: 1.3px 8px">blauen Bereich</span> ist der margin</p><br>
<div class="container">

<div class="code-box">
<pre><code class="css"><span style="color: rgba(228,86,73,255)">p</span> {
  <span style="color: rgba(80,161,79,255)">color</span>: red;
  <span style="color: rgba(80,161,79,255)">margin</span>: <span style="color: rgba(195,149,62,255)">50px</span>;
}</code></pre>
</div>

<div style="color:red; border: 1.2px solid black; display: flex; justify-content: center; align-items: center;margin-left: 1em; background-color: cyan">
  <p style="margin:50px;background-color:white">auf diesen Text wird ein margin angewendet</p>
</div>
</div>

<div class="container">
<div class="code-box">
<pre><code class="css"><span style="color: rgba(228,86,73,255)">p</span> {
  <span style="color: rgba(80,161,79,255)">color</span>: red;
  <span style="color: rgba(80,161,79,255)">margin-left</span>: <span style="color: rgba(195,149,62,255)">50px</span>;
}</code></pre>
</div>

<div style="color:red; border: 1.2px solid black; display: flex; justify-content: center; align-items: center;background-color: cyan; margin: 1em 0 0 1em;">
    <p style="background-color:white; margin:0;margin-left: 50px;max-width:100%;">auf diesen Text wird ein margin-left angewendet</p>
</div>
</div>
<a href="../selbst_versuch_css.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst" style="padding: 8px!important;margin-top: -0.6em"></a>
<div style="width:100%; border-bottom: 1.2px solid gray; margin-top: 10px"></div>

<p>Es gibt auch eine Kurzversion des Margins, die auf Seiten angewendet werden kann. 
Kurzversionen ermöglichen es uns, der Margin für alle Seiten schnell festzulegen, auch wenn sie nicht gleich sind.</p>
<div class="shorthand">
<p>Es gibt 2 Kurzversionen, die Sie verwenden können</p>
<ul style="margin-top:0!important">
    <li>margin: <span id="oben">oben</span> <span id="rechts">rechts</span> <span id="links">links</span> <span id="unten">unten</span></li>
    <li>margin: <span id="oben">oben/unten</span> <span id="rechts">links/rechts</span> </li>
</ul>

<p>In Aktion würde es so aussehen</p>
<ul style="margin-top:0!important">
    <li>margin: <span id="oben">10px</span> <span id="rechts">5px</span> <span id="links">12px</span> <span id="unten">20px</span></li>
    <li>margin: <span id="oben">1em</span> <span id="rechts">2em</span> </li>
</ul>

</div>

</div>    
</div>
        <!-- Ende der Inhalt -->
    </form>

        <!--Footer-->
        <form method="POST">
            <div class="footer">
                <h1>Hinterlasse eine Antwort</h1>
                <p>Ihre Email-Adresse wird nicht veröffentlicht. erforderliche Felder sind markiert<span style="color: red;margin-left:5px">*</span></p>
                <p>Kommentar *</p>
                <p><input id="author" name="name" type="text" value="" size="30" placeholder="Name *" requierd></p>
                <P><input id="email" name="email" type="email" value="" size="30" placeholder="Email *" requierd></P>
                <P><input id="text" name="subject" type="text" value="" size="30" placeholder="Thema *" requierd></P>
                <textarea autocomplete="new-password" placeholder="Schicken Sie uns Ihre nachricht" id="comment" name="message" cols="55" rows="8" aria-required="true"></textarea>
                <p><input class ="send" id="submit" name="submit" type="submit" value="Schicken"></p>

        </form>        
            </div>
            <div class="copyright">
                <p>Urheberrechte 2023 &copy; OV-Codeschule</p>            
            </div>   

</body>
<!--Ende des Körpers-->
</html>