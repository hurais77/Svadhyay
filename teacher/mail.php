<?php 
$otp = rand(000000,999999);
session_start();
  $email =$_SESSION['forgot_pass'] ;
 $_SESSION['otp']=$otp ;
  echo $email;
  echo $otp;
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require '../phpmailer/vendor/autoload.php'; 

$mail = new PHPMailer(true); 

try { 
	$mail->SMTPDebug = 2;									 
	$mail->isSMTP();											 
	$mail->Host	 = 'smtp.gmail.com';					 
	$mail->SMTPAuth = true;							 
	$mail->Username = 'esvadhyaysoftware@gmail.com';				 
	$mail->Password = 'svadhyay123';						 
	$mail->SMTPSecure = 'ssl';							 
	$mail->Port	 = 465; 

	$mail->setFrom('esvadhyay@gmail.com', 'E-LEARNING');		 
	$mail->addAddress("$email");
	$mail->addAddress("$email"); 
	
	$mail->isHTML(true);								 
	$mail->Subject = 'Reset Password'; 
	$mail->Body = 'This is your OTP : <b>'.$otp.'</b>'; 
	$mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
	$mail->send(); 
	echo '<script type="text/javascript">if(confirm("Mail has been sent successfully!    Please Check Your Email....")){window.location.href = "verify_otp.php"; }else{window.location.href = "verify_otp.php";}</script>'; 
} catch (Exception $e) { 
	echo '<script type="text/javascript">if(confirm("Message could not be sent")){window.location.href = "forgot_password.php"; }else{window.location.href = "forgot_password.php";}</script>'; 
} 

?> 
