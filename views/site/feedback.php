<?php
	require_once 'lib/PHPMailer/PHPMailerAutoload.php';

	$mail = new PHPMailer;
	$mail->CharSet = 'UTF-8';

	// Настройки SMTP
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPDebug = 0;

	$mail->Host = "ssl://smtp.mail.ru";
	$mail->Port = 465;
	$mail->Username = "pen_dvorik@mail.ru";
	$mail->Password = "kavasaki13";

	// От кого
	$mail->setFrom('pen_dvorik@mail.ru', 'ПЕННЫЙ ДВОРИК');        

	// Кому
	$mail->addAddress('pen_dvorik@mail.ru', '');

	// Тема письма
	$mail->Subject = "Заявка на обратную связь!";

	// Тело письма
	$body = 'Имя: '.$_POST['Name'].'<br />';
	$body .= 'Телефон: '.$_POST['Phone'].'<br />';
	$body .= 'Email: '.$_POST['Email'].'<br />';
	if (isset($_POST['Message'])) {
		$body .= 'Сообщение: '.$_POST['Message'].'<br />';
	}
	$mail->msgHTML($body);

	// Приложение
	//$mail->addAttachment (__DIR__ . '/image.jpg');

	$mail->send();
?>