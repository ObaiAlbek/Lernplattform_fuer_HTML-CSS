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
    <title>HTML-Meta Tags</title>
</head>
<!--Ende des Kopfes-->

<!--Begin des Körpers-->
<body>
    <form method="POST">
        <!--Der Heder -->
        <div class="header">
            <h1>HTML-Meta Tags</h1>
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
            <h2>Was sind die Meta - Tags?</h2>
            <p>Mit HTML können Sie Metadaten – zusätzliche wichtige Informationen zu einem Dokument 
                – auf vielfältige Weise angeben. Die META-Elemente können verwendet werden, 
                um Name/Wert-Paare einzuschließen, die Eigenschaften des HTML-Dokuments beschreiben, 
                wie z. B. Autor, Ablaufdatum, eine Liste von Schlüsselwörtern, Autor des Dokuments usw.
                Das <b>&lt;meta&gt;</b>-Tag wird verwendet, um solche zusätzlichen Informationen bereitzustellen. 
                Dieses Tag ist ein leeres Element und hat daher kein schließendes Tag, trägt aber 
                Informationen in seinen Attributen.
                Sie können ein oder mehrere Meta-Tags in Ihr Dokument einfügen, je nachdem, 
                welche Informationen Sie in Ihrem Dokument behalten möchten, aber im Allgemeinen 
                wirken sich Meta-Tags nicht auf das physische Erscheinungsbild des Dokuments aus, daher 
                spielt es keine Rolle, ob Sie es einfügen sie oder nicht.</p>
                <h2>Hinzufügen von Meta-Tags zu Ihren Dokumenten</h2>
                <p>Sie können Ihren Webseiten Metadaten hinzufügen, indem Sie <b>&lt;meta&gt;</b>-Tags in die 
                Kopfzeile des Dokuments einfügen, die durch die Tags <b>&lt;head&gt;</b> und <b>&lt;/head&gt;</b>
                dargestellt wird. Ein Meta-Tag kann zusätzlich zu den Kernattributen folgende Attribute haben.</p>
    
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Sr.No</th>
                            <th style="text-align: center;">Attribut & Beschreibung</th>
                        </tr>
                        <tr>
                            <td class="ts">1</td>
                            <td>
                                <b>Name</b>
                                <p>Name für die Eigenschaft. Kann alles sein. Beispiele sind Schlüsselwörter, Beschreibung, Autor, überarbeitet, Generator usw.</p>    
                            </td>
                        </tr>
                        <tr>
                            <td class="ts">2</td>
                            <td>
                                <b>content</b>
                                <p>Gibt den Wert der Eigenschaft an.</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="ts">3</td>
                            <td>
                                <b>scheme</b>
                                <p>Gibt ein Schema an, um den Wert der Eigenschaft zu interpretieren (wie im Inhaltsattribut deklariert).</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="ts">4</td>
                            <td>
                                <b>http-equiv</b>
                                <p>Wird für Header von HTTP-Antwortnachrichten verwendet. Beispielsweise kann http-equiv verwendet werden, um die Seite zu aktualisieren oder ein Cookie zu setzen. Zu den Werten gehören Content-Type, Expires, Refresh und Set-Cookie.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <h2>bestimmte Schlüsselwörter</h2>
                <p>Sie können das &lt;meta&gt;-Tag verwenden, um wichtige Schlüsselwörter in Bezug auf 
                das Dokument anzugeben, und später werden diese Schlüsselwörter von den Suchmaschinen 
                verwendet, während Ihre Website für Suchzwecke indexiert wird.</p>
                <p>Beispeil</p>
                <p>Im Folgenden sehen Sie ein Beispiel, in dem wir HTML, Meta-Tags und Metadaten als 
                wichtige Schlüsselwörter zum Dokument hinzufügen.</p>
                <div class="code">
                        <code>
                            <p><b>&lt;!DOCTYPE html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                            <span>Meta - Tags Beispiel</span>
                            <span><b>&lt;/title&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "keywords" content = "HTML, Meta Tags, Metadatein &gt;</b></span>
                            <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;p&gt;</b></span>
                            <span>Hallo HTML</span>
                            <span><b>&lt;/p&gt;</b></span><br>
                            <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                            
                        </code>
                    </div>
                <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
                <p>Dies führt zu folgendem Ergebnis −</p>
                <img src="Die Bilder/ausgabe meta-tags.png" alt="ausgabe meta-tags.png" title="ausgabe meta-tags">
                <h2>Dokumentbeschreibung</h2>
                <p>Sie können das &lt;meta&gt;-Tag verwenden, um eine kurze Beschreibung 
                des Dokuments anzugeben. Dies kann wiederum von verschiedenen 
                Suchmaschinen verwendet werden, während Ihre Website für Suchzwecke 
                indexiert wird.</p>
                <p>Beispeil</p>
                <div class="code">
                        <code>
                            <p><b>&lt;!DOCTYPE html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                            <span>Meta - Tags Beispiel</span>
                            <span><b>&lt;/title&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "keywords" content = "HTML, Meta Tags, Metadatein" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "description" content = "Lernen Sie Meta-Tags." &gt;</b></span>
                            <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;p&gt;</b></span>
                            <span>Hallo HTML</span>
                            <span><b>&lt;/p&gt;</b></span><br>
                            <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                            
                        </code>
                    </div>
                <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
                <h2>Dokumentaktualisierung</h2>
                <p>Ein &lt;meta&gt;-Tag kann verwendet werden, um eine Dauer anzugeben, nach der Ihre Webseite automatisch aktualisiert wird.</p>
                <p>Beispeil</p>
                <p>Wenn Sie möchten, dass Ihre Seite alle 5 Sekunden aktualisiert wird, verwenden Sie die folgende Syntax.</p>
                <div class="code">
                        <code>
                            <p><b>&lt;!DOCTYPE html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                            <span>Meta - Tags Beispiel</span>
                            <span><b>&lt;/title&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "keywords" content = "HTML, Meta Tags, Metadatein" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "description" content = "Lernen Sie Meta-Tags." &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "refresh" content = "5" &gt;</b></span><br>
                            <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;p&gt;</b></span>
                            <span>Hallo HTML</span>
                            <span><b>&lt;/p&gt;</b></span><br>
                            <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                            
                        </code>
                    </div>
                <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
                <h2>Seitenumleitung</h2>
                <p>Sie können das &lt;meta&gt;-Tag verwenden, um Ihre Seite auf eine andere 
                Webseite umzuleiten. Sie können auch eine Dauer angeben, wenn Sie die Seite 
                nach einer bestimmten Anzahl von Sekunden umleiten möchten.</p>
                <p>Beispiel</p>
                <div class="code">
                        <code>
                            <p><b>&lt;!DOCTYPE html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                            <span>Meta - Tags Beispiel</span>
                            <span><b>&lt;/title&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "keywords" content = "HTML, Meta Tags, Metadatein" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "description" content = "Lernen Sie Meta-Tags." &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "refresh" content = "5" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "refresh" content = "5; url = http://www.google.com" &gt;</b></span><br>
                            <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;p&gt;</b></span>
                            <span>Hallo HTML</span>
                            <span><b>&lt;/p&gt;</b></span><br>
                            <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                            
                        </code>
                    </div>
                <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
                <p>Im Folgenden finden Sie ein Beispiel für die Umleitung der aktuellen Seite 
                auf eine andere Seite nach 5 Sekunden. Wenn Sie die Seite sofort umleiten 
                möchten, geben Sie kein Inhaltsattribut an.</p>
                <h2>Autorenname einstellen</h2>
                <p>Sie können einen Autorennamen auf einer Webseite mithilfe von Meta-Tags festlegen. Siehe ein Beispiel unten −</p>
                <p>Beispeil</p>
                 <div class="code">
                        <code>
                            <p><b>&lt;!DOCTYPE html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                            <span>Meta - Tags Beispiel</span>
                            <span><b>&lt;/title&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "keywords" content = "HTML, Meta Tags, Metadatein" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "description" content = "Lernen Sie Meta-Tags." &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "refresh" content = "5" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "refresh" content = "5; url = http://www.google.com" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "author" content = "Obai Albek" &gt;</b></span><br>
                            <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;p&gt;</b></span>
                            <span>Hallo HTML</span>
                            <span><b>&lt;/p&gt;</b></span><br>
                            <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                            
                        </code>
                    </div>
                <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a><br><br>
                <div class="aufgabe">
                    <p><a href="HTML-Kommentar.php" class="weiter">Weiter</a></p> 
                </div>    
            
        </div>
        </div>
        <!--End der Seiten-->
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