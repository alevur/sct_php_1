<?php
$login = "http://lesson9/1.php?login=Ivan";
$password = "http://lesson9/1.php?password=123456789";
$age = "http://lesson9/1.php?age=33";
$default = "http://lesson9/1.php";
echo "
    <html>
        <a href='$login'>Логин</a> 
        <a href='$password'>Пароль</a> 
        <a href='$age'>Возраст</a> 
        <a href='$default'>Сброс данных</a> 
    </html>
";

function getUserData () {
    if (!empty($_GET["login"])||!empty($_GET["password"])||!empty($_GET["age"]))
    { echo "<br> Получены новые вводные: логин - ".$_GET["login"].", возраст - ".$_GET["age"]." лет,возраст - ".$_GET["password"]." пароль";}
    else { echo "<br> Переменные не дошли. Проверьте все еще раз."; }
}

getUserData();