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

    <title>CSS-Position</title>
    <style>

.navbar.profile {
    display: none;
}

.navbar .profile .profile2 {
    display: none;
}

.navbar .profile:hover .profile2 {
    display: block;
    position: absolute;
    margin-top: 15px;
    margin-left: -15px;
    background-color: #01d28e !important;
    width: 30%;
    text-align: justify;
    padding: 15px;
    color: #ffffff !important;
    border-radius: 1%;
}

.navbar .profile .profile2 strong {
    color: black;
    font-weight: bolder;
}

.border {
    border-bottom: 1.2px solid gray;
}

.intro {
    margin: 0;
}


span{
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


.content-beispiel {
    border: 1.2px solid black;
}

.abs-container {
  position: relative;
  width: 150px;
  height: 200px;
  border: 1px solid black;
}


.abs-container img {
  position: absolute;
  top: 50px;
  left: 50px;
}

.abs-content {
    position: relative;
    width: 35%;
}

.absolute {
    position: relative;
    left: -11%;
}

.rel-content {
    position: relative;
    width: 35%;
}

.rel-container {
    background-color: whitesmoke;
    border: 1.2px solid black;
}

.relative {
    position: relative;
    left: -7.9%;
}

.rel-container img {
    position: relative;
    left: 100px;
    top: 5px;
}


.scroll-box {
  height: 150px;
  width: 400px;
  overflow-y: scroll;
  scrollbar-gutter: stable both-edges;
}

.scroll-box::-webkit-scrollbar {
  width: 10px;
  height: 155px;
}

.scroll-box::-webkit-scrollbar-thumb {
  background-color: gray;
  border-radius: 2px;
}


.fix-container {
    background-color: whitesmoke;
    border: 1.2px solid black;
}

.fix-content {
    width: 35%;
    left: -11%;
}


.sticky-text {
  position: sticky;
  top: 0;
  background-color: #f2f2f2;
  padding: 10px 0;
  background-color: aquamarine!important;
}

.sti-container {
  border: 1.2px solid black;
  background-color: whitesmoke;
  position: relative;
  left: 20px;

}

.sti-content {
    position: relative;
    width: 37.5%;
    left: 15px;
}

    </style>
</head>
<!--Ende des Kopfes-->

<!--Begin des Körpers-->
<body>
    <form method="POST">
        <!--Der Heder -->
        <div class="header">
            <h1>CSS-Position</h1>
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

        <p><b>CSS Position</b></p>
        <div class="intro">
            <p>Die Positionseigenschaft gibt an, wie ein Element positioniert wird.</p>
            <p>Der Standardwert für Position ist <span>static</span>.</p>
            <p style="margin-bottom: 1em">Um <span>position</span> zu nutzen, verwenden Sie `<span>left</span>, <span>right</span>, <span>top</span> und <span>bottom</span>` eigenschaften.</p>
        </div>

        <div class="border"></div>

        <div class="beispiele">
        <p style="margin-bottom: 0">Position hat 5 Werte:</p>
        <ul style="margin-top: 0">
            <li>static</li>   
            <li>absolute</li>
            <li>relative</li>
            <li>fixed</li>
            <li>sticky</li>
        </ul></div>

        <div class="border"></div>

        <div class="name">STATIC</div>
        <div class="content">
            <div>
                <p style="margin:0">Static ist der Standardwert.</p>
                <p style="margin:0">Es wird nichts geändert.</p>

            </div>
            <div class="content-beispiel">Das ist eine <span>static</span> Position.</div>
        </div>
        <div class="border"></div>





        <div class="name">RELATIVE</div>
        <div class="relative">
        <div class="content">

            <div class="rel-content">
                <span>position: relative</span> positioniert das Element relativ zu seiner Standardposition auf der Seite.
                <p>Das schwarze Dreieck wird mit <span>left: 100px</span> 100px links von der linken Seite positioniert.</p>
                <p>Standardmäßig wird es unten links im grauen Feld positioniert.</p>
            </div>
            <div class="rel-container">
                <p style="margin:0">Das ist eine <span>relative</span> Position</p>
                <img src="../Die Bilder/Position_Bild.png" alt="Bild..." width="150" height="150">
            </div>
        </div></div>

        <div class="border"></div>





        <div class="name">ABSOLUTE</div>
        <div class="absolute">
            <div class="content">
                <div class="abs-content">
                    Das Bild eines schwarzen Dreiecks wird absolut innerhalb eines <span>relativen</span> Containers mit einem <span>links: 50px</span> positioniert.
                </div>

            <div class="abs-container">
                <p style="margin:0">Das ist eine <span>absolute</span> Position</p>
                <img src="../Die Bilder/Position_Bild.png" alt="Bild..." width="150" height="150">
            </div>
    </div></div>

        <div class="border"></div>

        <div class="name">FIXED</div>
        <div class="content">

            <div class="fix-content">
                <p>Ein Element mit <span>position: fixed</span> bleibt an der gleichen Position, auch wenn der Benutzer von seiner ursprünglichen Position wegscrollt.</p>
            </div>
            <div class="fix-container">
            <div>
                <div style="background-color: aquamarine!important; padding: 10px 0;"><span>Das ist eine fixed position</span></div>
                <div class="scroll-box">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit odio et nisi interdum lacinia. Suspendisse nec vestibulum est. Proin consectetur auctor turpis, vel malesuada sapien volutpat vel. Nullam eu velit eu ex finibus pulvinar. Vestibulum in enim in ex feugiat luctus. Sed id massa id augue scelerisque bibendum. Sed malesuada, odio sit amet hendrerit placerat, tellus tortor venenatis diam, a volutpat leo ante vel magna.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit odio et nisi interdum lacinia. Suspendisse nec vestibulum est. Proin consectetur auctor turpis, vel malesuada sapien volutpat vel. Nullam eu velit eu ex finibus pulvinar. Vestibulum in enim in ex feugiat luctus. Sed id massa id augue scelerisque bibendum. Sed malesuada, odio sit amet hendrerit placerat, tellus tortor venenatis diam, a volutpat leo ante vel magna.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit odio et nisi interdum lacinia. Suspendisse nec vestibulum est. Proin consectetur auctor turpis, vel malesuada sapien volutpat vel. Nullam eu velit eu ex finibus pulvinar. Vestibulum in enim in ex feugiat luctus. Sed id massa id augue scelerisque bibendum. Sed malesuada, odio sit amet hendrerit placerat, tellus tortor venenatis diam, a volutpat leo ante vel magna.</p>
                </div>
            </div>
            </div>
        </div>





        <div class="border"></div>

        <div class="name">STICKY</div>
        <div class="content">

            <div class="sti-content">
                Ein Element mit <span>position: sticky</span> wird statisch angezeigt, bis der Benutzer unter das Element scrollt, wo es am oberen Rand des übergeordneten Containers haftet.
            </div>
            <div class="sti-container">
            <div class="inner-container">                    
                <div class="scroll-box">
                    
                    <div class="inner-content">
                    <p>Lorem ipsum</p>
                    <p class="sticky-text">Das ist eine sticky position</p>
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum</p>
                    </div>
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