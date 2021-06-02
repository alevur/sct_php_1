<?php

$firstImage = '../img/1.jpg';
$secondImage = '../img/2.jpg';
$thirdImage = '../img/3.jpg';

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
    <img src='<?= $firstImage?>' alt="">
    <img src='<?= $secondImage?>' alt="">
    <img src='<?= $thirdImage?>' alt="">
    <?php
    $firstImage = '../img/4.gif';
    $secondImage = '../img/5.png';
    ?>
    <img src='<?= $firstImage?>' alt="">
    <img src='<?= $secondImage?>' alt="">
</body>
</html>
