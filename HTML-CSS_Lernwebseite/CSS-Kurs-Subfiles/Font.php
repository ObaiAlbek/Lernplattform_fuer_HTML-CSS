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
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <title>CSS-Fonts</title>
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

span {
    color: red;
}
.intro ul {
    display: inline-block;
}

#import p {
    margin:0;
}

#import {
    margin-top: 20px;
}

.code-box {
    display: inline-block;
}

.code-box pre {
    padding: 10px;
    background-color: whitesmoke;
}


.border {
    border-bottom: 1.2px solid gray;
    margin-top: 10px;
}

.name {
    margin-top: 10px;
    text-align: center;
    color: lightseagreen;
    letter-spacing: 5px;
}
.content {
    padding: 5em 0;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 3em;
    margin-bottom: 10px;
}

#f1 {
	font-family: 'Roboto', sans-serif;
	font-size: 18px;
	line-height: 1.25;
    border: 1.2px solid;
    padding: 5px;
}

#f2 {
    font-size: 26px;
    border: 1px solid;
    padding: 5px;
}

#f2_ {
    font-size: 36px;
    border: 1px solid;
    padding: 5px;
}

#f3 {
    text-decoration: underline;
    font-style: italic;
    font-weight: bold;
    border: 1px solid;
    padding: 5px;
}

    </style>
</head>
<!--Ende des Kopfes-->

<!--Begin des Körpers-->
<body>
    <form method="POST">
        <!--Der Heder -->
        <div class="header">
            <h1>CSS-Fonts</h1>
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
        
    <p><b>CSS Fonts(Schriftart)</b></p>
        <div class="intro">
            <p style="margin-bottom: 0;">Schriftarten können verwendet werden, um die Schriftart eines Textes, die Schriftgröße selbst und die Art und Weise, wie Text angezeigt wird, zu ändern.</p>
            <p style="margin-top: 0">Die Standardschriftart variiert je nach der Browser, aber die häufigste ist <span>Arial</span> mit einer Größe von <span>16px</span></p>

            <p style="margin-bottom: 0; margin-top: 2em;">Bei der Auswahl von Schriftarten sollten Sie immer Folgendes beachten.</p>
            <ul style="margin-top: 0">
                <li><span><b>Verfügbarkeit</b></span> - Ist die Schriftart auf den meisten Geräten verfügbar oder wird sie <a href="#import">importiert</a>?</li>
                <li><span><b>Lesbarkeit</b></span> - Ist die Schriftart gut lesbar?</li>
                <li><span><B>Aussehen</B></span> - Stimmt es mit dem Stil der Seite überein?</li>
            </ul>


            <div id="import">
            <p>Sie können Schriftarten verwenden, die auf dem Gerät des Benutzers nicht verfügbar sind, indem Sie sie aus dem Internet importieren.</p>
            <p>Die gängigste Methode zum Importieren von Schriftarten ist über Google Fonts.</p>
            <p>Dies kann durch Einfügen eines <span>link href</span> als <span>stylesheet</span> in den &lt;head&gt; tag.</p>
            </div>

            <div class="code-box" >
    <pre style="border-left: 1px solid black;"><code>&lt;<span style="color: rgba(228,86,73,255)">head</span>&gt;
    &lt;<span style="color: rgba(228,86,73,255)">link</span> <span style="color: rgba(195,149,62,255)">href</span>="<span style="color: rgba(80,161,79,255)">https://fonts.googleapis.com/css2?family=Roboto&display=swap</span>" <span style="color: rgba(195,149,62,255)">rel</span>="<span style="color: rgba(80,161,79,255)">stylesheet</span>"&gt;
&lt;/<span style="color: rgba(228,86,73,255)">head</span>&gt;</code></pre>
</div>
</div>

        <div class="border"></div>
        
        <div class="name">SCHRIFTART AUSWÄHLEN</div>
        <div class="content">
        <div class="code-box">
    <pre><code class="css"><span style="color: rgba(228,86,73,255)">body</span> {
  <span style="color: rgba(80,161,79,255)">font-family</span>: '<span style="color: rgba(80,161,79,255)">Roboto</span>', sans-serif;
}</code></pre>
</div>

<p id="f1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
</div>
<a href="../selbst_versuch_css.php" target="_blank" id="selbst_versuch"><input class="try" type="button" name="try" value="Versuchen Sie selbst" style="padding: 8px!important"></a>

<div class="border"></div>


    <div class="name">SCHRIFTGRÖSSEN ANGEBEN</div>
    <div class="content" style="padding-bottom:0!important">
    <div class="code-box">
    <pre><code class="css"><span style="color: rgba(228,86,73,255)">body</span> {
  <span style="color: rgba(80,161,79,255)">font-size</span>: 26px;
}</code></pre>
</div>
        <p id="f2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
    </div>
    <div class="content" style="padding: 0!important">
        
    <div class="code-box">
    <pre><code class="css"><span style="color: rgba(228,86,73,255)">body</span> {
  <span style="color: rgba(80,161,79,255)">font-size</span>: <span style="color: rgba(195,149,62,255)">36px</span>;
}</code></pre>
</div>
        <p id="f2_">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
    </div>
    <a href="../selbst_versuch_css.php" target="_blank" id="selbst_versuch"><input class="try" type="button" name="try" value="Versuchen Sie selbst" style="padding: 8px!important"></a>

    <div class="border"></div>    

    
    <div class="name">TEXT GESTALTEN</div>
    <div class="content">
    <div class="code-box">
    <pre><code class="css"><span style="color: rgba(228,86,73,255)">body</span> {
  <span style="color: rgba(80,161,79,255)">text-decoration</span>: underline;
  <span style="color: rgba(80,161,79,255)">font-style</span>: italic;
  <span style="color: rgba(80,161,79,255)">font-weight</span>: bold;
}</code></pre>
</div>
        <p id="f3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
    </div>
    <a href="../selbst_versuch_css.php" target="_blank" id="selbst_versuch"><input class="try" type="button" name="try" value="Versuchen Sie selbst" style="padding: 8px!important"></a>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
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