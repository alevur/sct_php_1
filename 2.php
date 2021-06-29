<?php

function oneTen ()
{
    for ($i = 0; $i <= 10; $i++) {
        if ($i === 0) {
            echo "$i - тоже четное число<br>";
        } elseif ($i % 2 === 0) {
            echo "$i - четное<br>";
        } else {
            echo "$i - не четное<br>";
        }
    }
}

oneTen();