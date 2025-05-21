<?php include 'datenbanken.php'; ?>
<?php session_start();?>
<?php
    if (!isset($_SESSION['css_punktzahl'])){ 
        $_SESSION['css_punktzahl'] = 0;
    } 

    if ($_POST){
        $nummer = $_POST['nummer'];
        $ausgewählte_wahl = $_POST['auswahl'];
        $nächste = $nummer+1;

        // Gesamte fragen
        $query = "SELECT * FROM fragen";
        
        // Ergebnisse
        $ergebnisse = $dbh->query($query);
        $total = $ergebnisse->rowCount();

        // Richtige Auswahl
        $query= "SELECT * FROM auswahlmöglichkeiten WHERE fragen_nummer = $nummer AND ist_richtig = 1";

        // Ergebnisse
        $ergebnis = $dbh->query($query);

        // Zeilen
        $row = $ergebnis->fetch();

        // Setze die richtige Auswahl
        $richtige_auswahl = $row['id'];

        // Vergleich
        if($richtige_auswahl == $ausgewählte_wahl){
        
        // Antwort richtig
        $_SESSION['css_punktzahl'] +=1;
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