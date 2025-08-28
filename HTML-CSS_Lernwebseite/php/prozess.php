<?php include 'datenbanken.php'; ?>
<?php session_start();?>
<?php
    if (!isset($_SESSION['punktzahl'])){ 
        $_SESSION['punktzahl'] = 0;
    } 

    if ($_POST){
        $nummer = $_POST['nummer'];
        $ausgewählte_wahl = $_POST['auswahl'];
        $nächste = $nummer+1;

        //gesamte fragen
        $query = "SELECT * FROM fragen";
            //Ergebnisse
        $ergebnisse = $dbh->query($query);
        $total = $ergebnisse->rowCount();

        //richtige Auswahl
        $query= "SELECT * FROM auswahlmöglichkeiten
                    WHERE fragen_nummer = $nummer AND ist_richtig = 1";

        //Ergebnisse
        $ergebnis = $dbh->query($query);

        // Zeilen
        $row = $ergebnis->fetch(PDO::FETCH_ASSOC);

        //setze die richtige Auswahl
        $richtige_auswahl = $row['id'];

        //vergleich
        if($richtige_auswahl == $ausgewählte_wahl){
            //Antwort richtig
            $_SESSION['punktzahl'] +=1;
        }

        // Überprüfe, ob die Letzte Frage
        if ($nummer == $total){
            header("Location: schluss.php");
            exit();
        }else{
            header("Location: fragen.php?n=".$nächste);
        }
    }
?>