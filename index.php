<?php

$firstPage = 'pages/1.php';
$secondPage = 'pages/2.php';
$mainPage = 'index.php';

?>

<html lang="RU">
<head>
    <meta charset="UTF-8">
    <title>Список страниц</title>
</head>
<body>
    <h2>Список страниц</h2>
    <ul>
        <li><a href="<?= $mainPage ?>">Главная страница</a></li>
        <li><a href="<?= $firstPage ?>">Первая страница</a></li>
        <li><a href="<?= $secondPage ?>">Вторая страница</a></li>
    </ul>
</body>
</html>
