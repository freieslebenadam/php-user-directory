<?php 

spl_autoload_register('classLoader'); 

function classLoader($className) {
    $path = "resources/class/";
    $extension = ".class.php";
    $fullPath = $path.$className.$extension;

    if (!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;
}