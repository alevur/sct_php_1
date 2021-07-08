<?php
$arrPoems = [
    1 => 'Владей собой среди толпы смятенной ,
        Тебя клянущей за смятенье всех,
        Верь сам в себя, наперекор вселенной,
        И маловерным отпусти их грех',
    2 => 'Распустился ландыш в мае
        В самый праздник — в первый день.
        Май цветами провожая,
        Распускается сирень.',
    3 => 'Кто понял жизнь тот больше не спешит,
        Смакует каждый миг и наблюдает,
        Как спит ребёнок, молится старик,
        Как дождь идёт и как снежинки тают.',
    4 => 'Хей, жители неба,
        Кто на дне еще не был?
        Не пройдя преисподни
        Вам не выстроить рай!
        Хей, жители дна,
        Гром смеется над вами,
        Чтобы быть с ним на равных,
        Есть один путь – наверх!',
];

echo "
<html>
    <ul>
       <a href='http://lesson9/3.php?page=1'><li>Стих 1</li></a>
       <a href='http://lesson9/3.php?page=2'><li>Стих 2</li></a>
       <a href='http://lesson9/3.php?page=3'><li>Стих 3</li></a>
       <a href='http://lesson9/3.php?page=4'><li>Стих 4</li></a>
       <a href='http://lesson9/3.php'><li>Без page</li></a>
    </ul>
</html>
";

switch ($_GET['page']) {
    case 1:
        echo nl2br($arrPoems[1]);
        break;
    case 2:
        echo nl2br($arrPoems[2]);
        break;
    case 3:
        echo nl2br($arrPoems[3]);
        break;
    case 4:
        echo nl2br($arrPoems[4]);
        break;
    default:
        foreach ($arrPoems as $key => $poem) {
            echo nl2br($poem);
            echo '<br><br>';
        }
}
