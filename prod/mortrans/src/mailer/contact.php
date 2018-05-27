<?php

$post = (!empty($_POST)) ? true : false;

if($post){
	$error = '';
	$whence=$_POST["whence"];
	$where=$_POST["where"];
	$date=$_POST["date"];
};		
if(!$error)	{
	$headers.="From: just-a-bit.ru <ivldv@mail.ru>\r\n";
	$headers.="Content-type: text/html; charset=\"utf-8\"\r\n";
	$headers.="Subject: Заказ билета\r\n";

	$to = "ivldv66@yandex.ru";  
	$subject = "Это тема сообщения";
	$message = "ФИО: </b>$whence<br>
	ДР: </b>$where<br>
	Номер телефона: </b>$date<br>
	";
	mail ($to,$subject,$message,$headers) or print "Не могу отправить письмо.";
	if(!$error)	{
		echo 'OK';
				}
		else
		{
		echo $error;
		}
}
?>