<?php
$server="mysql:host=localhost;dbname=quiz_fragen";
$user="root";
$pw="";

$dbh= new PDO($server,$user,$pw); 
if(!$dbh){
	echo "Verbindung Fehlgeschlagen";
}

    

?>