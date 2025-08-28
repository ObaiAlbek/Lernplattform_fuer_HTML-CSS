<?php include("../Datenbanken.php");?>
<?php include_once ("../Schicke Nachricht.php");?>

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
    <title>CSS-Display</title>
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

          .border {
    border-bottom: 1.2px solid gray;
}

span {
    color: red;
}

.beispiele ul {
    display: inline-block;
    background-color: whitesmoke;
    border-left: 4px solid red;
    padding: 5px 30px;
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

@media only screen and (max-width: 600px) {
  .content {
    flex-direction: column;
  }
}

.block-content {
    width: 55%;
}

.block-container p {
    display: block;
    margin: 0;
    padding: 2px 2px
}

.block-container {
    border: 1.2px solid black;
}

.block {
    position: relative;
}

.inline-block-container {
    border: 1.2px solid black
}

.none-content {
    width: 90%;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;

}

.flex-content {
    width: 60%;
}

.flex-container {
    border: 1.2px solid black;
    width: 30%;
}

.inner-flex-container {
  display: flex;
  justify-content: space-evenly;
  background-color: aquamarine;
}

.flex-block {
  background-color: lightgray;
}

.grid-content {
    width: 45%;
}

.grid-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: repeat(2, 100px);
  grid-gap: 10px;
  border: 1.2px solid black;
  padding: 3px;
}

.grid-block {
  background-color: #ddd;
  padding: 20px;
}

.table-content{
    width: 45%;
}

.table-container {
  display: table;
  width: 55%;
  border-collapse: collapse;
}

.table-zeile {
  display: table-row;
}

.table-cell {
  display: table-cell;
  padding: 8px;
  border: 1px solid #ccc;
}

    </style>
</head>
<!--Ende des Kopfes-->

