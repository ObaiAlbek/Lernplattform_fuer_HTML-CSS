<?php include_once("Datenbanken.php"); ?>
<?php
// Dies ist der Code, der ausgeführt wird, wenn ein Benutzer auf den Link zur Passwortwiederherstellung klickt, der ihm per E-Mail zugesandt wurde.


// Dieser Code funktioniert, indem der Benutzer auf einen Link wie 'http://localhost/reset_password.php?key=NloKrXiqa03NulUP' klickt. Durch Klicken auf diesen Link wird eine GET-Request 
// an reset_password.php mit dem Attribut key=NloKrXiqa03NulUP gesendet.

// Das 'key' attribut wird dann überprüft, ob es genau 16 Zeichen lang ist.
// Dann holen wir uns E-Mail, neues_Passwort, Schlüssel und Token, wo der bereitgestellte key übereinstimmt, wenn keine Übereinstimmungen gefunden werden, führen wir exit() aus.

// Außerdem prüfen wir, ob die aktuelle session_id mit der session_id übereinstimmt, bei der die Anfrage zum Zurücksetzen des Passworts gestellt wurde, 
// wenn dies nicht der Fall ist, wird die Anfrage aus Sicherheitsgründen abgelehnt.

// Wenn alle Überprüfungen validiert sind, erhalten wir das 'new_password' aus der Datenbank, hashen es und ersetzen es durch das alte Passwort, wenn die E-Mails übereinstimmen. 
// Wir löschen auch die Zeile, in der sich das key und das Token befanden.

// Endlich haben wir ein Popup von Javascript gesendet, das den Benutzer darauf hinweist, dass das Zurücksetzen des Passworts erfolgreich war, und dann leiten wir den Benutzer zu Anmelden.php um.

session_start();

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $key = $_GET['key'];

    // Falsche länge der key, key muss imer 16 Zeichen lang sein
    if (strlen($key) != 16) {
        exit("");
    }
    
    // Nimm email und neue passwort von datenbank von der Spalte wo der gegebene key passt.
    // $ergebnis is ein array ["email": email, "new_password": neue_password]
    $stmt = $dbh->prepare("SELECT email, new_password, token FROM `password-reset` WHERE key_=?");
    $stmt->execute([$key]);
    $ergebnis = $stmt->fetch();
    
    // Wenn $ergebnis leer ist (falscher key wurde angegeben) 
    // oder die aktuelle "session_id" nicht mit der übereinstimmt, die die Request zum Zurücksetzen des Passworts gestellt hat.
    if (!$ergebnis) exit("Bitte klicken Sie auf den Link von dort, wo Sie die Anfrage zum Zurücksetzen des Passworts gestellt haben");
    if ($ergebnis['token'] != session_id()) exit("");

    $email = $ergebnis['email'];
    $neue_passwort = $ergebnis['new_password'];
    $hash = password_hash($neue_passwort, PASSWORD_DEFAULT);
    

    // Ändert das alte Passwort in das neue Passwort
    $stmt = $dbh->prepare("UPDATE registration SET password=? WHERE email=?");
    $stmt->execute([$hash, $email]);

    // Löscht die Zeile, in der sich das key und das Token befanden.
    $stmt = $dbh->prepare("DELETE FROM `password-reset` WHERE email = ?");
    $stmt->execute([$email]);
      
    echo "<script>alert('Erfolgreich passwort zurückgesetzt');</script>";
    header("Location: Anmelden.php");
    }

?>