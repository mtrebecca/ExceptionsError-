<?php

error_reporting(level: E_ALL);
ini_set(varname:'display_errors', newvalue: 1);

set_error_handler(function (function ($errno, $errstr, $errfile, $errline) {
    var_dump($errno, $errstr, $errfile, $errline);

    return true;
});

echo $variavel;
echo $array[12];

echo CONSTANTE;