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
    <title>HTML-Listen</title>
</head>
<!--Ende des Kopfes-->

<!--Begin des Körpers-->
<body>
    <form method="POST">
        <!--Der Heder -->
        <div class="header">
            <h1>HTML-Listen</h1>
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
            <h2>Was sind die Listen in HTML?</h2>
            <p> HTML bietet Webautoren drei Möglichkeiten, Informationslisten anzugeben. Alle Listen müssen ein oder mehrere Listenelemente enthalten. Listen können − 
                enthalten −</p>
                <ul>
                    <li><b>&lt;ul&gt;</b>:Eine ungeordnete Liste. Dadurch werden Elemente mit einfachen Aufzählungszeichen aufgelistet.</li>
                    <li><b>&lt;ol&gt;</b>:Eine geordnete Liste. Dadurch werden verschiedene Nummernschemata verwendet, um Ihre Artikel aufzulisten.</li>
                    <li><b>&lt;dl&gt;</b>:Eine Definitionsliste. Dadurch werden Ihre Elemente auf die gleiche Weise angeordnet, wie sie in einem Wörterbuch angeordnet sind.</li>
                </ul>
                <h2>Ungeordnete HTML-Listen</h2>
                <p>Eine ungeordnete Liste ist eine Sammlung verwandter Elemente, die keine besondere Reihenfolge oder Reihenfolge haben. Diese Liste wird mithilfe des HTML-<b>&lt;ul&gt;</b>-Tags erstellt. Jedes Element in der Liste ist mit einem Aufzählungszeichen gekennzeichnet.</p>
                <p>Beispiel</p>
                <div class="code">
                        <code>
                            <p><b>&lt;!DOCTYPE html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                            <span>HTML ungeordnete Liste</span>
                            <span><b>&lt;/title&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "keywords" content = "HTML lernen" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "description" content = "Lernen Sie HTML-Tags." &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "author" content = "Obai Albek" &gt;</b></span><br>
                            <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;ul&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Beetroot</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Ginger</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Potato</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Radish</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;/ul&gt;</b></span><br>
                            <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                            
                        </code>
                    </div>
                    <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
                <p>Dies führt zu folgendem Ergebnis:</p>
                <img src="Die Bilder/ausgabe der lists.png" alt="ausgabe der lists.png" title="Die Lists">
                <h2>Das Typattribut</h2>
                <p>Sie können das Typattribut für das <b>&lt;ul&gt;</b>-Tag verwenden, um den gewünschten Aufzählungstyp anzugeben. Standardmäßig ist es eine Disc. Im Folgenden sind die möglichen Optionen aufgeführt:</p>
                <ul>
                    <li><b>&lt;ul type = "square"&gt;</b></li>
                    <li><b>&lt;ul type = "disc"&gt;</b></li>
                    <li><b>&lt;ul type = "circle"&gt;</b></li>
                </ul>
                <p>Beispiel</p>
                <p>Im Folgenden sehen Sie ein Beispiel, in dem wir &lt;ul type = "square"&gt; verwendet haben</p>
                <div class="code">
                        <code>
                            <p><b>&lt;!DOCTYPE html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                            <span>HTML ungeordnete Liste</span>
                            <span><b>&lt;/title&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "keywords" content = "HTML lernen" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "description" content = "Lernen Sie HTML-Tags." &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "author" content = "Obai Albek" &gt;</b></span><br>
                            <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;ul type = "square"&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>HTML</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>CSS</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Javascript</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Java</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;/ul&gt;</b></span><br>
                            <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                            
                        </code>
                    </div>
                    <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
                <p>Dies führt zu folgendem Ergebnis:</p>
                <img src="Die Bilder/ausgabe lists 2.png" alt="ausgabe lists 2.png" title="Die Lsits">
                <p>Beispiel</p>
                <p>Im Folgenden sehen Sie ein Beispiel, in dem wir&lt;ul type = "disc"&gt;verwendet haben</p>
                <div class="code">
                        <code>
                            <p><b>&lt;!DOCTYPE html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                            <span>HTML ungeordnete Liste</span>
                            <span><b>&lt;/title&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "keywords" content = "HTML lernen" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "description" content = "Lernen Sie HTML-Tags." &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "author" content = "Obai Albek" &gt;</b></span><br>
                            <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;ul type = "disc"&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>HTML</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>CSS</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Javascript</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Java</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;/ul&gt;</b></span><br>
                            <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                            
                        </code>
                    </div>
                    <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
                <p>Dies führt zu folgendem Ergebnis:</p>
                <img src="Die Bilder/ausgabe lists 3.png" alt="ausgabe lists 3.png" title="Die disc Lists">
                <p>Beispiel</p>
                <p>Im Folgenden sehen Sie ein Beispiel, in dem wir &lt;ul type = "circle"&gt; verwendet haben</p>
                <div class="code">
                        <code>
                            <p><b>&lt;!DOCTYPE html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                            <span>HTML ungeordnete Liste</span>
                            <span><b>&lt;/title&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "keywords" content = "HTML lernen" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "description" content = "Lernen Sie HTML-Tags." &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "author" content = "Obai Albek" &gt;</b></span><br>
                            <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;ul type = "circle"&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>HTML</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>CSS</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Javascript</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Java</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;/ul&gt;</b></span><br>
                            <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                            
                        </code>
                    </div>
                    <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
                <p>Dies führt zu folgendem Ergebnis:</p>
                <img src="Die Bilder/ausgabe lists 4.png" alt="ausgabe lists 4.png" title="Die circle lists">
                <h2>HTML-geordnete Lists</h2>
                <p>Wenn Sie Ihre Artikel in eine nummerierte Liste anstatt in eine Liste mit Aufzählungszeichen 
                einfügen müssen, wird eine geordnete HTML-Liste verwendet. Diese Liste wird mit dem Tag &lt;ol&gt; erstellt. 
                Die Nummerierung beginnt bei eins und wird für jedes aufeinanderfolgende geordnete Listenelement, das mit &lt;li&gt; gekennzeichnet ist, um eins erhöht.</p>
                <p>Beispiel</p>
                <div class="code">
                        <code>
                            <p><b>&lt;!DOCTYPE html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                            <span>HTML geordnete Liste</span>
                            <span><b>&lt;/title&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "keywords" content = "HTML lernen" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "description" content = "Lernen Sie HTML-Tags." &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "author" content = "Obai Albek" &gt;</b></span><br>
                            <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;ol&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>HTML</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>CSS</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Javascript</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Java</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;/ol&gt;</b></span><br>
                            <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                            
                        </code>
                    </div>
                    <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
                <p>Dies führt zu folgendem Ergebnis:</p>
                <img src="Die Bilder/ausgabe lists 6.png" alt="ausgabe lists .png" title="Die Lists">
                <ul>
                    <li>&lt;ol type = "1"&gt; - Nummerierte Liste</li>
                    <li>&lt;ol type = "I"&gt; - Römische Nummernliste</li>
                    <li>&lt;ol type = "i"&gt; - Liste der römischen Zahlen in Kleinbuchstaben</li>
                    <li>&lt;ol type = "A"&gt; - Buchstabenliste</li>
                    <li>&lt;ol type = "a"&gt; - Liste der Kleinbuchstaben</li>
                </ul>
                <p>Beispiel</p>
                <p>Im Folgenden sehen Sie ein Beispiel, in dem wir &lt;ol type = "A"&gt; verwendet haben</p>
                <div class="code">
                        <code>
                            <p><b>&lt;!DOCTYPE html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                            <span>HTML ungeordnete Liste</span>
                            <span><b>&lt;/title&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "keywords" content = "HTML lernen" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "description" content = "Lernen Sie HTML-Tags." &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "author" content = "Obai Albek" &gt;</b></span><br>
                            <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;ol type = "A"&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Pfirsich</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Aprikose</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Banane</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Erdbeere</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;/ol&gt;</b></span><br>
                            <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                            
                        </code>
                    </div>
                    <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
                <p>Dies führt zu folgendem Ergebnis:</p>
                <img src="Die Bilder/ausgabe lists 7.png" alt="ausgabe lists 7.png" title="Die lists">
                <p>Beispiel</p>
                <p>Im Folgenden sehen Sie ein Beispiel, in dem wir &lt;ol type = "a"&gt; verwendet haben</p>
                <div class="code">
                        <code>
                            <p><b>&lt;!DOCTYPE html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                            <span>HTML ungeordnete Liste</span>
                            <span><b>&lt;/title&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "keywords" content = "HTML lernen" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "description" content = "Lernen Sie HTML-Tags." &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "author" content = "Obai Albek" &gt;</b></span><br>
                            <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;ol type = "a"&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Pfirsich</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Aprikose</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Banane</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Erdbeere</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;/ol&gt;</b></span><br>
                            <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                            
                        </code>
                    </div>
                    <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
                    <p>Dies führt zu folgendem Ergebnis:</p>
                <img src="Die Bilder/ausgabe lists 10.png" alt="ausgabe lists .png" title="Die Lists">
                <p>Beispiel</p>
                <p>Im Folgenden sehen Sie ein Beispiel, in dem wir &lt;ol type = "I"&gt; verwendet haben</p>
                <div class="code">
                        <code>
                            <p><b>&lt;!DOCTYPE html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                            <span>HTML ungeordnete Liste</span>
                            <span><b>&lt;/title&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "keywords" content = "HTML lernen" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "description" content = "Lernen Sie HTML-Tags." &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "author" content = "Obai Albek" &gt;</b></span><br>
                            <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;ol type = "I"&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Pfirsich</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Aprikose</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Banane</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Erdbeere</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;/ol&gt;</b></span><br>
                            <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                            
                        </code>
                    </div>
                    <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
                <p>Dies führt zu folgendem Ergebnis:</p>
                <img src="Die Bilder/ausgabe lists .png" alt="ausgabe lists .png" title="Die Lsits">
                <p>Beispiel</p>
                <p>Im Folgenden sehen Sie ein Beispiel, in dem wir &lt;ol type = "i"&gt; verwendet haben</p>
                <div class="code">
                        <code>
                            <p><b>&lt;!DOCTYPE html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;head&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                            <span>HTML ungeordnete Liste</span>
                            <span><b>&lt;/title&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "keywords" content = "HTML lernen" &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "description" content = "Lernen Sie HTML-Tags." &gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;meta name = "author" content = "Obai Albek" &gt;</b></span><br>
                            <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                            <span style="margin-left: 60px;"><b>&lt;ol type = "i"&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Pfirsich</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Aprikose</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Banane</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 100px;"><b>&lt;li&gt;</b></span>
                            <span>Erdbeere</span>
                            <span><b>&lt;/li&gt;</b></span><br>
                            <span style="margin-left: 60px;"><b>&lt;/ol&gt;</b></span><br>
                            <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                            <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                            
                        </code>
                    </div>
                    <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
                <p>Dies führt zu folgendem Ergebnis:</p>
                <img src="Die Bilder/ausgabe lists 42.png" alt="ausgabe lists 42.png" title="Die Lists.png">
                <div class="aufgabe">
                    <p><a href="HTML-Text Links.php" class="weiter">Weiter</a></p>
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