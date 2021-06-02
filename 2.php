<?php

$firstImage = 'img/1.jpg';
$secondImage = 'img/2.jpg';
$thirdImage = 'img/3.jpg';


?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <img src='<?= $firstImage?>' alt="">
    <img src='<?= $secondImage?>' alt="">
    <img src='<?= $thirdImage?>' alt="">
    <?php
    $firstImage = 'img/4.gif';
    $secondImage = 'img/5.png';
    ?>
    <img src='<?= $firstImage?>' alt="">
    <img src='<?= $secondImage?>' alt="">
</body>
</html>
