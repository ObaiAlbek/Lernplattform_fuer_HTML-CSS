<?php include("Datenbanken.php");?>
<?php include_once ("Schicke Nachricht.php");?>
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="CSS/für den Kurs.css" rel="stylesheet">
    <title>HTML-Basis Tags</title>
</head>
<!--Ende des Kopfes-->

<!--Begin des Körpers-->
<body>
    <form method="POST">
        <!--Der Heder -->
        <div class="header">
            <h1>HTML-Basis Tags</h1>
        </div>
        <!-- die Listen -->
        <div class="navbar">
            <a href="Homepage.php">Home</a>
              <a class="überuns" href="Über uns.php">Über uns </a>
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
            <a class="profile" href="konto_zeigen.php">Profile</a>
        
        </div>
    	<!--Die Inhalt des Körpers der Seiten-->
        <div class="Zeile">
            <div class="seite">
                <div class="seite2" style="height:200px;">
                    <img style="width: 140%; border-bottom:1px solid" src="Die Bilder/O_V3schools-removebg-preview.png">
                    <img  style="width: 80%; margin-left:70px;border-bottom: 1px solid red" src="Die Bilder/HTML 5 Foto.png" alt="HTML 5 Foto">
                    <ul class="lists">
                        <a href="HTML-Eiführung.php"><li>HTML - Einführung</li></a>
                        <a href="HTML-Basis Tags.php"><li>HTML - Basis Tags</li></a>
                        <a href="HTML-Meta Tags.php"><li>HTML - Meta Tags</li></a>
                        <a href="HTML-Kommentar.php"><li>HTML - Kommentare</li></a>
                        <a href="HTML-Tabellen.php"><li>HTML - Tabellen</li></a>
                        <a href="HTMl-Listen.php"><li>HTML - Listen</li></a>
                        <a href="HTML-Text Links.php"><li>HTML - Text Links</li></a>
                    </ul>
                </div>
            </div>
       
        <div class="körper">
            <h2>Die Überschriften-Tags?</h2>
            <p>Jedes Dokument beginnt mit einer Überschrift. Sie können verschiedene Größen für 
            Ihre Überschriften verwenden. HTML hat auch sechs Ebenen von Überschriften, 
            die die Elemente <b>&lt;h1&gt;</b>, <b>&lt;h2&gt;</b>, <b>&lt;h3&gt;</b>, <b>&lt;h4&gt;</b>, <b>&lt;h5&gt;</b> und<b> &lt;h6&gt;</b> verwenden. Während der Anzeige 
            einer Überschrift fügt der Browser eine Zeile vor und eine Zeile nach dieser Überschrift
            hinzu.</p>
            <p>Beispiel</p>
            <div class="code">
                    <code>
                        <p><b>&lt;!DOCTYPE html&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                        <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                        <span>Überschriften Beispiele</span>
                        <span><b>&lt;/title&gt;</b></span>
                        <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                        <span style="margin-left: 60px;"><b>&lt;h1&gt;</b></span>
                        <span>Das ist Überschrift 1.</span>
                        <span><b>&lt;/h1&gt;</b></span><br>
                        <span style="margin-left: 60px;"><b>&lt;h1&gt;</b></span>
                        <span>Das ist Überschrift 2.</span>
                        <span><b>&lt;/h1&gt;</b></span><br>
                        <span style="margin-left: 60px;"><b>&lt;h1&gt;</b></span>
                        <span>Das ist Überschrift 3.</span>
                        <span><b>&lt;/h1&gt;</b></span><br>
                        <span style="margin-left: 60px;"><b>&lt;h1&gt;</b></span>
                        <span>Das ist Überschrift 4.</span>
                        <span><b>&lt;/h1&gt;</b></span><br>
                        <span style="margin-left: 60px;"><b>&lt;h1&gt;</b></span>
                        <span>Das ist Überschrift 5.</span>
                        <span><b>&lt;/h1&gt;</b></span><br>
                        <span style="margin-left: 60px;"><b>&lt;h1&gt;</b></span>
                        <span>Das ist Überschrift 6.</span>
                        <span><b>&lt;/h1&gt;</b></span><br>
                        <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                    </code>
                </div>
                <a href="Selbst versuch (1).html" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
            <p>Dies führt zu folgendem Ergebnis- </p>
            <img src="Die Bilder/Überschriften Ausgabe.png" alt="Überschriften Ausgabe.png" title="Überschriften Ausgabe">
            <h2>Absatz-Tag</h2>
            <p>Das <b>&lt;p&gt;</b>-Tag bietet eine Möglichkeit, Ihren Text in verschiedene Absätze 
            zu strukturieren. Jeder Textabsatz sollte zwischen einem öffnenden <b>&lt;p&gt;</b>- 
            und einem schließenden <b>&lt;/p&gt;</b>-Tag stehen, wie unten im Beispiel gezeigt 
            −</p>
            <p>Beispiel</p>
            <div class="code">
                    <code>
                        <p><b>&lt;!DOCTYPE html&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                        <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                        <span>Absätze Beispiele</span>
                        <span><b>&lt;/title&gt;</b></span>
                        <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                        <span style="margin-left: 60px;"><b>&lt;p&gt;</b></span>
                        <span>Hier ist ein erster Absatz des Textes.</span>
                        <span><b>&lt;/p&gt;</b></span><br>
                        <span style="margin-left: 60px;"><b>&lt;p&gt;</b></span>
                        <span>Hier ist ein zweiter Absatz des Textes.</span>
                        <span><b>&lt;/p&gt;</b></span><br>
                        <span style="margin-left: 60px;"><b>&lt;p&gt;</b></span>
                        <span>Hier ist ein dritter Absatz des Textes.</span>
                        <span><b>&lt;/p&gt;</b></span><br><p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                    </code>
                </div>
                <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
            <p>Dies führt zu folgendem Ergebnis-</p>
            <img src="Die Bilder/Ausgabe absätze.png" alt="Ausgabe absätze.png" title="Ausgabe absätze">
            <h2>Zeilenumbruch-Tag</h2>
            <p>Wann immer Sie das Element <b>&lt;br&gt;</b> verwenden, beginnt alles, 
            was darauf folgt, in der nächsten Zeile. Dieses Tag ist ein Beispiel 
            für ein leeres Element, bei dem Sie keine öffnenden und schließenden Tags benötigen, 
            da zwischen ihnen nichts eingefügt werden kann.</p>
            <p>Beispiel</p>
            <div class="code">
                    <code>
                        <p><b>&lt;!DOCTYPE html&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                        <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                        <span>Zeilenumbruch Beispiele</span>
                        <span><b>&lt;/title&gt;</b></span>
                        <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                        <span style="margin-left: 60px;"><b>&lt;p&gt;</b></span>
                        <span>Hallo</span>
                        <span><b>&lt;br&gt;</b></span><br>
                        <span style="margin-left: 60px;">Sie haben Ihren Auftrag pünktlich geliefert.</span>
                        <span><b>&lt;br&gt;</b></span>
                        <p style="margin-left: 50px;">Danke <b>&lt;br&gt;</b></p>
                        <span style="margin-left:60px ;">Herr Müller.</span>
                        <span><b>&lt;/p&gt;</b></span><br><p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                    </code>
                </div>
            <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
            <p>Dies führt zu folgendem Ergebnis-</p>
            <img src="Die Bilder/zeilenumbruch ausgabe.png" alt="zeilenumbruch ausgabe.png" title="zeilenumbruch ausgabe">
            <h2>Inhalt zentrieren</h2>
            <p>Sie können das Tag <b>&lt;center&gt;</b> verwenden, um beliebige Inhalte in die Mitte der Seite 
            oder einer beliebigen Tabellenzelle zu stellen.
            <p>Beispiel</p>
            <div class="code">
                    <code>
                        <p><b>&lt;!DOCTYPE html&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                        <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                        <span>Beispiel zum Zentrieren von Inhalten</span>
                        <span><b>&lt;/title&gt;</b></span>
                        <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                        <span style="margin-left: 60px;"><b>&lt;p&gt;</b></span>
                        <span>Dieser Text steht nicht in der Mitte.</span>
                        <span><b>&lt;/p&gt;</b></span><br>

                        <span style="margin-left: 60px;"><b>&lt;center&gt;</b></span><br>
                        <span style="margin-left: 100px;"><b>&lt;p&gt;</b></span>
                        <span>Dieser Text steht in der Mitte.</span>
                        <span><b>&lt;/p&gt;</b></span><br>
                        <span style="margin-left: 60px;"><b>&lt;/center&gt;</b></span><br>
                        <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                        
                    </code>
                </div>
            <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
            <p>Dies führt zu folgendem Ergebnis-</p>
            <img src="Die Bilder/Zentrieren Beispiel.png" alt="Zentrieren Beispiel.png" title="Zentrieren Beispiel"><br>
            
            <p><a href="HTML-Meta Tags.php" class="weiter">Weiter</a></p>    
        </div>
        </div>
        <!--End der Inhalt-->
    </form>

        <!--Footer-->
        <form method="POST">
            <div class="footer">
                <h1>Hinterlasse eine Antwort</h1>
                <p>Ihre Email-Adresse wird nicht veröffentlicht. erforderliche Felder sind markiert<span style="color: red;margin-left:5px">*</span></p>
                <p>Kommentar *</p>
                <p><input id="author" name="name" type="text" value="" size="30" placeholder="Name *" requierd></p>
                <P><input id="email" name="email" type="email" value="" size="30" placeholder="Email *" requierd></P>
                <P><input id="email" name="subject" type="text" value="" size="30" placeholder="Thema *" requierd></P>
                <textarea autocomplete="new-password" placeholder="Schicken Sie uns Ihre nachricht" id="comment" name="message" cols="55" rows="8" aria-required="true"></textarea>
                <p><input class ="send" id="submit" name="submit" type="submit" value="submit"></p>

        </form>        
            </div>
            <div class="copyright">
                <p>Urheberrechte 2023 &copy; OV-Codeschule</p>            
            </div>    
</body>
<!--Ende des Körpers-->
</html>