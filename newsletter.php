<?php

// website Newsletter code 

	$newsletter = $_POST['newsletter'];
	$subj = "R3 Star Engicon (New NewsLetter Form Submission)";
	$html = "Email:" ."\n\n". $newsletter;

	smtp_mailer('nyrexdeveloper@gmail.com',$subj,$html);

	function smtp_mailer($to,$subject,$msg){
		include('smtp/PHPMailerAutoload.php');
		$mail = new PHPMailer(); 
		$mail->IsSMTP(); 
		// $mail->SMTPDebug = 1; 
		$mail->SMTPAuth = true; 
		$mail->SMTPSecure = 'TLS'; 
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 587; 
		$mail->IsHTML(true);
		$mail->CharSet = 'UTF-8';
		$mail->Username = "nyrexdeveloper@gmail.com";
		$mail->Password = "nyrex2021";
		$mail->SetFrom("nyrexdeveloper@gmail.com");
		$mail->Subject = $subject;
		$mail->Body =$msg;
		$mail->AddAddress($to);
		$mail->SMTPOptions=array('ssl'=>array(
			'verify_peer'=>false,
			'verify_peer_name'=>false,
			'allow_self_signed'=>false
		));
		if(!$mail->Send()){
			echo 2;
		}else{
			echo 3;
		}
	}

?>