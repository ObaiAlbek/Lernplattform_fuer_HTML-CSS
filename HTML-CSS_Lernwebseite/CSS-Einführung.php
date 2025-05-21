<?php include("Datenbanken.php");?>
<?php include_once ("Schicke Nachricht.php");?>

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
    <link href="CSS/für den CSS-Kurs.css" rel="stylesheet">
    <title>CSS-Einführung</title>
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

.fragen p{
    margin-top: -10px;
}

.code-box{
    margin-left: 0.5em;
    display: inline-block;
    margin-top: -10px;
}

.code-box code{
    background-color: whitesmoke;
}


.syntax {
    color: chocolate;
}
.syntax img {
    border-radius: 25px;
    width: 80%;
}

.syntax h2 {
    text-align: center;
    margin-left: -4em;
    margin-bottom: 1em;
}


.code-beispiele .selektor-absatz{
    display:flex;
    align-items: flex-start;
}

.code-beispiele .selektor-class{
    display: flex;
    justify-content: last baseline;
}

.code-beispiele .selektor-absatz-in-class{
    display: flex;
    justify-content: last baseline;
}
.desc{
    float: left;
    margin-left: 1em;
}

.show {
    border: 1px solid black;
    margin-top: 0;
}
.try{
  background-color: #4CAF50;
  border: none;
  border-radius: 10px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
  margin-top: 5px;
  cursor: pointer;
}
</style>
</head>
<!--Ende des Kopfes-->

<!--Begin des Körpers-->
<body>
    <form method="POST">
        <!--Der Heder -->
        <div class="header">
            <h1>CSS-Einführung</h1>
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
                    <img  style="width: 80%; margin-left:70px;border-bottom: 1px solid red" src="Die Bilder/CSS.png" alt="CSS Foto">
                    <ul class="lists">
                        <a href="CSS-Einführung.php"><li>CSS - Einführung</li></a>
                        <a href="CSS-Kurs-Subfiles/Farben.php"><li>CSS - Farben</li></a>
                        <a href="CSS-Kurs-Subfiles/Margin.php"><li>CSS - Margin</li></a>
                        <a href="CSS-Kurs-Subfiles/Border.php"><li>CSS - Border</li></a>
                        <a href="CSS-Kurs-Subfiles/Position.php"><li>CSS - Position</li></a>
                        <a href="CSS-Kurs-Subfiles/Display.php"><li>CSS - Display</li></a>
                        <a href="CSS-Kurs-Subfiles/Font.php"><li>CSS - Font</li></a>
                    </ul>
                </div>
            </div>
            
<!-- Die Inhalt des Körper der Seiten -->
        <div class="körper">
        <div class="fragen">
            <h2>Was ist CSS?</h2>
            <p><b>CSS</b> (Cascading Style Sheets) ist eine Sprache, die verwendet wird, um den visuellen Stil von HTML-Elementen auf einer Webseite zu beschreiben.</p>

            <h2>Was ist der Zweck von CSS?</h2>
            <p>Der <b>Zweck</b> von CSS besteht darin, zu definieren, wie HTML-Elemente auf einer Webseite dargestellt werden sollen, z. B. ihre Farben, Schriftarten, ihr Layout und ihre Animationen.</p>
        </div>
        <div class="implementieren">
            <h2>Wie implementiert man CSS?</h2>

            <strong style="margin-left: 0.5em;">Methode 1.&rpar;</strong> Styles in head einfügen<br>
            
            
            <!-- Ich wollte IDs verwenden, um jeden <span> als Farbe zu identifizieren -->
            <!-- aber das hat nicht funktioniert, deshalb gibt es so viel inline styling-->
            <div class="code-box" >
            <pre><code style="background-color: whitesmoke;display: inline-block">&lt;<span style="color: rgba(228,86,73,255)">head</span>&gt;
    &lt;<span style="color: rgba(228,86,73,255)">style</span>&gt;
        <span style="color: rgba(80,161,79,255)">body</span> {
        <span style="color: rgba(80,161,79,255)">font-family</span>: Arial, sans-serif;
        <span style="color: rgba(80,161,79,255)">background-color</span>: <span style="color: rgba(195,149,62,255)">#f2f2f2</span>;
        }
            
        <span style="color: rgba(228,86,73,255)">h1</span> {
        <span style="color: rgba(80,161,79,255)">color</span>: blue;
        <span style="color: rgba(80,161,79,255)">font-size</span>: <span style="color: rgba(195,149,62,255)">24px</span>;      
        <span style="color: rgba(80,161,79,255)">text-align</span>: center;
        }
    &lt;/<span style="color: rgba(228,86,73,255)">style</span>&gt;
