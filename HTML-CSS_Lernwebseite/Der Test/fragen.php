<?php include 'datenbanken.php';?>
<?php session_start();?>

<?php
    //Frage Nummer 1
    $nummer = (int) $_GET['n'];

    //gesamte fragen
    $query = "SELECT * FROM fragen";


    //Ergebnisse
    $ergebnisse = $dbh->query($query);
    $total = $ergebnisse->rowCount();

    $query = "SELECT * FROM fragen
                WHERE fragen_nummer = $nummer";
    $ergebnisse = $dbh->query($query);
    $frage = $ergebnisse->fetch(PDO::FETCH_ASSOC);

    //Auswahlen

    $query = "SELECT * FROM auswahlmöglichkeiten
                WHERE fragen_nummer = $nummer";
    
    //Ergebnise
    $auswahlen = $dbh->query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/für den Test.css">
    <title>Quiz-Fragen</title>
</head>
<body>
    <header> 
        <div class="header">
            <h1>HTML Quiz-Fragen</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="current"> Frage <?php echo $frage['fragen_nummer']; ?> von <?php echo $total; ?></div>
            <p class="question">
                <?php echo $frage['text'];?>
            </p>
            <form method="post" action="prozess.php">
                <ul class="auswahlen">
                    <?php while($row = $auswahlen->fetch(PDO::FETCH_ASSOC)): ?>
                        <li><input id="fragen" name="auswahl" type="radio" value="<?php echo $row['id'];?>" /><?php echo"<label for='fragen' style='width :auto'>". $row['text']."</label>";?></li>
                    <?php endwhile;?>
                </ul>
                <input class="submit" type="submit" value="Nächste"/>
                <input type="hidden" name="nummer" value="<?php echo $nummer; ?>" />
            </form>
    </main>
    <footer>
        <div class="container">
        <p>Urheberrechte 2023 &copy; OV-Codeschule</p>   
        </div>
    </footer>

    
</body>
</html>