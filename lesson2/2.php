<html lang="RU">
<head>
    <meta charset="UTF-8">
    <title>2</title>
</head>
<body>
    <?php

    $firstPage = '1.php';
    $thirdPage = '3.php';
    $mainPage = '../index.php';

    $str = '456';
    var_dump($str);
    echo "<br>";
    settype($str, "int");
    var_dump($str);
    echo "<br>";

    $bigStr = '969294233720368754775807';
    var_dump($bigStr);
    echo "<br>";
    settype($bigStr, "int");
    var_dump($bigStr);
    echo "<br>";
//    $bigStr = 9223372036854775807 т.к. используется 64 битная версия php / системы

    ?>

    <h2>Список страниц</h2>
    <ul>
        <li><a href="<?= $mainPage ?>">Главная страница</a></li>
        <li><a href="<?= $firstPage ?>">1 страница</a></li>
        <li><a href="<?= $thirdPage ?>">3 страница</a></li>
    </ul>
</body>
</html>

