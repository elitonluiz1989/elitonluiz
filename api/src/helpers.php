<?php
function var_info(...$vars) {
    echo '<pre>';;
    var_dump($vars);
    echo '</pre>';

    exit(0);
}

function config($target)
{
    return require dirname(__DIR__) . '/config/' . $target .'.php';
}