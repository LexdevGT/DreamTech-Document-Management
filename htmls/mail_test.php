<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	use PHPMailer\PHPMailer\SMTP;

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';
	//require 'PHPMailer/connect.php';
/*
	global $conn;

	$mail = new PHPMailer();

	if(isset($_POST['email'])){
	//if(true){
		$email = $_POST['email'];
		//$email = 'bryan.ja@alliedglobal.com';

		if(isset($_POST['name'])){
		//if(true){
			//$name    	= utf8_decode("Alexander");
			$name 		= $_POST['name'];
			if(isset($_POST['message'])){
				$messge = utf8_decode($_POST['message']);	
			}else{
				$messge = '';
			}
			$subject 	= utf8_decode($_POST['subject']);
			$error 		= '';
			try{	

			$mail->isSMTP();
			$mail->SMTPDebug = 1;
			$mail->SMTPAuth = true; // auth habilitada
			//$mail->SMTPSecure = 'tls';
			$mail->SMTPSecure = 'ssl';
			$mail->Host = 'smtp.globat.com';
			//$mail->Port = '587';
			$mail->Port = '465';
			$mail->SMTPAuth = true;
			$mail->isHTML(TRUE);
			$mail->Username = 'empleospatsy@patsy.com.gt';
			//$mail->Password = 'ckxujygdytphrgbu';
			$mail->Password = 'Empl3os#2022';
			//$mail->From = 'lextefasu@gmail.com';
			$mail->SetFrom('empleospatsy@patsy.com.gt');
			$mail->Subject = utf8_decode($subject);
			$mail->Body = $messge;
			//$mail->AddAddress($email);
			$mail->AddAddress($email);
			
			$mail->Send();
			//header("Location: http://www.pagina.com/");
			//$jsondata['message'] = 'SENT!!';

			//echo json_encode($jsondata);
			echo "Mensaje enviado a $email";
			}catch (Exception $e) {
		    	$error = "Message could not be sent. Mailer Error: $mail->ErrorInfo";
				echo $error;
				//$jsondata['error'] = $error;
			}
		}else{
			$error = 'Please enter your name!';
			//$jsondata['error'] = $error;
		}
		
	}else{
		$error = 'Please enter an email!';
		//$jsondata['error'] = $error;
	}*/

	function send_mail_patsy($email,$name,$subject,$messge){
		//global $conn;

		error_log('Function send email');

		$mail = new PHPMailer();

		//if(isset($_POST['email'])){
		if(true){
			//$email = $_POST['email'];
			//$email = 'bryan.ja@alliedglobal.com';

			//if(isset($_POST['name'])){
			if(true){
				//$name    	= utf8_decode("Alexander");
				//$name 		= $_POST['name'];
				//if(isset($_POST['message'])){
				//	$messge = utf8_decode($_POST['message']);	
					$messge = utf8_decode($messge);	
				//}else{
				//	$messge = '';
				//}
				//$subject 	= utf8_decode($_POST['subject']);

				$subject 	= utf8_decode($subject);
				$error 		= '';
				try{	
				error_log('In the try part!');
				$mail->isSMTP();
				$mail->SMTPDebug = 1;
				$mail->SMTPAuth = true; // auth habilitada
				//$mail->SMTPSecure = 'tls';
				$mail->SMTPSecure = 'ssl';
				$mail->Host = 'smtp.globat.com';
				//$mail->Port = '587';
				$mail->Port = '465';
				$mail->SMTPAuth = true;
				$mail->isHTML(TRUE);
				$mail->Username = 'empleospatsy@patsy.com.gt';
				//$mail->Password = 'ckxujygdytphrgbu';
				$mail->Password = 'Empl3os#2022';
				//$mail->From = 'lextefasu@gmail.com';
				$mail->SetFrom('empleospatsy@patsy.com.gt');
				$mail->Subject = $subject;
				$mail->Body = $messge;
				//$mail->AddAddress($email);
				$mail->AddAddress($email);
				
				$mail->Send();
				//header("Location: http://www.pagina.com/");
				//$jsondata['message'] = 'SENT!!';

				//echo json_encode($jsondata);
				//echo "Mensaje enviado a $email";
				error_log("Mensaje enviado a $email");
				//error_log(print_r($mail,true));
				return 'OK';
				}catch (Exception $e) {
			    	$error = "Message could not be sent. Mailer Error: $mail->ErrorInfo";
					//echo $error;
					error_log($error);
					//$jsondata['error'] = $error;
				}
			}else{
				$error = 'Please enter your name!';
				//$jsondata['error'] = $error;
			}
			
		}else{
			$error = 'Please enter an email!';
			//$jsondata['error'] = $error;
		}
	}
?>