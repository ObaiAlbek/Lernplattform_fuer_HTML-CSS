<?php include 'datenbanken.php'; ?>
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/für den Test.css">
    <title>Endstand</title>
</head>
<body>
    <header> 
        <div class="container">
            <h1>CSS Quiz-Fragen</h1>
        </div>
    </header>
    <main>
        <div class="container">

            <?php 
               
                if ($_SESSION["css_punktzahl"] >= 10){
                    echo " <h2>Perfekt!</h2>
                    <p>Sie haben den Test geschaft.</p>";
                    echo"<p>Endstand: ".$_SESSION['css_punktzahl']."/12 Punkte"."</p>
                    <a href='../Die CSS Zertifikat.php' class='zertifikat'>Zertifikat</a>";
                 }else{
                    echo "
                        <h2>Erfolgloser Test</h2>
                        <p>Sie haben den CSS Test leider nicht geschafft.</p>
                        <p>Endstand: ".$_SESSION['css_punktzahl']."</p>
                        <a href='fragen.php?n=1' class='start'>Nochmal Testen</a>
                    ";
                 }

                 // Punkte zurücksetzen
                 $_SESSION['css_punktzahl'] = 0;
          
            ?>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>Urheberrechte 2023 &copy; OV-Codeschule</p>   
        </div>
    </footer>

    
</body>
</html>