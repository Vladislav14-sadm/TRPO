<?php
ini_set("display_errors", 1);
error_reporting(-1);

/*use akulov\Square as B;
use akulov\MyLog as M;
use akulov\AkulovException;*/

require_once __DIR__ . './vendor/autoload.php';

/*require_once 'core/EquationInterface.php';
require_once 'core/LogAbstract.php';
require_once 'core/LogInterface.php';
require_once 'Akulov/Line.php';
require_once 'Akulov/Square.php';
require_once 'Akulov/MyLog.php';
require_once 'Akulov/AkulovException.php';*/

try {
    if(!is_dir("log")) {
        mkdir("log", 0700);
    }
	
	akulov\MyLog::log("Версия программы: " . trim(file_get_contents('version')) );

    echo "Введите 3 числа через Enter\n\r";

    $a = (int)readline();
    $b = (int)readline();
    $c = (int)readline();

    akulov\MyLog::log("The equation is introduced:" . " $a*x^2 + $b*x + $c = 0");
    $test = new akulov\Square();
    $r = $test->solve($a, $b, $c);
    akulov\MyLog::log("Roots: " . implode(", ", $r));

} catch ( akulov\AkulovException $e) {
    akulov\MyLog::log($e->getMessage());
}
akulov\MyLog::write();