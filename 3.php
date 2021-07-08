<?php
$json = '{"0":89050506568, "1":89050506545, "2":335566}';
$arr = json_decode($json, true);
echo '<pre>';
var_dump($arr);
echo '</pre><br>';

$json2 = json_encode($arr);
echo '<pre>';
echo $json2;
echo '</pre><br>';

