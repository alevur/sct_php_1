<?php
$product = [
    [
        'name' => 'Стул 1',
        'price' => 20,
        'category' => 1,
    ],

    [
        'name' => 'Стул 2',
        'price' => 210,
        'category' => 2,
    ],

    [
        'name' => 'Стул 3',
        'price' => 15,
        'category' => 2,
    ],
];


echo '<pre>';
print_r($product);
echo '</pre><br>';

array_multisort(array_column($product,'price'),$product);
echo '<pre>';
print_r($product);
echo '</pre><br>';