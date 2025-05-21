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
    <title>HTML - Kommentare</title>
</head>
<!--Ende des Kopfes-->

<!--Begin des Körpers-->
<body>
    <form method="POST">
        <!--Der Heder -->
        <div class="header">
            <h1>HTML - Kommentare</h1>
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
        
        <!-- Die Inhalt des Körpers der Seietn -->
        <div class="körper">
            <h2>Was ist der Kommentar</h2>
            <P>Kommentar ist ein Stück Code, das von jedem Webbrowser ignoriert wird. 
            Es empfiehlt sich, Kommentare in Ihren HTML-Code einzufügen, insbesondere in komplexen 
            Dokumenten, um Abschnitte eines Dokuments und andere Hinweise für jeden anzuzeigen, 
            der sich den Code ansieht. Kommentare helfen Ihnen und anderen, Ihren Code zu verstehen 
            und die Lesbarkeit des Codes zu verbessern. HTML-Kommentare werden zwischen <b>&lt;!-- ... --&gt;</b>Tags platziert. Daher wird jeder Inhalt, der innerhalb von <b>&lt;!-- ... --&gt;</b>
            Tags platziert wird, als Kommentar behandelt und vom Browser vollständig ignoriert.</P>
            <p>Beispiel</p>
            <div class="code">
                    <code>
                        <p><b>&lt;!DOCTYPE html&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                        <span style="margin-left: 60px; color:green"><b>&lt;!-- Dokumentkopf beginnt --&gt;</b></span><br>
                        <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                        <span>Dies ist der Titel des Dokuments</span>
                        <span><b>&lt;/title&gt;</b></span><br>
                        <span style="margin-left: 60px; color:green"><b>&lt;!-- Dokumentkopf endet --&gt;</b></span><br>
                        <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                        <span style="margin-left: 60px; color:green"><b>&lt;!-- Ich bin heading --&gt;</b></span><br>
                        <span style="margin-left: 60px;"><b>&lt;h1&gt;</b></span>
                        <span>Kommentare</span>
                        <span><b>&lt;/h1&gt;</b></span><br>
                        <span style="margin-left: 60px; color:green"><b>&lt;!-- Ich bin einen Absatz --&gt;</b></span><br>
                        <span style="margin-left: 60px;"><b>&lt;p&gt;</b></span>
                        <span>ich mag Kommentare.</span>
                        <span><b>&lt;/p&gt;</b></span><br>
                        <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                        
                    </code>
                </div>
            <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
            <p>Dies führt zu folgendem Ergebnis, ohne den Inhalt anzuzeigen, der als Teil von Kommentaren angegeben wurde:</p>
            <img src="Die Bilder/ausgabe für kommentar.png" alt="ausgabe für kommentare.png" title="ausgabe für kommentare">
            <h2>Gültige vs. ungültige Kommentare</h2>
            <p>Kommentare werden nicht verschachtelt, was bedeutet, dass ein Kommentar nicht in einen 
            anderen Kommentar eingefügt werden kann. Zweitens darf die Doppelstrichfolge „--“ 
            nicht innerhalb eines Kommentars erscheinen, außer als Teil des schließenden Tags „-->“. 
            Sie müssen auch sicherstellen, dass der Kommentaranfang keine Leerzeichen enthält.</p>
            <p>Beispiel</p>
            <p>Hier ist der angegebene Kommentar ein gültiger Kommentar und wird vom Browser gelöscht.</p>
            <div class="code">
                    <code>
                        <p><b>&lt;!DOCTYPE html&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                        <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                        <span>Beispiel für einen gültigen Kommentar</span>
                        <span><b>&lt;/title&gt;</b></span><br>
                        <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                        <span style="margin-left: 60px; color:green"><b>&lt;!-- Dies ist ein gültiger Kommentar --&gt;</b></span><br>
                        <span style="margin-left: 60px;"><b>&lt;p&gt;</b></span>
                        <span>Dokumenteninhalt gehört hier....</span>
                        <span><b>&lt;/p&gt;</b></span><br>
                        <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                        
                    </code>
                </div>
            <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
            <p>Dies führt zu folgendem Ergebnis −</p>
            <img src="Die Bilder/ausgabe gültiger Kommentar.png" alt="ausgabe gültiger Kommentar.png" title="ausgabe gültiger Kommentar">
            <p>Die folgende Zeile ist jedoch kein gültiger Kommentar und wird vom Browser angezeigt. Das liegt daran, 
            dass zwischen der linken spitzen Klammer und dem Ausrufezeichen ein Leerzeichen steht.</p>
            <div class="code">
                    <code>
                        <p><b>&lt;!DOCTYPE html&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                        <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                        <span>Beispiel für einen ungültigen Kommentar</span>
                        <span><b>&lt;/title&gt;</b></span><br>
                        <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                        <span style="margin-left: 60px;"><b>&lt;  !-- Dies ist ein ungültiger Kommentar -- &gt;</b></span><br>
                        <span style="margin-left: 60px;"><b>&lt;p&gt;</b></span>
                        <span>Dokumenteninhalt gehört hier....</span>
                        <span><b>&lt;/p&gt;</b></span><br>
                        <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                        
                    </code>
                </div>
            <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
            <p>Dies führt zu folgendem Ergebnis −</p>
            <img src="Die Bilder/ausgabe für ungültiger kommentar.png" alt="ausgabe für ungültiger kommentar.png" title="ausgabe für ungültiger kommentar">
            <h2>Mehrzeilige Kommentare</h2>
            <p>Bisher haben wir einzeilige Kommentare gesehen, aber HTML unterstützt auch mehrzeilige 
            Kommentare. Sie können mehrere Zeilen kommentieren, indem Sie das spezielle Anfangs-Tag 
            <b>&lt;!-- ... --&gt;</b> vor die erste Zeile und das Ende der letzten Zeile setzen, 
            wie im folgenden Beispiel gezeigt.</p>
            <p>Beispiel</p>
            <div class="code">
                    <code>
                        <p><b>&lt;!DOCTYPE html&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                        <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                        <span>mehrzeilige Kommentare</span>
                        <span><b>&lt;/title&gt;</b></span><br>
                        <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                        <span style="margin-left: 60px; color:green"><b>&lt;!--</b><br> 
                        <span style="margin-left: 100px;">Dies ist ein mehrzeiliger Kommentar,der beliebig viele </span>
                        <br><span style="margin-left: 100px;">Zeilen umfassen kann.</span><br><b style="margin-left: 60px;">-- &gt;</b>
                        </span><br>
                        <span style="margin-left: 60px;"><b>&lt;p&gt;</b></span>
                        <span>Dokumenteninhalt gehört hier....</span>
                        <span><b>&lt;/p&gt;</b></span><br>
                        <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                        <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                        
                    </code>
                </div>
            <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
            <p>Dies führt zu folgendem Ergebnis −</p>
            <img src="Die Bilder/ausgabe mehrzeilige kommentare .png" alt="ausgabe mehrzeilige kommentare .png" title="ausgabe mehrzeilige kommentare">
            <div class="aufgabe">
                <p><a href="HTML-Tabellen.php" class="weiter">Weiter</a></p>
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