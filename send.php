<?php

if(isset($_POST['submit'])){
$to = "radchenk.o.v@yadnex.ru";; // Здесь нужно написать e-mail, куда будут приходить письма
$from = $_POST['email']; // this is the sender's Email address
$name = $_POST['name'];
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
    
/* Переменная, которая будет отправлена на почту со значениями, вводимых в поля */
$mail_to_myemail = "Здравствуйте! 
Было отправлено сообщение с сайта! 
Имя отправителя: $name
Фамилия: $surname
Вопрос 1: $q1
Вопрос 2: $q2
Вопрос 3: $q3
Вопрос 4: $q4
Вопрос 5: $q5
Вопрос 6: $q6
";  
    
mail($to,$subject,$message,$headers);
// mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
echo "Сообщение отправлено. Спасибо Вам " . $name . "!";
echo "<br /><br /><a href='https://radchenkovladislav.github.io/index.html'>Вернуться на сайт.</a>";

}

?>






































