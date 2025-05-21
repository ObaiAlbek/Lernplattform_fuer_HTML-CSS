<?php session_start(); ?>

<?php include 'datenbanken.php';?>

<?php  
    //Gesamtfragen bekommen
    $query = "SELECT * FROM fragen";
    $ergebnisse = $dbh->query($query);
    $total = $ergebnisse->rowCount();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/für den Test.css">
    <title>Quiz-Fragen</title>
    <style>
        body{
    font-family: arial;
    font-size: 30px;
    line-height: 1.6em;
}

li{
    list-style: none;
}

a{
    text-decoration: none;
}
label{
    display: inline-block;
    width: 180px;
}
input[type='text']{
    width: 50%;
    padding: 4px;
    border-radius: 5px;
    border: 1px #ccc solid;
}
input[type='number']{
    width: 50px;
    padding: 4px;
    border-radius: 5px;
    border: 1px #ccc solid;

}

.container{
    width: 60%;
    margin: 0 auto;
    overflow: auto;
}

.header {
    padding: 80px;
    text-align: center;
    background: #1abc9c;
    color: white;
    border-bottom: 3px #f4f4f4 solid;

    
}
footer{
    border-top: 3px #f4f4f4 solid ;
    text-align: center;
    padding-top: 5px;
}
main{
    padding-bottom: 20px;
}
a.start{
    display: inline-block;
    color: #666;
    background-color: #f4f4f4;
    border: 1px dotted #ccc;
    padding: 6px 13px;
}
.current{
    padding: 10px;
    background: #f4f4f4;
    border: #ccc dotted 1px;
    margin: 20px 0 10px 0;
    width: 50%;
}
@media only screen and (max-width:960px){ 
    .container{
        width: 80%;
    }
    
}
.submit{
    width: 50px;
    background-color: aqua;
}
    </style>
</head>
<body>
        <div class="header">
            <h1>CSS Quiz-Fragen</h1>
        </div>
    <main>
        <div class="container">
            <h2>Testen Sie Ihr CSS-Wissen</h2>
            <p>Dies ist ein Multiple-Choice-Quiz, um Ihre HTML-Kenntnisse zu testen</p>
            <ul>
                <li><strong>Anzahl der Fragen: </strong><?php echo $total; ?></li>
                <li><strong>Typ: </strong>Mehrfachauswahl</li>
                <li><strong>Geschätzte Zeit: </strong>8 Minuten</li>
            </ul>
            <a href="fragen.php?n=1" class="start">Quiz starten</a>
        </div>
    </main>
    <footer>
        <div class="container">
            URHEBERRECHTE &copy; 2023, OV-CODESCHULE
        </div>
    </footer>

    
</body>
</html>