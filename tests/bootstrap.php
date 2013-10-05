<?php
/**
 * Bootstrap file for PHPUnit tests
 *
 * @author Niels Nijens <nijens.niels@gmail.com>
 **/
require_once __DIR__ . "/../vendor/autoload.php";

spl_autoload_register(function($className) {
    $vendorNamespace = "AtomicPHP\\Logging\\";
    if (strpos($className, $vendorNamespace) === 0) {
        $classNameFile = str_replace("\\", DIRECTORY_SEPARATOR, substr($className, strlen($vendorNamespace) ) ) . ".php";

        if (is_file(__DIR__ . "/../src/" . $classNameFile) ) {
            include __DIR__ . "/../src/" . $classNameFile;
        }
        elseif (is_file(__DIR__ . "/../" . lcfirst($classNameFile) ) ) {
            include __DIR__ . "/../" . lcfirst($classNameFile);
        }
    }
}, true);
