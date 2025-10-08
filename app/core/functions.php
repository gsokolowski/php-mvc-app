<?php

// in core folder these files will be always loaded for the application

function show($url) {
    echo '<pre>';
    print_r($url);
    echo '</pre>';
}

// to escape some js code which could be passed through form to insert or update method
function escape($str) {
    return htmlspecialchars($str);
}