<?php

$firstPage = '1.php';
$secondPage = '2.php';
$thirdPage = '3.php';
$page = 3;
$a = rand(-20,20);
$b = rand(-20,20);
$sum = null;

?>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <title>3</title>
</head>
<body>
    <?php
    echo "a = $a b = $b <br>";
    if ($a >=0 && $b >= 0) {
        $sum = $a + $b;
        echo "Cумма равна $sum";
    }
    if ($a < 0 || $b < 0) {
        if ($a < $b) {
            $sum = $b - $a;
            echo "Разность равна $sum";
        }
        if ($a > $b) {
            $sum = $a - $b;
            echo "Разность равна $sum";
        }
    }
    ?>
    <h2>Меню</h2>
    <ul>
        <?php if ($page !== 1): ?>
            <li><a href="<?= $firstPage ?>">1 страница</a></li>
        <?php endif; ?>

        <?php if ($page === 1): ?>
            <li><b><a href="<?= $firstPage ?>">1 страница</a></b></li>
        <?php endif; ?>

        <?php if ($page !== 2): ?>
            <li><a href="<?= $secondPage ?>">2 страница</a></li>
        <?php endif; ?>

        <?php if ($page === 2): ?>
            <li><b><a href="<?= $secondPage ?>">2 страница</a></b></li>
        <?php endif; ?>

        <?php if ($page !== 3): ?>
            <li><a href="<?= $thirdPage ?>">3 страница</a></li>
        <?php endif; ?>

        <?php if ($page === 3): ?>
            <li><b><a href="<?= $thirdPage ?>">3 страница</a></b></li>
        <?php endif; ?>

    </ul>
</body>
</html>

