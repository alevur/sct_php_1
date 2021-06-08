<html lang="RU">
<head>
    <meta charset="UTF-8">
    <title>1</title>
</head>
<body>
    <?php
    $secondPage = '2.php';
    $thirdPage = '3.php';
    $mainPage = '../index.php';



    $numberOne = 5;
    $numberTwo = 10;
    $sum = $numberOne + $numberTwo;
    $dif = $numberOne - $numberTwo;
    $div = $numberOne / $numberTwo;
    $multi = $numberOne * $numberTwo;
    $expo = pow($numberOne, $numberTwo) ;
    echo "$numberOne + $numberTwo = $sum - сложение<br>";
    echo "$numberOne - $numberTwo = $dif - вычитание<br>";
    echo "$numberOne / $numberTwo = $div - деление<br>";
    echo "$numberOne * $numberTwo = $multi - умножение<br>";
    echo "$numberOne<sup>$numberTwo</sup> = $expo - возведение в степень<br>";
    ?>
    <h2>Список страниц</h2>
    <ul>
        <li><a href="<?= $mainPage ?>">Главная страница</a></li>
        <li><a href="<?= $secondPage ?>">2 страница</a></li>
        <li><a href="<?= $thirdPage ?>">3 страница</a></li>
    </ul>
</body>
</html>

