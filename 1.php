<?php

$name = 'Михаил';
$residentialAddress = 'Москва улица Ленина 7';
$homeAddress = 'Лондон Бейкер Стрит 221B';
$age = 57;
$sex = 'мужской';

?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?=
"Меня зовут $name, мне $age лет, мой пол $sex, я проживаю по адресу $homeAddress, а прописан $residentialAddress"
?>
</body>
</html>

