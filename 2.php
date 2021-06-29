<?php

function call2()
{
    static $count = 0;
    $count++;
    echo $count;
}

call2();