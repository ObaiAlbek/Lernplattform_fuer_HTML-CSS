<?php include_once ("for die Registieren.php"); ?>
<?php
	$query = "SELECT * FROM registration WHERE ID ";
	$ergebnisse = $dbh->query($query);
    foreach($ergebnisse as $row);
?>
<!DOCTYPE html>
<html lang="de">
    <head>
    <title>Homepage</title>
    <link rel="stylesheet" href="CSS/für die Homepage.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="O_V3schools-removebg-preview.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .abmelden{
    display: inline-block;
    color: #666;
    background-color: #f4f4f4;
    border: 1px dotted #ccc;
    padding: 6px 13px;
}
    </style>
</head>
<body>

    <div class="header">
        <h1>Lernen Sie To Code</h1>
        <p>Mit der weltweit größten Website für Webentwickler.</p>
        <p>Herzlich Willkommen <?php echo "<span style = color:white>".$row['firstName']." ".$row['lastName']. "</span>"; ?></p>
    </div>
    <div class="navbar">
        <a href="HTML-Eiführung.php">HTML</a>
        <a href="CSS-Einführung.php">CSS</a>
        <a href="Der Test/index.php">HTML-Test</a>
        <a href="Der Test CSS/index.php">CSS-Test</a>
        <a class="kontakt">
                Kontakt
                <div class="kontakt">
                    <h1 style="margin-left: 27%; font-size: 25px;">Lassen Sie uns Kontakt aufnehmen</h1>
                    <p style="text-align: center;">Wir sind offen für jeden Vorschlag oder einfach nur für ein Gespräch</p>
                    <span class="material-icons">&#xe55f;</span>
                    <span >Adresse: Deutschland, Baden-Württemberg, mannheim-Gärtnerstraße.25</span><br>
                    <span class="material-icons">&#xe551;</span>
                    <span>Telefonnummer: +49 178 3740356</span><br>
                    <span class="material-icons">&#xe569;</span>
                    <span>E-Mail: obay.albeek@gmail.com</span>
                </div>
        </a>
        <a class="überuns" href="Über uns.php">Über uns </a>
        <a class="profile" href="konto_zeigen.php">Profil</a>
    </div>

    <div class="zeile">
        <div class="seite">
            <img  style="display: block; width:90%;margin-top:120px;user-select: none;" src="Die Bilder/HTML 5 Foto.png" alt="HTML 5">
            <img  style="display: block; width:90%;margin-top:220px;border-top:1px solid red;user-select: none;" src="Die Bilder/CSS.png" alt="HTML 5">

        </div>
    <div class="körper">
            <div class="beispiel">
                <p>HTML Beispiel:</p>
                <div class="code">
                                <code>
                                    <p><b>&lt;!DOCTYPE html&gt;</b></p>
                                    <p style="margin-left: 20px;"><b>&lt;html&gt;</b></p>
                                    <p><b>&lt;head&gt;</b></p>
                                    <span style="margin-left: 60px;"><b>&lt;title&gt;</b></span>
                                    <span>Dies ist der Titel des Dokuments</span>
                                    <span><b>&lt;/title&gt;</b></span>
                                    <p><b style="margin-left: 20px;">&lt;/head&gt;</b></p>
                                    <p style="margin-left: 20px;"><b>&lt;body&gt;</b></p>
                                    <span style="margin-left: 60px;"><b>&lt;h1&gt;</b></span>
                                    <span>Das ist heading (Überschrift).</span>
                                    <span><b>&lt;/h1&gt;</b></span><br>
                                    <span style="margin-left: 60px;"><b>&lt;p&gt;</b></span>
                                    <span>Hallo Welt.</span>
                                    <span><b>&lt;/p&gt;</b></span>
                                    <p style="margin-left: 20px;"><b>&lt;/body&gt;</b></p>
                                    <p style="margin-left: 20px;"><b>&lt;/html&gt;</b></p>
                                </code>
                            </div>
                            <a href="selbst_versuch.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
            </div>
            <h1>HTML5</h1>
            <p style="font-size:20px">Die Sprache zum Erstellen von Webseiten</p>
            <a class="lerne" href="HTML-Eiführung.php">Lerne HTML</a>

        <div class="css">
            <div class="beispiel">
                <p>CSS Beispiel:</p>
                <div class="code">
                                <code>
                                    <p>body {</p>
                                    <span style="margin-left: 70px;">background-color:black;</span>
                                    <p>}</p>
                                    <p>h1 {</p>
                                    <span style="margin-left: 70px;">color: white;</span><br>
                                    <span style="margin-left: 70px;">text-align:center;</span>
                                    <p>}</p>
                                    <p>p {</p>
                                    <span style="margin-left:70px;">font-family:</span><span>arial;</span>
                                    <p>}</p>
                                </code>
                    </div>
                            <a href="selbst_versuch_css.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
            </div>
            <h1>CSS</h1>
            <p style="font-size:20px">Die Sprache zum Gestalten von Webseiten</p>
            <a class="lerne" href="CSS-Einführung.php">Lerne CSS</a>
        </div>
    </div>
    </div>

    <div class="footer">
    <h2> Urheberrechte 2023 &copy; OV-Codeschule</h2>
    </div>
</body>
</html>
