<?php include 'datenbanken.php';?>
<?php
    if (isset($_POST["submit"])){
        //Variable deklarieren
        $richtige_auswahl = $_POST["richtige_auswahl"];
        $fragen_nummer = $_POST["fragen_nummer"];
        $fragen_text = $_POST["fragen_text"];
        //auswahl Array
        $auswahlen = array();
        $auswahlen[1] = $_POST["auswahl1"];
        $auswahlen[2] = $_POST["auswahl2"];
        $auswahlen[3] = $_POST["auswahl3"];
        $auswahlen[4] = $_POST["auswahl4"];
        $auswahlen[5] = $_POST["auswahl5"];
        
        //fragen query
        $query = "INSERT INTO fragen (fragen_nummer,text)
                    VALUES('$fragen_nummer','$fragen_text')";
        
        //query Ausführen
        $row_eingeben = $mysqli->query($query);

        //Einführung
        if($row_eingeben){
            foreach($auswahlen as $auswahl => $value){
                if($value != ''){
                    if($richtige_auswahl == $auswahl){
                        $ist_richtig = 1;
                    }else{
                        $ist_richtig = 0;
                    }
                    $query = "INSERT INTO auswahlmöglichkeiten (fragen_nummer, ist_richtig, text)
                                VALUES ('$fragen_nummer', '$ist_richtig', '$value' )";
                        
                    //query Ausführen
                    $row_eingeben = $mysqli->query($query);

                    //Einführung
                    if($row_eingeben){
                        continue;
                    }else{
                        die("Fehler:");
                    }
                }

            }
        }
        $nachricht = "Frage wurde hinzugefügt";
    }

    //gesamte Fragen
    $query = "SELECT * FROM fragen";
    // die Ergebnisse
    $fragen = $mysqli->query($query);
    $total = $fragen->num_rows;
    $nächste = $total +1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/für den Test.css">
    <title>Fragen hinzufügen</title>
</head>
<body>
    <header> 
        <div class="container">
            <h1>HTML Quiz-Fragen</h1>
        </div>
    </header>


    <main>
        <div class="container">
            <h2>Frage hinzufügen</h2>
            <form method="post" action="hinzusetzen.php">
                <p>
                    <label>Frage_n: </label>
                    <input type="number" name="fragen_nummer"/>
                </p>
                <p>
                    <label>Fragetext: </label>
                    <input type="text" name="fragen_text"/>
                </p>
                <p>
                    <label>Auswahl #1: </label>
                    <input type="text" name="auswahl1"/>
                </p>
                <p>
                    <label>Auswahl #2: </label>
                    <input type="text" name="auswahl2">
                </p>
                <p>
                    <label>Auswahl #3: </label>
                    <input type="text" name="auswahl3">
                </p>
                <p>
                    <label>Auswahl #4: </label>
                    <input type="text" name="auswahl4">
                </p>
                <p>
                    <label>Auswahl #5: </label>
                    <input type="text" name="auswahl5">
                </p>
                <p>
                    <label>richtig: </label>
                    <input type="number" name="richtige_auswahl">
                </p>
                <p>
                    <input type="submit" name="submit" value="submit" class="submit">
                </p>
            </form>
        </div>
    </main>


    <footer>
        <div class="container">
            Copyright &copy; 2023, HTML Quiz-Fragen
        </div>
    </footer>

    
</body>
</html>