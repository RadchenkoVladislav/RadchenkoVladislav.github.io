<?php
$mysqli = new mysqli ("localhost", "root", "123456789", "bigbr");
    $mysqli->query ("SET NAMES 'utf8'");
    $nameUch = $_POST['name'];
    $addressUch = $_POST['surname'];
    $addressUch = $_POST['cityUch'];
    $areaUch = $_POST['areaUch'];
    $namePed = $_POST['namePed'];
    $familPed = $_POST['familPed'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $nameComand = $_POST['nameComand'];
    $nameUchenik = $_POST['nameUchenik'];
    $familUchenik = $_POST['familUchenik'];
    $ageUchenik = $_POST['ageUchenik'];
    $sorevn = $_POST['sorevn'];
    $pitanie = $_POST['pitanie'];
    $persObr = $_POST['persObr'];    
    $mysqli->query ("INSERT INTO `reg` (
          `id`,
          `nameUch`,
          `addressUch`,
          `cityUch`,
          `areaUch`,
          `namePed`,
          `familPed`,
          `email`,
          `number`,
          `nameComand`,
          `nameUchenik`,
          `familUchenik`,
          `ageUchenik`,
          `optionsRadios`,
          `pitanie`,
          `persObr`) VALUES (NULL,
          '$nameUch',
          '$addressUch',
          '$areaUch',
          '$namePed',
          '$familPed',
          '$email',
          '$number',
          '$nameComand',
          '$nameUchenik',
          '$ageUchenik',
          '$sorevn',
          '$pitanie',
          '$persObr')");
if ($mysqli == 'true'){
          echo "Запись добавлена успешно!";
       } else {
          echo "Запись не добавлена!";
      }
?>