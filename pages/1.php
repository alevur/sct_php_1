<?php

$name = 'Михаил';
$residentialAddress = 'Москва улица Ленина 7';
$homeAddress = 'Лондон Бейкер Стрит 221B';
$age = 57;
$sex = 'мужской';

$firstPage = '1.php';
$secondPage = '2.php';
$mainPage = '../index.php';

?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="<?= $mainPage ?>">Главная страница</a></li>
        <li><a href="<?= $firstPage ?>">Первая страница</a></li>
        <li><a href="<?= $secondPage ?>">Вторая страница</a></li>
    </ul>
    <?= "Меня зовут $name, мне $age лет, мой пол $sex, 
        я проживаю по адресу $homeAddress, а прописан $residentialAddress"
    ?>
</body>
</html>

