<?php

function get_page () {
    if (!empty($_GET['page'])) {
        switch ($_GET['page']) {
            case 2:
                include '2.php';
                break;
            case 3:
                include '3.php';
                break;
            default:
                include '1.php';
                break;
        }
    }
}

get_page();
?>

<a href="?page=1">Калькулятор</a>
<a href="?page=2">Ссылка 2</a>
<a href="?page=3">Ссылка 3</a>
