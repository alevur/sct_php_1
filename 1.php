<?php

function comparison ( int $num1, int $num2)
{
    if ($num1 === $num2) {
        echo "Значения равны";
    } else {
        if ($num1 < $num2) {
            echo "$num1 , $num2";
        } else {
            echo "$num2, $num1";
        }
    }
}

comparison(2,5);