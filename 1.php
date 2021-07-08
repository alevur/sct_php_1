<?php
$firstArr = [2,5,7,6];
$secondArr = [3,2,5,1,9];

$uniqFirstArr = array_diff($firstArr, $secondArr);
$uniqSecondArr = array_diff($secondArr, $firstArr);

print_r($uniqFirstArr);
print_r($uniqSecondArr);
