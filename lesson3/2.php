<?php

$firstPage = '1.php';
$secondPage = '2.php';
$thirdPage = '3.php';
$page = 2;

$a = rand(-20,20);
$b = rand(-20,20);
$c = rand(-20,20);

?>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <title>2</title>
</head>
<body>
    <?php
    echo "a = $a b = $b c = $c <br>";
//    if ($a <= $b) {
//        echo "$a, $b<br>";
//    }
//    if ($a > $b) {
//        echo "$b, $a <br>";
//    }
    if ($a <= $b && $b < $c) {
        echo "$a, $b, $c <br>";
    }
    if ($a <= $b && $c <= $b && $a <= $c) {
        echo "$a, $c, $b <br>";
    }
    if ($b < $a && $a < $c) {
        echo "$b, $a, $c <br>";
    }
    if ($b <= $c && $c <= $a) {
        echo "$b, $c, $a <br>";
    }
    if ($c < $b && $b <= $a) {
        echo "$c, $b, $a <br>";
    }
    if ($c < $a && $a < $b) {
        echo "$c, $a, $b <br>";
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
