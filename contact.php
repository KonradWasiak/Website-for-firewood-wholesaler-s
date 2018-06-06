<?php

session_start();

if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$message = $_POST['message'];
	$name = $_POST['name'];
	if(isset($_POST['phone']))
	{
		$phone = $_POST['phone'];
	}
	else
	{
		$phone = 'Nie podano';
	}
}

require_once('PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'przykladowy@gmail.com';
$mail->Password = 'haslodomeila';
$mail->SetFrom('adresfirmy@gmail.com');
$mail->Subject = 'Zapytanie o drewno';
$mail->Body = $message . '<br><br>' .'Email: ' .$email .'<br><br>' .'Numer kontaktowy: ' .$phone;
$mail->AddAddress('adres@gmail.com');


if(!$mail->send()) 
{
    echo 'Błąd';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 
else 
{
    $_SESSION['emailinfo'] = 'Wiadomość została wysłana, wkrótce odpowiemy na wszystkie pytania.';
	header('Location: index.php');

}