<?php

function get_page () {
    if (!empty($_GET['page'])) {
        switch ($_GET['page']) {
            case 2:
                include 'page/2.php';
                break;
            case 3:
                include 'page/3.php';
                break;
            default:
                include 'page/1.php';
                break;
        }
    }
}

get_page();
?>

<a href="?page=1">Калькулятор</a>
<a href="?page=2">Заповедь</a>
<a href="?page=3">Кто понял жизнь...</a>
