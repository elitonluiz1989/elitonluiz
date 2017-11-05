<?php
function var_info(...$vars) {
    echo '<pre>';;
    var_dump($vars);
    echo '</pre>';

    exit(0);
}