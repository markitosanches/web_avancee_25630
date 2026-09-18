<?php
//replace .htaccess(apache) into vs code
// execute  mvc> php -S localhost:8000 router.php

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$file = __DIR__ . $path;

if($path !== '/' && is_file($file)){
    return false;
}

require __DIR__ . '/index.php';
// end .htaccess replacement