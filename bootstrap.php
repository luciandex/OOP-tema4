<?php

    function autoloadNamespace(string $className)
    {
        $classFile = str_replace("\\", DIRECTORY_SEPARATOR, $className);
        $classPath = __DIR__ . "/{$classFile}.php";
        if (file_exists($classPath) && is_readable($classPath)) {
            include_once $classPath;
        }
    }



spl_autoload_register('autoloadNamespace');
