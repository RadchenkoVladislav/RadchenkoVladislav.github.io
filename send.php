<?php

if(isset($_POST['submit'])){
$to = "radchenk.o.v@yadnex.ru";; // Здесь нужно написать e-mail, куда будут приходить письма
$from = $_POST['name']; // this is the sender's Email address
$surname = $_POST['surname'];
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$subject = "Форма отправки сообщений с сайта";
$subject2 = "Copy of your form submission";
$message = $first_name . " оставил сообщение:" . "\n\n" . $_POST['message'];
$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

$headers = "From:" . $from;
$headers2 = "From:" . $to;

mail($to,$subject,$message,$headers);
// mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
echo "Сообщение отправлено. Спасибо Вам " . $name . "!";
echo "<br /><br /><a href='https://epicblog.net'>Вернуться на сайт.</a>";

}

?>