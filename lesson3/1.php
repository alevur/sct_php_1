
<?php

$firstPage = '1.php';
$secondPage = '2.php';
$thirdPage = '3.php';
$page = 1;
$int = rand(-20,20);

?>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <title>1</title>
</head>
<body>
    <?php
        if ($int >= 0) {
            echo "Число '$int' - положительное";
        }
        if ($int < 0) {
            echo "Число '$int' - отрицательное";
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
