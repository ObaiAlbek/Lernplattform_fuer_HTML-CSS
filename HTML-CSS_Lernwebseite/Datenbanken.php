<?php
    $server="mysql:host=localhost;dbname=anmelden";
    $user="root";
    $pw="";

    $dbh= new PDO($server,$user,$pw); 
    if(!$dbh){
        echo "Verbindung Fehlgeschlagen";
    }
?>