&lt;/<span style="color: rgba(228,86,73,255)">head</span>&gt;
</code></pre>
</div><br><br>

            <strong style="margin-left: 0.5em;">Methode 2.&rpar;</strong> Laden aus einer Datei<br>
            <div class="code-box">
            
            <pre><code style="background-color: whitesmoke;display: inline-block">&lt;<span style="color: rgba(228,86,73,255)">head</span>&gt;
    &lt;<span style="color: rgba(228,86,73,255)">link</span> <span style="color: rgba(195,149,62,255)">rel</span>=<span style="color: rgba(80,161,79,255)">"stylesheet"</span> <span style="color: rgba(195,149,62,255)">type</span>=<span style="color: rgba(80,161,79,255)">"text/css"</span> <span style="color: rgba(195,149,62,255)">href</span>=<span style="color: rgba(80,161,79,255)">"styles.css"</span>&gt;
&lt;/<span style="color: rgba(228,86,73,255)">head</span>&gt;</code></pre></div>
    </div>

    <br><br>
    <div class="syntax">
        <h2>Syntax von CSS sieht so aus</h2>
    <img src="Die Bilder/CSS Syntax.png" alt="CSS Syntax Foto">
    </div><br>
    <div class="code-beispiele">


    

33333333333333333333333333333333333333333333


    <div class="selektor-absatz">
    <pre><code style="display: inline-block; background-color:whitesmoke">&lt;<span style="color: rgba(228,86,73,255)">html</span>&gt;
  &lt;<span style="color: rgba(228,86,73,255)">head</span>&gt;
    &lt;<span style="color: rgba(228,86,73,255)">meta</span> charset="<span style="color: rgba(80,161,79,255)"><span style="color: rgba(80,161,79,255)">UTF-8</span></span>"&gt;
    &lt;<span style="color: rgba(228,86,73,255)">title</span>&gt;CSS Beispiel&lt;/<span style="color: rgba(228,86,73,255)">title</span>&gt;
    &lt;<span style="color: rgba(228,86,73,255)">style</span>&gt;      
      /* Selektor für alle Absätze */
      <span style="color: rgba(228,86,73,255)">p</span> {
        <span style="color: rgba(80,161,79,255)">font-size</span>: <span style="color: rgba(195,149,62,255)"><span style="color: rgba(195,149,62,255)">20px</span></span>;
        <span style="color: rgba(80,161,79,255)">color</span>: blue;
      }
    &lt;/<span style="color: rgba(228,86,73,255)">style</span>&gt;
  &lt;/<span style="color: rgba(228,86,73,255)">head</span>&gt;

  &lt;<span style="color: rgba(228,86,73,255)">body</span>&gt;
    &lt;<span style="color: rgba(228,86,73,255)">h1</span>&gt;CSS Beispiel&lt;/<span style="color: rgba(228,86,73,255)">h1</span>&gt;
    &lt;<span style="color: rgba(228,86,73,255)">p</span>&gt;Das ist ein Absatz.&lt;/<span style="color: rgba(228,86,73,255)">p</span>&gt;
  &lt;/<span style="color: rgba(228,86,73,255)">body</span>&gt;
&lt;/<span style="color: rgba(228,86,73,255)">html</span>&gt;</code></pre>
<div class="desc">
    <h3>Das ist ein Beispiel zum Bearbeiten eines Absatz-Tags</h3>

    <b><i>So würde dieser Code als Webseite aussehen</b></i>
    <div class="show">
    <h1 style="font-size: larger;">CSS Beispiel</h1>
    <span style="font-size: 16px!important;color: blue;">Das ist ein Absatz.</span>
    </div><br>
    <p style="margin-left: 0;">In diesem Beispiel wählen wir das zu bearbeitende Tag <b>p</b> aus,
    ändern dann die Schriftgröße auf 20 Pixel und lassen die Farbe des Textes blau erscheinen.<br><br>
    
    <p style="margin-left: 0; color: chocolate">Es ist gut zu wissen, dass Sie Kommentare in CSS mit <span style="background-color: whitesmoke;padding: 0 5px"><b><i>/* Kommentar */</i></b></span> hinterlassen können.</p>
    <p style="margin-left: 0;margin-top: -0.75em; color: red">Beachten Sie, dass Sie bei Verwendung des <b>&lt;style&gt;</b> Tags dieses innerhalb eines <b>&lt;head&gt;</b> Tags einfügen müssen</p>
</p><a href="selbst_versuch_css.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
    

</div>
</div>







