<?php

function up(&$var1, $var2)
{
    return $var1 + $var2;
}

function down(&$var1, $var2)
{
    return $var1 - $var2;
}

$a = 5;
$plus = up($a,10);
echo "Первоначально температура равна $a, температура увеличилась до $plus<br>";
$minus = down($a,15);
echo "Первоначально температура равна $a, температура уменьшилась до $minus<br>";


