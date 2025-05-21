<?php include("../Datenbanken.php");?>
<?php include_once ("../Schicke Nachricht.php");?>

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
    
    <title>CSS-Farben</title>
    <style>
        .navbar.profile{
    display: none;
  }

   .navbar .profile .profile2{
              display:none;
          }
          .navbar .profile:hover .profile2{
              display: block;
              position: absolute;
              margin-top: 15px;
              margin-left: -15px;
              background-color:#01d28e !important;
              width: 30%;
              text-align: justify;
              padding: 15px;
              color: #FFFFFF !important;
              border-radius:1%;
          } 
          .navbar .profile .profile2 strong{
              color:black;
              font-weight:bolder;
          }

.farben {
    display: flex;
    flex-direction: row;
    list-style: none;
}

.farben li {
    margin-right: 5px;
    background-color: whitesmoke;
    font-weight: bold;
}

.farben-beispiele {
    display: flex;
    flex-direction: row;
    margin-top: 0;
}

.farben-beispiele ul {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  margin-top: 0;
  margin-bottom: 0.14em;
}

.farben-beispiele li {
    color: white;
    width: 15em;
    height: 3em;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 0.14em;
    margin-bottom: 0.25em;
    margin-top: 0;
}

.code-box pre{
    background-color: whitesmoke;
    padding: 5px;
}

.code-box {
    display: inline-block;
}

.container {
    display: flex;
    flex-direction: row;
}

.container-2{
    display: flex;
    flex-direction: row;
}
.container-2 p{
    border: 1.5px solid black;
    margin-left: 2.7em;
    padding: 2em;
}
    </style>
</head>
<!--Ende des Kopfes-->

<!--Begin des Körpers-->
<body>
    <form method="POST">
        <!--Der Heder -->
        <div class="header">
            <h1>CSS-Einführung</h1>
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
        
<h2>Farben können auf 6 Arten ausgewählt werden.</h2>

<ul class="farben">
    <li>Namen,</li>
    <li>RGB,</li>
    <li>RGBA,</li>
    <li>HEX,</li>
    <li>HSL,</li>
    <li>HSLA,</li>
</ul>

<div style="margin-left: 2.2em;">so werden sie verwendet</div>
<div class="farben-beispiele">
    <ul>
        <li style="background-color: red">red</li>
        <li style="background-color: rgb(255,0,0)">rgb(255, 0, 0)</li>
        <li style="background-color: rgba(255,0,0,1)">rgba(255, 0, 0, 1)</li>
    </ul>
</div>

<div class="farben-beispiele">
    <ul>
        <li style="background-color: #FF0000">#FF0000</li>
        <li style="background-color: hsl(0, 100%, 50%)">hsl(0, 100%, 50%)</li>
        <li style="background-color: hsla(0, 100%, 50%, 1)">hsla(0, 100%, 50%, 1)</li>
    </ul>
</div>

<br>

<div class="farben-beispiele">
    <ul>
        <li style="background-color: blue">blue</li>
        <li style="background-color: rgb(0,0,255)">rgb(0, 0, 255)</li>
        <li style="background-color: rgba(0,0,255, 1)">rgba(0, 0, 255, 1)</li>
    </ul>
</div>

<div class="farben-beispiele">
    <ul>
        <li style="background-color: #0000ff">#0000FF</li>
        <li style="background-color: hsl(240, 100%, 50%)">hsl(240, 100%, 50%)</li>
        <li style="background-color: hsla(240, 100%, 50%, 1)">hsla(240, 100%, 50%, 1)</li>
    </ul>
</div>
<br><br><br>

Hier sind ein paar Beispiele, wie Sie Farben in CSS verwenden können.<br>

<div class="container">
<div style="margin-top: 1em; margin-left: 1em">
    <b>Text Farben</b>
<br>
<div class="code-box">
    <pre><code class="css"><span style="color: rgba(228,86,73,255)">p</span> {
  <span style="color: rgba(80,161,79,255)">color</span>: blue;
}</code></pre>
</div><br>
<a href="../selbst_versuch_css.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst" style="padding: 10px!important"></a>
</div>

<div style="margin-top: 1em; margin-left: 1em">
    <b>Hintergrund Farben</b>
<br>
<div class="code-box">
    <pre><code class="css"><span style="color: rgba(228,86,73,255)">p</span> {
  <span style="color: rgba(80,161,79,255)">background-color</span>: blue;
}</code></pre>
</div><br>
<a href="../selbst_versuch_css.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst" style="padding: 10px!important; margin-left: 4em;"></a>
</div>

<div style="margin-top: 1em; margin-left: 1em">
    <b>Border Farben</b>
<br>
<div class="code-box">
    <pre><code class="css"><span style="color: rgba(228,86,73,255)">div</span> {
  <span style="color: rgba(80,161,79,255)">border-color</span>: blue;
}</code></pre>
</div><br>
<a href="../selbst_versuch_css.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst" style="padding: 10px!important; margin-left: 2.5em"></a>
</div>

</div>

<div class="container-2">

<div>
<p style="color: blue">Text</p>
</div>


<div style="margin-left: 5.7em">
<p style="background-color: blue">Text</p>
</div>

<div style="margin-left: 6.5em">
    <span >
       <p style="border-color: blue">Text</p> 
    </span>

</div>





</div>

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