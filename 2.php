<?php

function minimum (int $a, int $b, int $c = 0): int
{
    if ($a < $b && $a < $c) {
        return $a;
    } elseif ($b < $a && $b < $c) {
        return $b;
    } else {
        return $c;
    }
}
