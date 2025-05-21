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
    <link href="../CSS/für den CSS-Kurs.css" rel="stylesheet">

    <title>CSS-Border</title>
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

.border {
    border-bottom: 1.2px solid gray
}

.borderstyles {
    background-color: whitesmoke;
}

.borderstyles p {
    text-align: center;
}

.liste {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: flex-start;
    gap: 8em;
}

@media only screen and (max-width: 600px) {
  .liste {
    flex-direction: column;
  }
}

.code-box pre {
    display: inline-block;
    background-color: white;
}

.borderstyles li,
.borderstyles p {
    color: black;
    font-size: 20px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.borderbeispiele {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    border-left: 5px solid red;
    margin-top: 1em;
}

.borderbeispiele span {
    background-color: whitesmoke;
    color: red;
}

.borderbeispiele p {
    margin-left: 10px;
}

.stileundcode {
    display: flex;
    flex-direction: column;
}

.round-borders {
    display: flex;
    flex-direction: row;
    gap: 1em;
    align-items: center;
}

.körper ul {
    display: inline-block;
    background-color: whitesmoke;
    border-left: 4px solid red;
    padding: 5px 30px;
}
    </style>
</head>
<!--Ende des Kopfes-->

<!--Begin des Körpers-->
<body>
    <form method="POST">
        <!--Der Heder -->
        <div class="header">
            <h1>CSS-Border</h1>
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

        <p><b>CSS Margin</b></p>
        <p>CSS Border(Rahmen) ist eine Eigenschaft, mit der Sie bearbeiten können, wie der Rahmen eines Elements aussieht</p>
        <div class="border"></div>
        <p>Der Rahmen eines Elements ist standardmäßig ausgeblendet, um ihn zu aktivieren, müssen Sie den Stil des gewünschten Rahmens festlegen!</p>
        <div class="borderstyles"> 
        <p>Dies sind Ihre Optionen</p> 
          <div class="liste">
            <div class="stileundcode">
            <ul>
                <li>solid</li>
                <li>dotted</li>
                <li>dashed</li>
                <li>double</li>
                <li>hidden</li>
                <li>none</li>
                <li>ridge -»3D</li>
                <li>groove -»3D</li>
                <li>inset -»3D</li>
                <li>outset -»3D</li>
            </ul>
            <div class="code-box">
                
<pre><code><span style="color: rgba(228,86,73,255)">p</span> {
  <span style="color: rgba(80,161,79,255)">border-style</span>: solid;
}</code></pre>
</div>
        
        </div>

            <div class="borderbeispiele">
                <p style="border-style: solid">Das ist ein <span>solid</span> border.</p>
                <p style="border-style: dotted">Das ist ein <span>dotted</span> border.</p>
                <p style="border-style: dashed">Das ist ein <span>dashed</span> border.</p>
                <p style="border-style: double">Das ist ein <span>double</span> border.</p>
                <p style="border-style: none">Das sind <span>hidden & none</span> borders.</p>
                <p style="border-style: ridge">Das ist ein <span>ridge</span> border.</p>
                <p style="border-style: groove">Das ist ein <span>groove</span> border.</p>
                <p style="border-style: inset">Das ist ein <span>inset</span> border.</p>
                <p style="border-style: outset">Das ist ein <span>outset</span> border.</p>
            </div></div></div><a href="../selbst_versuch_css.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst" style="padding: 8px!important"></a>
            <div class="border" style="margin-top:1em"></div>
            <p>Ränder können mit <span style="color:red;background-color:whitesmoke">border-radius</span> gerundet werden.</p>

            <div class="round-borders">
                <div class="code-box"><pre><code style="display:inline-block; background-color: whitesmoke"><span style="color: rgba(228,86,73,255)">p</span> {
  <span style="color: rgba(80,161,79,255)">border-radius</span>: <span style="color: rgba(195,149,62,255)">15px</span>;
}</code></pre></div>
    <div>
        <p style="border: 1.2px solid black; border-radius: 15px; padding: 4px; display: inline-block!important">Das ist ein gerudenter border mit 15px.</p>
        <p style="border: 1.2px solid black; border-radius: 10px; padding: 4px; display: inline-block!important">Das ist ein gerudenter border mit 10px.</p>
    </div>
</div>
<p>Je höher der Wert, den Sie <span style="color:red;background-color:whitesmoke">border-radius</span> zuweisen, desto runder wird es.</p>
<a href="../selbst_versuch_css.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst" style="padding: 8px!important"></a>













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
                <p><input class ="send" id="submit" name="submit" type="submit" value="Shicken"></p>

        </form>        
            </div>
            <div class="copyright">
                <p>Urheberrechte 2023 &copy; OV-Codeschule</p>            
            </div>  
  
</body>
<!--Ende des Körpers-->
</html>