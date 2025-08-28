<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>HTML Editor</title>
    <style>
      /* body{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}*/

body{
    height: 100vh;
}
.container{
    display: flex;
    flex-direction: column;
    width: 50%;
    height: 30%;
    margin: 3px;
    float:left;

}
.container textarea {
    border:1px solid #0dddf0;
    font-size: 1.4rem;
    resize:none
}
.container textarea:focus {
    outline: none;
}
button{
    display: inline-block;
    color: #666;
    background-color: #f4f4f4;
    border: 1px dotted #ccc;
    padding: 6px 13px;
    width:20%;
}

h1{
    text-align:center
}
.containt{
    float:right;
    border: 1px solid #0dddf0;
    width: 40%;
    height: 81.2%;
    margin-right:50px;
    text-align:left;
    padding:10px;
    font-size: 1.4rem;

}

    </style>
</head>
<body>

    <h1>HTML Editor</h1>

    <form method="post">

        <div class="container">
                <textarea name="content" placeholder="Geben Sie Ihre HTML Code ein:"  rows="29px" ></textarea><br>
                <button>Shicken</button>
        </div>
        <div class="button">
            
        </div>
        
        
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>

        <div class="containt"><?= $_POST['content'] ?></div>

    <?php endif; ?>

    <?php
        /*
            Die erste Zeile "<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>" öffnet die Bedingung und prüft, ob die HTTP-Anforderungsmethode "POST" ist. Diese Bedingung wird nur ausgeführt, wenn der Benutzer ein Formular auf der Webseite eingereicht hat, das mit der "POST"-Methode übermittelt wurde.

            In der zweiten Zeile wird ein div-Container mit der Klasse "containt" ausgegeben.

            Der Inhalt des div-Containers wird mit dem Wert des Formularfeldes "content" gefüllt, das mit der "POST"-Methode übermittelt wurde. Das Formularfeld wird mit dem $_POST-Superglobal abgerufen, der die mit der "POST"-Methode übermittelten Formulardaten enthält.

            Die letzte Zeile "<?php endif; ?>" schließt die Bedingung.
        */
    ?>

</body>
</html>