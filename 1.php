<?php

$sum = '';
$sub = '';
$mult = '';
$div = '';
$firstNumber = 0;
$secondNumber = 0;

if (isset($_POST["firstNumber"]) && isset($_POST["secondNumber"])) {
    $firstNumber = (float)$_POST["firstNumber"];
    $secondNumber = (float)$_POST["secondNumber"];

    switch ($_POST["action"]) {
        case '+':
            echo $firstNumber + $secondNumber;
            $sum = "selected";
            break;
        case '-':
            echo $firstNumber - $secondNumber;
            $sub = "selected";
            break;
        case '*':
            echo $firstNumber * $secondNumber;
            $mult = "selected";
            break;
        case '/':
            echo $secondNumber == 0 ? "На ноль делить нельзя" : $firstNumber / $secondNumber;
            $div = "selected";
            break;
    }

} else {
    echo "Не все параметры введены";
}


?>
<h1>Калькулятор</h1>
<body>
<form action='' method='POST'>
    <p>Первое число:
        <label>
            <input type='text' name='firstNumber' value='<?= $firstNumber ?>'>
        </label>
    </p>
    <p>Второе число:
        <label>
            <input type='text' name='secondNumber' value='<?= $secondNumber ?>'>
        </label>
    </p>
    <p>Действие:
        <label for=''>
            <select name='action' id=''>
                <option value='+' <?= $sum ?> >Сложение</option>
                <option value='-' <?= $sub ?> >Вычитание</option>
                <option value='*' <?= $mult ?> >Умножение</option>
                <option value='/' <?= $div ?> >Деление</option>
        </label>
        </select></p>
    <input type='submit' value='Выполнить'>
</form>
</body>