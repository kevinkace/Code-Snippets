<?php

define("ROOT", '/mnt/sda6/PROJECTS/CODE/code-snippets/');
define("PHP_CLASSES", 'php/classes/');
define("EXT",'.php');

function PathToClass($className)
{
    return ROOT . PHP_CLASSES . $className . EXT;
}

function __autoload($name) {

    if (file_exists(PathToClass($name))) {
        require PathToClass($name);
    }
    else {
        throw new Exception("Unable to load: $name");
    }

}

?>