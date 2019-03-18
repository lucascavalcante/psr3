<?php


require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

try {
    echo checkString('Lucas');
    echo checkString(38);
} catch (Exception $e) {
    $log = new Logger('PSR3Presentation');
    $log->pushHandler(new StreamHandler('../logs.log', Logger::WARNING));
    $log->warning($e->getMessage());
}

function checkString($param)
{
    if (!is_string($param)) {
        throw new Exception("\"{$param}\" must be a string");
    }

    return $param."\n";
}
