<?php
spl_autoload_register(function ($class) {
    $root = __DIR__; // šakninis direktorijos kelias
    $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_readable($file)) {
        require $file;
    }
});