<!--  -->
<div class="selektor-class">
<pre><code style="display: inline-block; background-color:whitesmoke">&lt;<span style="color: rgba(228,86,73,255)">html</span>&gt;
  &lt;<span style="color: rgba(228,86,73,255)">head</span>&gt;
    &lt;<span style="color: rgba(228,86,73,255)">meta</span> charset="<span style="color: rgba(80,161,79,255)">UTF-8</span>"&gt;
    &lt;<span style="color: rgba(228,86,73,255)">title</span>&gt;CSS Beispiel&lt;/<span style="color: rgba(228,86,73,255)">title</span>&gt;
    &lt;<span style="color: rgba(228,86,73,255)">style</span>&gt;      
      /* Selektor für ein Class */
      <span style="color: rgba(195,149,62,255)">.mein-class</span> {
        <span style="color: rgba(80,161,79,255)">font-size</span>: <span style="color: rgba(195,149,62,255)">20px</span>;
        <span style="color: rgba(80,161,79,255)">color</span>: red;
      }
    &lt;/<span style="color: rgba(228,86,73,255)">style</span>&gt;
  &lt;/<span style="color: rgba(228,86,73,255)">head</span>&gt;

  &lt;<span style="color: rgba(228,86,73,255)">body</span>&gt;
    &lt;<span style="color: rgba(228,86,73,255)">h1</span>&gt;CSS Beispiel&lt;/<span style="color: rgba(228,86,73,255)">h1</span>&gt;
    &lt;<span style="color: rgba(228,86,73,255)">p</span> class="<span style="color: rgba(195,149,62,255)">mein-class</span>"&gt;Das ist ein Absatz.&lt;/<span style="color: rgba(228,86,73,255)">p</span>&gt;
  &lt;/<span style="color: rgba(228,86,73,255)">body</span>&gt;
&lt;/<span style="color: rgba(228,86,73,255)">html</span>&gt;</code></pre>
<div class="desc">
<h3>Dies ist ein Beispiel für die Bearbeitung einer Klasse</h3>
    <div class="show">
    <h1 style="font-size: larger;">CSS Beispiel</h1>
    <span style="font-size: 16px!important;color: red;">Das ist ein Absatz.</span>
    </div> 
    <p style="margin-left: 0">In diesem Beispiel wählen wir statt eines <b>p</b> Tags eine Klasse namens „mein-class“ aus. <br><br>Wann immer wir nun einem Element die Eigenschaft von "mein-class" geben, hat dieses Element die CSS-Eigenschaften, die wir ihm zuweisen. <br><br>Auf diese Weise können wir mehreren Elementen genau das gleiche Styling geben.</p>
    </p><a href="selbst_versuch_css.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>
</div>
</div>










<!--  -->
<div class="selektor-absatz-in-class">
<pre><code style="display: inline-block; background-color:whitesmoke">&lt;<span style="color: rgba(228,86,73,255)">html</span>&gt;
  &lt;<span style="color: rgba(228,86,73,255)">head</span>&gt;
    &lt;<span style="color: rgba(228,86,73,255)">head</span> charset="UTF-8"&gt;
    &lt;<span style="color: rgba(228,86,73,255)">title</span>&gt;CSS Beispeil&lt;/<span style="color: rgba(228,86,73,255)">title</span>&gt;
    &lt;<span style="color: rgba(228,86,73,255)">style</span>&gt;      
      /* Selektor für ein Absatz in ein Class */
      <span style="color: rgba(228,86,73,255)"><span style="color: rgba(195,149,62,255)">.mein-class </span>p</span> {
        <span style="color: rgba(80,161,79,255)">font-size</span>: <span style="color: rgba(195,149,62,255)">20px</span>;
        <span style="color: rgba(80,161,79,255)">color</span>: pink;
      }
    &lt;/<span style="color: rgba(228,86,73,255)">style</span>&gt;
  &lt;/<span style="color: rgba(228,86,73,255)">head</span>&gt;

  &lt;<span style="color: rgba(228,86,73,255)">body</span>&gt;
  &lt;<span style="color: rgba(228,86,73,255)">div</span> class="<span style="color: rgba(195,149,62,255)">mein-class</span>"&gt;
    &lt;<span style="color: rgba(228,86,73,255)">h1</span>&gt;CSS Beispiel&lt;/<span style="color: rgba(228,86,73,255)">h1</span>&gt;
    &lt;<span style="color: rgba(228,86,73,255)">p</span>&gt;Das ist ein Absatz.&lt;/<span style="color: rgba(228,86,73,255)">p</span>&gt;
    &lt;/<span style="color: rgba(228,86,73,255)">div</span>&gt;
  &lt;/<span style="color: rgba(228,86,73,255)">body</span>&gt;
&lt;/<span style="color: rgba(228,86,73,255)">html</span>&gt;</code></pre>
<div class="desc">
<h3>Dies ist ein Beispiel für die Bearbeitung eines Absatzes innerhalb einer Klasse</h3>
    <div class="show">
    <h1 style="font-size: larger;">CSS Beispiel</h1>
    <span style="font-size: 16px!important;color: pink;">Das ist ein Absatz.</span>
    </div> 
    <p style="margin-left: 0">In diesem Beispiel zielen wir speziell auf ein <b>p</b> Tag innerhalb einer <b>„mein-class“</b> Klasse ab.<br><br>
    Dies bedeutet, dass kein anderes <b>p</b> oder irgendein anderes Element innerhalb der "mein-class" Klasse betroffen ist, abgesehen von einem <b>p</b>, das sich innerhalb dieser Klasse befindet.<br><br>
    Damit können wir ein gründlicheres Styling üben.</p>
    </p><a href="selbst_versuch_css.php" target="_blank"><input class="try" type="button" name="try" value="Versuchen Sie selbst"></a>

</div>
</div>








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