<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$file = fopen("file.txt","at");
fwrite($file,"\n $name:$surname \n");
fclose($file);
?>