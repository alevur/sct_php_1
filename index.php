<?php

$firstPage = 'lesson2/1.php';
$secondPage = 'lesson2/2.php';
$thirdPage = 'lesson2/3.php';
$mainPage = 'index.php';

?>

<html lang="RU">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
<h2>Список страниц</h2>
<ul>
    <li><a href="<?= $mainPage ?>">Главная страница</a></li>
    <li><a href="<?= $firstPage ?>">1 страница</a></li>
    <li><a href="<?= $secondPage ?>">2 страница</a></li>
    <li><a href="<?= $thirdPage ?>">3 страница</a></li>
</ul>
</body>
</html>
