


<html lang="RU">
<head>
    <meta charset="UTF-8">
    <title>3</title>
</head>
<body>
    <?php
    $firstPage = '1.php';
    $secondPage = '2.php';
    $mainPage = '../index.php';

    $numberOne = 23;
    $numberTwo = 7;
    $sum = intdiv($numberOne, $numberTwo);
    $sum2 = 23 % 7;
    echo " При делении $numberOne на $numberTwo:<br>";
    echo "результат целочисленного деления = $sum<br>";
    echo "остаток от деления = $sum2";

    ?>

    <h2>Список страниц</h2>
    <ul>
        <li><a href="<?= $mainPage ?>">Главная страница</a></li>
        <li><a href="<?= $firstPage ?>">1 страница</a></li>
        <li><a href="<?= $secondPage ?>">2 страница</a></li>
    </ul>
</body>
</html>