<!--Begin des Körpers-->
<body>
    <form method="POST">
        <!--Der Heder -->
        <div class="header">
            <h1>CSS-Display</h1>
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
    
        <p><b>CSS Display</b></p>
        <div class="intro">
            <p>Display wird verwendet, um das Layout einer Website zu steuern.</p>
        <div class="beispiele">
            <p style="margin-bottom: 0">Display hat 9 Werte:</p>
            <ul style="margin-top: 0">
                <li>block</li>   
                <li>inline & inline-block</li>
                <li>none</li>
                <li>inline-flex & flex</li>
                <li>inline-grid & grid</li>
                <li>table</li>
            </ul>
        </div>
        </div>

        <div class="border"></div>

        <div class="name">BLOCK</div>
        <div class="block">
        <div class="content">
        <div class="block-content">
            <p>Block ist der Standardwert für das Eigenschaft <span>display</span>.</p>
            <p><span>Block</span> Elementen werden untereinander gestapelt und nehmen so viel Platz wie möglich in ihrem übergeordneten Container ein.</p>
        </div>
        
        <div class="block-container">
            <p style="background-color: aquamarine;">Das ist ein Absatz mit <span>display: block</span></p>
            <p style="background-color:#01d28e;">Das ist ein Absatz mit <span>display: block</span></p>
        </div>
        </div>
        </div>
        <div class="border"></div>




        <div class="name">INLINE & INLINE-BLOCK</div>
        <div class="content">
        <div class="inline-block-content">
            <p><span>inline</span>-Elemente werden in der gleichen Zeile angezeigt und nehmen nur so viel Platz wie nötig ein, können aber nicht durch <span>width, margin, padding usw.</span> manipuliert werden.</p>
            <p><span>inline-block</span>-Elemente werden ebenfalls in derselben Zeile angezeigt, nehmen aber so viel Platz wie möglich ein.</p>
        </div>
        
        <div class="inline-block-container">
            <p>Das ist ein Beispiel Satz mit einem <span style="display: inline">inline element</span> und einem <span style="display: inline-block; margin-left: 10px">inline-block</span> element mit <span>margin-left: 10px</span></p>
        </div>
        </div>

        <div class="border"></div>
    


        
        <div class="name">NONE</div>
        <div class="content">
        <div class="none-content">
            <p>Elemente mit <span>display: none</span> werden einfach nicht angezeigt.</p>
            <p>Diese Option wird oft mit Javascript kombiniert, um ein Element beim Klicken auf einer Button anzuzeigen.</p>
        </div>

        </div>
        <div class="border"></div>




        
        <div class="name">INLINE-FLEX & FLEX</div>
        <div class="content">
        <div class="flex-content">
            <p>Ein Element mit <span>display: flex</span> (normalerweise ein div) ermöglicht, dass sein untergeordnetes Elementen im gesamten Container flexibel gestreckt/geschrumpft/beabstandet/positioniert werden kann.</p>
            <p>Ein Element mit <span>display: inline-flex</span> macht dasselbe wie normales flex, nutzt aber nur die minimale Breite.</p>
            <p style="background-color: whitesmoke; display: inline-block; padding: 15px">In beiden Beispielen sind alle 3 Blöcke auf <span>raumgleich(space-evenly)</span> eingestellt</p>
        </div>
        
        <div class="flex-container">
            <p style="margin: 0; text-align: center; padding: 5px"><span>display: flex</span></p>
            <div class="inner-flex-container">
                <div class="flex-block">Block 1</div>
                <div class="flex-block">Block 2</div>
                <div class="flex-block">Block 3</div>
            </div>
            <div class="border" style="margin-top: 1.25em"></div>
            <p style="margin: 0; text-align: center"><span>display: inline-flex</span></p>
            <div class="inner-flex-container" style="display:inline-flex!important;margin-top: 1em;">
                <div class="flex-block">Block 1</div>
                <div class="flex-block">Block 2</div>
                <div class="flex-block">Block 3</div>
            </div>
        </div>
        </div>
        <div class="border"></div>





        
        <div class="name">INLINE-GRID & GRID</div>
        <div class="content">
        <div class="grid-content">
            <p><span>Grid</span> wird verwendet, um zweidimensionale Layouts zu erstellen, in denen Sie angeben können, wie viele Zeilen und Spalten Sie möchten.</p>
            <p>Es kann verwendet werden, um alles von einfachen bis zu äußerst komplexen Layouts zu erstellen.</p>
            <p style="margin-top:1em; padding: 15px; background-color: whitesmoke; margin-left: 1em">In diesem Beispiel gibt es 3 Spalten mit 2 Elementen mit einer Lücke(gap) von 10 Pixeln.<br>Wenn wir stattdessen <span>inline-grid</span> einfügen würden, wäre die einzige Änderung, dass die Blöcke die Breite des Textes hätten.</p>
        </div>
        
        <div class="grid-container">
            <div class="grid-block">Block 1</div>
            <div class="grid-block">Block 2</div>
            <div class="grid-block">Block 3</div>
            <div class="grid-block">Block 4</div>
            <div class="grid-block">Block 5</div>
            <div class="grid-block">Block 6</div>
        </div>
        </div>
        <div class="border"></div>

    
    
    

        <div class="name">TABLE</div>
        <div class="content">
        <div class="table-content">
            <p>Mit <span>display: table</span> können Sie Tabellen erstellen, die mit den HTML-Tabellen-Tags identisch sind.</p>
            <p>Dies ist nützlich, wenn Sie eine reaktivere Tabelle erstellen müssen.</p>
        </div>
        
        <div class="table-container">
        <div class="table-zeile">
            <div class="table-cell">Zeile 1, Spalte 1</div>
            <div class="table-cell">Zeile 1, Spalte 2</div>
            <div class="table-cell">Zeile 1, Spalte 3</div>
        </div>
        <div class="table-zeile">
            <div class="table-cell">Zeile 2, Spalte 1</div>
            <div class="table-cell">Zeile 2, Spalte 2</div>
            <div class="table-cell">Zeile 2, Spalte 3</div>
        </div>
        <div class="table-zeile">
            <div class="table-cell">Zeile 3, Spalte 1</div>
            <div class="table-cell">Zeile 3, Spalte 2</div>
            <div class="table-cell">Zeile 3, Spalte 3</div>
        </div>
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