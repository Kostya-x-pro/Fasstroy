<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['clientsName'];
$email = $_POST['clientsEmail'];
$phone = $_POST['clientsNumber'];
$mesage = $_POST['clientsText'];

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  						  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'fasstroy.service@mail.ru';         // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'dcMpeeZYnnRw2FYFNM8n';             // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('fasstroy.service@mail.ru');           // от кого будет уходить письмо?
$mail->addAddress('bi-eng_kozloy_vs@mail.ru');        // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');             // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');       // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');  // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка c формы сайта';
$mail->Body    = ' <b>Клиент:</b> ' .$name. ' <br><b>Почта:</b> ' .$email. ' <br><b>Телефон:</b> ' .$phone. ' <br><b>Сообщение от пользователя:</b> ' .$mesage;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Ошибка отправки формы';
} else {
    header('location: index.html');
}
?>