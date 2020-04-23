<?php
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$surname = $_POST['surname'];
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];

$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';

$mail->SMTPAuth = true;
$mail->Username = 'vhr_13@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'hardline13';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('vhr_13@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('radchenk.o.v@yandex.ru');
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'ответы на вопросы:';
$mail->Body    = 'ученика' .$name . ' ' .$surname. '<br>
Ответы: '.$q1 . '<br> '.$q2 . '<br> '.$q3 . '<br> '.$q4 . '<br> '.$q5 . '<br>'.$q6 . '<br>  '
$mail->AltBody = '';

if(isset($_POST['submit'])){
$to = "radchenk.o.v@yadnex.ru";; // Здесь нужно написать e-mail, куда будут приходить письма
$from = $_POST['email']; // this is the sender's Email address

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>   








































