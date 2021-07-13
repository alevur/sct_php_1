<?php

$gender = [
    1 => 'Мужской',
    2 => 'Женский'
];

$cities = [
    'moscow' => 'Москва',
    'rostov' => 'Ростов',
    'saratov' => 'Саратов',
];

$month = [
    1 => 'Январь',
    2 => 'Февраль',
    3 => 'Март',
    4 => 'Апрель',
    5 => 'Май',
    6 => 'Июнь',
    7 => 'Июль',
    8 => 'Август',
    9 => 'Сентябрь',
    10 => 'Октябрь',
    11 => 'Ноябрь',
    12 => 'Декабрь',
];

$citizenship = [
    'ru' => 'Российское',
    'us' => 'Американское',
    'eu' => 'Европейское',
    'ch' => 'Китайское',
    'au' => 'Австралийское',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['submit_btn'])) {
    $FIO = $_POST['lastname'] .' '.$_POST['firstname'].' '.$_POST['middlename'];
    $birthDay = $_POST['day'].'.'.$_POST['month'].'.'.$_POST['year'];
    $citShip = $_POST['citizenship'];
}
?>

<style>
    .first label {
        display: block;
    }

    label {
        padding-bottom: 15px;
    }

    .second {
        padding-top: 15px;
    }
</style>

<form method="POST">
    <div class="first">
        <label>
            <input type="text" name="lastname" value="" placeholder="Введите фамилию">
        </label>
        <label>
            <input type="text" name="firstname" value="" placeholder="Введите имя">
        </label>
        <label>
            <input type="text" name="middlename" value="" placeholder="Введите отчество">
        </label>
        <label>
            <select name="gender">
                <option value="0">Выберите пол</option>
                <?php foreach ($gender as $key => $value) : ?>
                    <option value="<?= $key ?>"><?= $value ?></option>
                <?php endforeach; ?>
            </select>
        </label>
        <label>
            <select name="city">
                <option value="0">Выберите свой город</option>
                <?php foreach ($cities as $key => $value) : ?>
                    <option value="<?= $key ?>"><?= $value ?></option>
                <?php endforeach; ?>
            </select>
        </label>
    </div>
    <label>
        <select name="day">
            <option value="0">День</option>
            <?php for ($i = 1; $i <= 31; $i++) : ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </label>
    <label>
        <select name="month">
            <option value="0">Месяц</option>
            <?php foreach ($month as $key => $value) : ?>
                <option value="<?= $key ?>"><?= $value ?></option>
            <?php endforeach; ?>
        </select>
    </label>
    <label>
        <select name="year">
            <option value="0">Год</option>
            <?php for ($i = 1900; $i <= 2017; $i++) : ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </label>
    <div class="first second">
        <label>
            <input type="text" name="email" value="" placeholder="Введите E-mail">
        </label>
        <label>
            <select name="citizenship">
                <option value="0">Выберите гражданство</option>
                <?php foreach ($citizenship as $key => $value) : ?>
                    <option value="<?= $key ?>"><?= $value ?></option>
                <?php endforeach; ?>
            </select>
        </label>

        <button name="submit_btn" value="1">Отправить</button>
    </div>

</form>

<table border="1" width="75%" cellpadding="5">
    <tr>
        <th>ФИО</th>
        <th>Пол</th>
        <th>Город</th>
        <th>Дата рождения</th>
        <th>E-mail</th>
        <th>Гражданство</th>
    </tr>
    <tr>
        <td><?= $FIO ?></td>
        <td><?= $gender[$_POST['gender']] ?></td>
        <td><?= $cities[$_POST['city']] ?></td>
        <td><?= $birthDay ?></td>
        <td><?= $_POST['email'] ?></td>
        <td><?= $citizenship[$_POST['citizenship']] ?></td>
    </tr>
</table>