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
    <title>HTML-Tabellen</title>
</head>
<!--Ende des Kopfes-->

<!--Begin des Körpers-->
<body>
    <form method="POST">
        <!--Der Heder -->
        <div class="header">
            <h1>HTML-Tabellen</h1>
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
        <!--Die Inhalt des Körpers der Seiten-->
        <div class="körper">
            <p>Die HTML-Tabellen ermöglichen es, Daten wie Text, Bilder, Links, andere Tabellen usw. 
                in Zeilen und Spalten von Zellen anzuordnen. Die HTML-Tabellen werden mit dem 
                <b>&lt;table&gt;</b>-Tag erstellt, in dem das <b>&lt;tr&gt;</b>-Tag zum 
                Erstellen von Tabellenzeilen und das <b>&lt;td&gt;</b>-Tag zum Erstellen von 
                Datenzellen verwendet wird. Die Elemente unter <b>&lt;td&gt;</b> sind 
                standardmäßig regulär und linksbündig ausgerichtet</p>
                <p>Beispiel</p>
                <div class="code">
                        <code>
                            <p><b>&lt;!DOCTYPE html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                            <span>HTML Tabellen</span>
                            <span><b>&lt;/title&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "keywords" content = "HTML lernen" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "description" content = "Lernen Sie HTML-Tags." &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "author" content = "Obai Albek" &gt;</b></span><br>
                            <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;table border = "1"&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;tr&gt;</b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;td&gt;</span></b></span>
                            <span>Zeile 1, Spalte 1</span>
                            <span><b>&lt;/td&gt;</span></b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;td&gt;</span></b></span>
                            <span>Zeile 1, Spalte 2</span>
                            <span><b>&lt;/td&gt;</span></b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;/tr&gt;</span></b></span><br> <br>
    
                            <span style="margin-left: 100px;"><b>&lt;tr&gt;</b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;td&gt;</span></b></span>
                            <span>Zeile 2, Spalte 1</span>
                            <span><b>&lt;/td&gt;</span></b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;td&gt;</span></b></span>
                            <span>Zeile 2, Spalte 2</span>
                            <span><b>&lt;/td&gt;</span></b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;/tr&gt;</span></b></span>
                            <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                            
                        </code>
                    </div>
                <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
                <p>Dies führt zu folgendem Ergebnis −</p>
                <img src="Die Bilder/ausgabe für die Tabelle.png" alt="ausgabe die Tabelle.png" title="ausgabe für die Tabelle">
                <p>Hier ist der Rahmen ein Attribut des <b>&lt;td&gt;</b>-Tags und wird verwendet, 
                um einen Rahmen über alle Zellen zu legen. Wenn Sie keinen Rahmen benötigen, 
                können Sie border = "0" verwenden.</p>
                <h2>Tabellenüberschrift</h2>
                <p>Die Tabellenüberschrift kann mit dem Tag <b>&lt;th&gt;</b> definiert werden. 
                Dieses Tag ersetzt das <b>&lt;td&gt;</b>-Tag, das zur Darstellung der eigentlichen 
                Datenzelle verwendet wird. Normalerweise setzen Sie Ihre oberste Zeile als 
                Tabellenüberschrift, wie unten gezeigt, ansonsten können Sie das Element <b>&lt;th&gt;</b> 
                in jeder Zeile verwenden. Überschriften, die im <b>&lt;th&gt;</b>-Tag definiert sind, 
                werden standardmäßig zentriert und fett dargestellt.
                </p>
                <p>Beispeil</p>
                <div class="code">
                        <code>
                            <p><b>&lt;!DOCTYPE html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                            <span>HTML Tabellen</span>
                            <span><b>&lt;/title&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "keywords" content = "HTML lernen" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "description" content = "Lernen Sie HTML-Tags." &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "author" content = "Obai Albek" &gt;</b></span><br>
                            <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
    
                            <span style="margin-left: 60px;"><b>&lt;table border = "1"&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;tr&gt;</b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;th&gt;</span></b></span>
                            <span>Name</span>
                            <span><b>&lt;/th&gt;</span></b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;th&gt;</span></b></span>
                            <span>Gehalt</span>
                            <span><b>&lt;/th&gt;</span></b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;/tr&gt;</span></b></span><br><br>
    
                            <span style="margin-left: 100px;"><b>&lt;tr&gt;</b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;td&gt;</span></b></span>
                            <span>Herr Müller</span>
                            <span><b>&lt;/td&gt;</span></b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;td&gt;</span></b></span>
                            <span>5000€</span>
                            <span><b>&lt;/td&gt;</span></b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;/tr&gt;</span></b></span><br> <br>
    
                            <span style="margin-left: 100px;"><b>&lt;tr&gt;</b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;td&gt;</span></b></span>
                            <span>Herr Schneider</span>
                            <span><b>&lt;/td&gt;</span></b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;td&gt;</span></b></span>
                            <span>7000€</span>
                            <span><b>&lt;/td&gt;</span></b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;/tr&gt;</span></b></span>
    
                            <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                            
                        </code>
                    </div>
                <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
                <p>Dies führt zu folgendem Ergebnis −</p>
                <img src="Die Bilder/ausgabe 4.png" alt="ausabe tabelle .png" title="Die Tabelle mit Kopfzeile">
                <h2>Cellpadding- und Cellspacing-Attribute</h2>
                <p>Es gibt zwei Attribute namens cellpadding und cellpacing, mit denen Sie den 
                    Leerraum in Ihren Tabellenzellen anpassen können. Das Attribut „cellspacing“ 
                    definiert den Abstand zwischen Tabellenzellen, während „cellpadding“ den 
                    Abstand zwischen Zellgrenzen und dem Inhalt innerhalb einer Zelle darstellt.
                </p>
                <p>Beispeil</p>
                <div class="code">
                        <code>
                            <p><b>&lt;!DOCTYPE html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                            <span>HTML Tabellen - Cellpadding- und Cellspacing-Attribute</span>
                            <span><b>&lt;/title&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "keywords" content = "HTML lernen" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "description" content = "Lernen Sie HTML-Tags." &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "author" content = "Obai Albek" &gt;</b></span><br>
                            <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
    
                            <span style="margin-left: 60px;"><b>&lt;table border = "1"&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;tr&gt;</b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;th&gt;</span></b></span>
                            <span>Spalte 1</span>
                            <span><b>&lt;/th&gt;</span></b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;th&gt;</span></b></span>
                            <span>Spalt 2</span>
                            <span><b>&lt;/th&gt;</span></b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;th&gt;</span></b></span>
                            <span>Spalte 3</span>
                            <span><b>&lt;/th&gt;</span></b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;/tr&gt;</span></b></span><br><br>
    
                            <span style="margin-left: 100px;"><b>&lt;tr&gt;</b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;td rowsoan = "2"&gt;</span></b></span>
                            <span>Zeile 1 Zelle 1</span>
                            <span><b>&lt;/td&gt;</span></b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;td&gt;</span></b></span>
                            <span>Zeile 1 Zelle 2</span>
                            <span><b>&lt;/td&gt;</span></b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;td&gt;</span></b></span>
                            <span>Zeile 1 Zelle 3</span>
                            <span><b>&lt;/td&gt;</span></b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;/tr&gt;</span></b></span><br> <br>
    
                            <span style="margin-left: 100px;"><b>&lt;tr&gt;</b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;td&gt;</span></b></span>
                            <span>Zeile 2 Zelle 2</span>
                            <span><b>&lt;/td&gt;</span></b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;td&gt;</span></b></span>
                            <span>Zeile 2 Zelle 3</span>
                            <span><b>&lt;/td&gt;</span></b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;/tr&gt;</span></b></span><br><br>
    
                            <span style="margin-left: 100px;"><b>&lt;tr&gt;</b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;td colspan = "3"&gt;</span></b></span>
                            <span>Zeile 3 zelle 1</span>
                            <span><b>&lt;/td&gt;</span></b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;/tr&gt;</span></b></span>
    
                            <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                            
                        </code>
                    </div>
                <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
                <p>Dies führt zu folgendem Ergebnis −</p>
                <img src="Die Bilder/ausgabe die tabelle 3.png" alt="ausgabe die tabelle 3.png" title="Die Tabelle">
                <h2>Tabelle Höhe-Breite</h2>
                <p>Sie können eine Tabellenbreite und -höhe mit den Attributen width und height festlegen. 
                Sie können die Tabellenbreite oder -höhe in Pixeln oder in Prozent der verfügbaren Bildschirmfläche 
                angeben.</p>
                <p>Beispiel</p>
                <div class="code">
                        <code>
                            <p><b>&lt;!DOCTYPE html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                            <span>HTML Tabellen</span>
                            <span><b>&lt;/title&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "keywords" content = "HTML lernen" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "description" content = "Lernen Sie HTML-Tags." &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "author" content = "Obai Albek" &gt;</b></span><br>
                            <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;table border = "1" width= "400" height = "150"&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;tr&gt;</b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;td&gt;</span></b></span>
                            <span>Zeile 1, Spalte 1</span>
                            <span><b>&lt;/td&gt;</span></b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;td&gt;</span></b></span>
                            <span>Zeile 1, Spalte 2</span>
                            <span><b>&lt;/td&gt;</span></b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;/tr&gt;</span></b></span><br> <br>
    
                            <span style="margin-left: 100px;"><b>&lt;tr&gt;</b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;td&gt;</span></b></span>
                            <span>Zeile 2, Spalte 1</span>
                            <span><b>&lt;/td&gt;</span></b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;td&gt;</span></b></span>
                            <span>Zeile 2, Spalte 2</span>
                            <span><b>&lt;/td&gt;</span></b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;/tr&gt;</span></b></span>
                            <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                            
                        </code>
                    </div>
                <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
                <p>Dies führt zu folgendem Ergebnis −</p>
                <img src="Die Bilder/ausgabeb der Tabelle 4.png" alt="ausgabe der Tabelle .png" title="Tabelle Höhe-Breite">
                <h2>Tabellenüberschrift (Caption)</h2>
                <p>Das Beschriftungs-Tag <b>&lt;caption&gt;</b> <b>&lt;/caption&gt;</b> dient als Titel oder Erklärung für die Tabelle und wird 
                oben in der Tabelle angezeigt.</p>
                <p>Beispiel</p>
                <div class="code">
                        <code>
                            <p><b>&lt;!DOCTYPE html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                            <span>HTML Tabellen</span>
                            <span><b>&lt;/title&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "keywords" content = "HTML lernen" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "description" content = "Lernen Sie HTML-Tags." &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "author" content = "Obai Albek" &gt;</b></span><br>
                            <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;table border = "1" width = "100%"&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;caption&gt;</b></span>
                            <span>Das ist der Caption (Überschrift)</span>
                            <span><b>&lt;/caption&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;tr&gt;</b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;td&gt;</span></b></span>
                            <span>Zeile 1, Spalte 1</span>
                            <span><b>&lt;/td&gt;</span></b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;td&gt;</span></b></span>
                            <span>Zeile 1, Spalte 2</span>
                            <span><b>&lt;/td&gt;</span></b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;/tr&gt;</span></b></span><br> <br>
    
                            <span style="margin-left: 100px;"><b>&lt;tr&gt;</b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;td&gt;</span></b></span>
                            <span>Zeile 2, Spalte 1</span>
                            <span><b>&lt;/td&gt;</span></b></span><br>
                            <span style="margin-left: 140px;"><b>&lt;td&gt;</span></b></span>
                            <span>Zeile 2, Spalte 2</span>
                            <span><b>&lt;/td&gt;</span></b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;/tr&gt;</span></b></span>
                            <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                            
                        </code>
                    </div>
                <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
                <p>Dies führt zu folgendem Ergebnis −</p>
                <img src="Die Bilder/ausgabe tabelle 5.png" alt="ausgabe tabelle .png" title="ausgabe Tabelle mit caption">
                <div class="aufgabe">
                    <p><a href="HTMl-Listen.php" class="weiter">Weiter</a></p>
                </div>
            
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