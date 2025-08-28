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
    <title>HTML-Text Links</title>
</head>
<!--Ende des Kopfes-->

<!--Begin des Körpers-->
<body>
    <form method="POST">
        <!--Der Heder -->
        <div class="header">
            <h1>HTML-Text Links</h1>
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
            <p>Eine Webseite kann verschiedene Links enthalten, die Sie direkt zu anderen Seiten und 
                sogar zu bestimmten Teilen einer bestimmten Seite führen. Diese Links werden als 
                Hyperlinks bezeichnet. Hyperlinks ermöglichen es Besuchern, zwischen Websites zu 
                navigieren, indem sie auf Wörter, Ausdrücke und Bilder klicken. So können Sie Hyperlinks 
                mit Text oder Bildern erstellen, die auf einer Webseite verfügbar sind.</p>
    
                <h2>Verknüpfen von Dokumenten</h2>
                <p>Ein Link wird mit dem HTML-Tag <b>&lt;a&gt;</b> angegeben. Dieses Tag wird Anchor-Tag genannt und 
                alles zwischen dem öffnenden <b>&lt;a&gt;</b>-Tag und dem schließenden <b>&lt;/a&gt;</b>-Tag wird Teil des Links und
                ein Benutzer kann auf diesen Teil klicken, um zum verlinkten Dokument zu gelangen. 
                Es folgt die einfache Syntax zur Verwendung des <b>&lt;a&gt;</b>-Tags.</p>
                <div class="code">
                        <code>
                            <p style="width: 100%;padding:10px"><b>&lt;a href = "Document oder Webseite URL" ...attributes-list> Text Link &lt;/a&gt;</b></p>                        
                        </code>
                    </div>
                <p>Beispiel</p>
                <p>Lassen Sie uns folgendes Beispiel ausprobieren, das http://www.google.com auf Ihrer Seite verlinkt −</p>
                <div class="code">
                        <code>
                            <p><b>&lt;!DOCTYPE html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                            <span>Hyperlink Beispiel</span>
                            <span><b>&lt;/title&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "keywords" content = "HTML lernen" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "description" content = "Lernen Sie HTML-Tags." &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "author" content = "Obai Albek" &gt;</b></span><br>
                            <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;p&gt;</b></span>
                            <span>Klicken Sie auf den folgenden Link.</span>
                            <span><b>&lt;/p&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;a href = "https://www.google.com&gt;Google&lt;/a&gt;</b></span>
                            <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                            
                        </code>
                    </div>
                <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a><br>
                <p>Dies führt zu folgendem Ergebnis, bei dem Sie auf den generierten Link klicken können, um zur Homepage von Google (in diesem Beispiel) zu gelangen.</p>
                <img src="Die Bilder/ausgabe für das Link 2.png" alt="ausgabe für das Link 2.png" title="ausgabe für das Link ">
                <h2>Das Zielattribut</h2>
                <p>Wir können das Zielattribut in unseren Tags verwenden. Diese Attribute werden 
                verwendet, um den Ort anzugeben, an dem das verknüpfte Dokument geöffnet wird. 
                Im Folgenden sind die möglichen Optionen aufgeführt −</p>
                 <table class="table">
                    <tbody>
                        <tr>
                            <th>Sr.No</th>
                            <th style="text-align: center;">Option & Beschreibung</th>
                        </tr>
                        <tr>
                            <td class="ts">1</td>
                            <td>
                                <b>_blank</b>
                                <p>Öffnet das verknüpfte Dokument in einem neuen Fenster oder Tab.</p>    
                            </td>
                        </tr>
                        <tr>
                            <td class="ts">2</td>
                            <td>
                                <b>_self</b>
                                <p>Öffnet das verknüpfte Dokument im gleichen Frame.</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="ts">3</td>
                            <td>
                                <b>_parent</b>
                                <p>Öffnet das verknüpfte Dokument im übergeordneten Frame.</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="ts">4</td>
                            <td>
                                <b>_top</b>
                                <p>Öffnet das verknüpfte Dokument im gesamten Fensterbereich.</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="ts">5</td>
                            <td>
                                <b>targetframe</b>
                                <p>Öffnet das verknüpfte Dokument in einem benannten Zielframe.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p>BeispielDie Bilder/</p>
                <p>Versuchen Sie das folgende Beispiel, um den grundlegenden Unterschied in einigen Optionen zu verstehen, die für das Zielattribut angegeben werden.</p>
                <div class="code">
                        <code>
                            <p><b>&lt;!DOCTYPE html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                            <span>Hyperlink Beispiel</span>
                            <span><b>&lt;/title&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "keywords" content = "HTML lernen" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "description" content = "Lernen Sie HTML-Tags." &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "author" content = "Obai Albek" &gt;</b></span><br>
                            <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;p&gt;</b></span>
                            <span>Klicken Sie auf den folgenden Link.</span>
                            <span><b>&lt;/p&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;a href = "https://www.google.com target="_blank" &gt;Google&lt;/a&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;a href = "https://www.google.com target="_self"&gt;Google&lt;/a&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;a href = "https://www.google.com target="_parent"&gt;Google&lt;/a&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;a href = "https://www.google.com target="_top"&gt;Google&lt;/a&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;a href = "https://www.google.com target="targetframe"&gt;Google&lt;/a&gt;</b></span><br>
                            <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                            
                        </code>
                    </div>
                <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a><br>
                <p>Dies führt zu folgendem Ergebnis, bei dem Sie auf verschiedene Links klicken können, um den Unterschied zwischen verschiedenen Optionen für das Zielattribut zu verstehen.</p>
                <img src="Die Bilder/ausgabe für das Linke 3.png" alt="ausgabe für das Linke .png" title="ausgabe der Beispiele">
                <h2>Download links</h2>
                <p>Sie können einen Textlink erstellen, um Ihre PDF-, DOC- oder ZIP-Dateien herunterladbar 
                zu machen. Das ist sehr einfach; Sie müssen nur die vollständige URL der herunterladbaren 
                Datei wie folgt angeben −</p>
                <p>Beispeil</p>
                <div class="code">
                        <code>
                            <p><b>&lt;!DOCTYPE html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                            <span>Hyperlink  Beispiel</span>
                            <span><b>&lt;/title&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "keywords" content = "HTML lernen" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "description" content = "Lernen Sie HTML-Tags." &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "author" content = "Obai Albek" &gt;</b></span><br>
                            <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;p&gt;</b></span>
                            <span>Sie können den Dokument herunterladen</span>
                            <span><b>&lt;/p&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;a href="https://www.Beispeil Dokument.com/page.pdf"&gt;Download PDF File&lt;/a&gt;</span></b></span><br>
                            <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                            
                        </code>
                    </div>
                <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a><br>
                <p>Dadurch wird der folgende Link erstellt und zum Herunterladen einer Datei verwendet.</p>
                <img src="Die Bilder/ausgabe für das Link 5.png" alt="ausgabe für das Link.png" title="ausgabe für das Link">
            
        </div>
        </div>
        <!--End der Seite-->
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