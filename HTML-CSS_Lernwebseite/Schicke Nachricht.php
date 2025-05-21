<?php
//Include required PHPMailer files
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
	//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

if (!empty($_POST["submit"])){ 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$bettref = $_POST['subject'];
    $text = $_POST["message"];
	//Create instance of PHPMailer
		$mail = new PHPMailer();
	//Set mailer to use smtp
		$mail->isSMTP();
	//Define smtp host
		$mail->Host = "smtp.gmail.com";
	// unterstütze deutsche Sprahce
	    $mail->setLanguage('de');
	//Enable smtp authentication
		$mail->SMTPAuth = true;
	//Set smtp encryption type (ssl/tls)
		$mail->SMTPSecure = "tls";
	//Port to connect smtp
		$mail->Port = "587";
	//Set gmail username
		$mail->Username = "Obay.albeek@gmail.com";
	//Set gmail password
		$mail->Password = "rfpjqehacvvkzdjg";
	//Email subject
		$mail->Subject = $bettref;
	//Set sender email
		$mail->setFrom($email,$name);
	//Enable HTML
		$mail->isHTML(true);
	//Email body
	    $mail->Body = $text;
	//Add recipient
		$mail->addAddress('Obay.albeek@gmail.com');
	//Finally send email
    if ($mail->send()){
         echo "<script>alert('Ihre E-Mail wurde mir gesendet.');</script>";
    }
       		
	//Closing smtp connection
		$mail->smtpClose();
	}
?>