<?
$whence = $_POST['whence'];
$where = $_POST['where'];
$date = $_POST['date'];

require_once ('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ivldv@mail.ru';                 // Наш логин
$mail->Password = 'Rr1@fe5D2';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('ivldv@mail.ru', 'dmitriy');   // От кого письмо 
$mail->addAddress('ivldv66@yandex.ru');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);

$mail->Subject = 'Это тема сообщения';
$mail->Body    = '
	Пользователь Заказал билет <br> 
	От: ' . $whence . ' До:'. $where . ' На :'. $date .'';
$mail->AltBody = 'Это альтернативный текст';

if(!$mail->send()) {
//	   echo("все плохо");
    return false;
} else {
//	   echo("все хорошо");
    return true;
}
?>