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
    <title>HTML-Einführung</title>
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
    </style>
</head>
<!--Ende des Kopfes-->

<!--Begin des Körpers-->
<body>
    <form method="POST">
        <!--Der Heder -->
        <div class="header">
            <h1>HTML-Einführung</h1>
        </div>
        <!-- die Listen -->
        <div class="navbar">
            <a href="Homepage.php">Home</a>
            <a class="überuns" href="Über uns.php">Über uns</a>
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
        <!-- Die Inhalt des Körper der Seiten -->
        <div class="körper">
                <h2>Was ist HTML?</h2>
                <P><b>HTML</b> steht für <b> Hyper Text Markup Language auf 
                    deutsch (Hypertext-Auszeichnungssprache) </b> die im Web am 
                    häufigsten verwendete Sprache zur Entwicklung von Webseiten.
                    HTML wurde Ende 1991 von Berners-Lee entwickelt. "HTML 2.0" war 
                    die erste Standard-HTML-Spezifikation, die 1995 veröffentlicht 
                    wurde.
                </P>
                <h2>Warum HTML lernen?</h2>
                    <p>HTML wird häufig verwendet, um Webseiten mit Hilfe 
                        verschiedener Tags zu formatieren, die in der HTML-Sprache 
                        verfügbar sind.
                        HTML ist ein MUSS für Studenten und Berufstätige,
                        um ein großartiger Softwareentwickler zu werden, 
                        insbesondere wenn sie im Bereich der Webentwicklung arbeiten. 
                        Ich werde einige der wichtigsten Vorteile des Erlernens von 
                        HTML auflisten:</p>
                <ul class="forinfo">
                                <li><b>Website erstellen:</b> Sie können eine Website erstellen oder eine vorhandene Webvorlage anpassen, wenn Sie sich mit HTML auskennen.</li>
                                <li><b>Werden Sie Webdesigner: </b> Wenn Sie eine Karriere als professioneller Webdesigner starten wollen, ist HTML- und CSS-Design ein Muss..</li>
                                <li><b>Lernen Sie andere Sprachen:</b> Sobald Sie die Grundlagen von HTML verstanden haben, sind andere verwandte Technologien wie Javascript, PHP oder Angular leichter zu verstehen.</li>
                            </ul>
                <h2>Aufbau eines HTML-Element</h2>
                            <p>HTML-Elemente sind die Bausteine aus denen sich eine Webseite zusammensetzt und 
                            auch damit strukturiert wird. Fast jedes HTML-Element besteht aus einem öffnenden und 
                            einem schließenden Tag. Die folgende Abbildung wirkt auf den ersten Blick vielleicht 
                            etwas verwirrend, nimm Dir Zeit und Du wirst sehen, dass HTML-Elemente gar nicht so 
                            schwierig aufgebaut sind.</p>
                            <img src="Die Bilder/Aufbau eines HTML-Element2.jpg" alt="Aufbau eines HTML-Element" title="Aufbau eines HTML-Element">
                            <h3>Hallo Welt mit HTML:</h3>
                            <p>Um Ihnen ein wenig Aufregung über HTML zu geben, werde ich Ihnen ein kleines konventionelles HTML Hello World Programm geben.</p>
            
                    <div class="code">
                                <code>
                                    <p><b>&lt;!DOCTYPE html&gt;</b></p>
                                    <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                                    <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                                    <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                                    <span>Dies ist der Titel des Dokuments</span>
                                    <span><b>&lt;/title&gt;</b></span>
                                    <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                                    <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                                    <span style="margin-left: 60px;"><b>&lt;h1&gt;</b></span>
                                    <span>Das ist heading.</span>
                                    <span><b>&lt;/h1&gt;</b></span><br>
                                    <span style="margin-left: 60px;"><b>&lt;p&gt;</b></span>
                                    <span>Hallo Welt.</span>
                                    <span><b>&lt;/p&gt;</b></span>
                                    <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                                    <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                                </code>
                            </div>
                
                <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
                <h2>Die Ausgabe im Browserfentser</h2>
                            <img class="ausgabe" src="Die Bilder/Die Ausgabe.png" alt="Die Ausgabe.png">
                            <h2>HTML - Tags</h2>
                            <p>HTML ist eine Auszeichnungssprache und verwendet verschiedene Tags, um den Inhalt zu 
                            formatieren. Diese Tags werden in spitze Klammern <b>&lt;Tag Name&gt;</b> eingeschlossen. 
                            Mit Ausnahme weniger Tags haben die meisten Tags ihre entsprechenden schließenden 
                            Tags. Zum Beispiel hat <b>&lt;html&gt;</b> sein schließendes Tag <b>&lt;/html&gt;</b> und das 
                            <b>&lt;body&gt;</b>-Tag hat sein schließendes <b>&lt;/body&gt;</b>-Tag usw.</p>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th style="text-align: center;">Tags & Beschreibungen</th>
                                    </tr>
                                    <tr>
                                        <td class="ts">1</td>
                                        <td>
                                            <b><code style="margin-left: 10px;" class="w3-codespan">&lt;!DOCTYPE&gt;</code></b>
                                            <p>Dieses Tag definiert den Dokumenttyp und die HTML-Version.</p>    
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ts">2</td>
                                        <td>
                                            <b><code style="margin-left: 10px;" class="w3-codespan">&lt;html&gt;</code></b>
                                            <p>Dieses Tag umschließt das komplette HTML-Dokument und besteht hauptsächlich aus dem Dokument-Header.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ts">3</td>
                                        <td>
                                            <b><code style="margin-left: 10px;" class="w3-codespan">&lt;title&gt;</code></b>
                                            <p>Das &lt;title&gt;-Tag wird innerhalb des &lt;head&gt;-Tags verwendet, um den Dokumenttitel zu erwähnen.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ts">4</td>
                                        <td>
                                            <b><code style="margin-left: 10px;" class="w3-codespan">&lt;head&gt;</code></b>
                                            <p>Dieses Tag stellt den Header des Dokuments dar, der andere HTML-Tags wie &lt;title&gt;, &lt;link&gt; usw. enthalten kann.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ts">5</td>
                                        <td>
                                            <b><code style="margin-left: 10px;" class="w3-codespan">&lt;body&gt;</code></b>
                                            <p>Dieses Tag stellt den Hauptteil des Dokuments dar, der andere HTML-Tags wie &lt;h1&gt;, &lt;div&gt;, &lt;p&gt; usw. enthält.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ts">6</td>
                                        <td>
                                            <b><code style="margin-left: 10px;" class="w3-codespan">&lt;h1&gt;</code></b>
                                            <p>Dieses Tag repräsentiert die Überschrift.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ts">7</td>
                                        <td>
                                            <b><code style="margin-left: 10px;" class="w3-codespan">&lt;p&gt;</code></b>
                                            <p>Dieses Tag repräsentiert einen Absatz.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                                <p><a href="HTML-Basis Tags.php" class="weiter">Weiter</a></p>
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
                <p><input class ="send" id="submit" name="submit" type="submit" value="submit"></p>

        </form>        
            </div>
            <div class="copyright">
                <p>Urheberrechte 2023 &copy; OV-Codeschule</p>            
            </div>    
</body>
<!--Ende des Körpers-->
</html>