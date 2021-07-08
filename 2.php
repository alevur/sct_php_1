<?php

if (isset($_POST["firstNumber"]) && isset($_POST["secondNumber"])) {
    $firstNumber = (float)$_POST["firstNumber"];
    $secondNumber = (float)$_POST["secondNumber"];

} else {
    echo "Не все параметры введены";
}

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

echo "
<html>
<body>
<form action='' method='POST'>
    <p>Первое число: <input type='text' name='firstNumber' value= {$_POST['firstNumber']}></p>
    <p>Второе число: <input type='text' name='secondNumber' value= {$_POST['secondNumber']}></p>
    <p>Действие: <select name='action' id=''>
        <option value='+' {$sum}>Сложение</option>
        <option value='-' {$sub}>Вычитание</option>
        <option value='*' {$mult}>Умножение</option>
        <option value='/' {$div}>Деление</option>
    </select></p>
    <input type='submit' value='Выполнить'>
</form>
</body>    
</html>
";