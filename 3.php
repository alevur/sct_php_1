<?php
$products = [
    'Телефоны'=> ['iPhone X','Samsung Galaxy S20','Nokia 3310'],
    'Мебель'=> ['стол','стул','диван'],
    'Товары для автомобиля'=>['домкрат','генератор эдэмских кущ','синхрофазатрон'],
];

foreach ($products as $category=> $items)
{
    echo "<h3>$category</h3>";
    echo "<ul>";
    foreach ($items as $key => $value)
    {
        echo "<li>$value</li>";
    }
    echo "</ul>";
}