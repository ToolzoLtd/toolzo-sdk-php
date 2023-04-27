<?php

define('ROOT_PATH', dirname(__FILE__). '/Examples');
define('PSR_LOG_PATH', dirname(__FILE__).'/vendor/psr/log/Psr/Log');

function LoadClass($className)
{
    if (strncmp('Examples', $className, 8) === 0) {
        $path   = ROOT_PATH;
        $length = 8;
    } elseif (strncmp('Psr\Log', $className, 7) === 0) {
        $path   = PSR_LOG_PATH;
        $length = 7;
    } else {
        return;
    }
    $path .= str_replace('\\', '/', substr($className, $length)) . '.php';

    if (file_exists($path)) {
        require $path;
    }
}

spl_autoload_register('LoadClass');
