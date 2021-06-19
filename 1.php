<?php

function getStr(string $name, string $address = '', int $age = 0): string
{
    if (empty($address)) {
        return "Имя: $name. Возраст $age";
    } elseif ($age === 0) {
        return "Имя: $name. Адрес:$address.";
    } else {
        return "Имя: $name. Адрес:$address. Возраст $age";
    }
}

echo getStr('Алексей','',15);