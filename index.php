<?php
ini_set("display_errors", 1);
error_reporting(-1);

use Akulov\Square as B;
use Akulov\MyLog as M;
use Akulov\AkulovException;

require_once 'core/EquationInterface.php';
require_once 'core/LogAbstract.php';
require_once 'core/LogInterface.php';
require_once 'Akulov/Line.php';
require_once 'Akulov/Square.php';
require_once 'Akulov/MyLog.php';
require_once 'Akulov/AkulovException.php';

try {

    M::log("Версия программы: " . trim(file_get_contents('version')) );

    echo "Введите 3 числа через Enter\n\r";

    $a = (int)readline();
    $b = (int)readline();
    $c = (int)readline();

    M::log("The equation is introduced:" . " $a*x^2 + $b*x + $c = 0");
    $test = new B();
    $r = $test->solve($a, $b, $c);
    M::log("Roots: " . implode(", ", $r));

} catch (AkulovException $e) {
    M::log($e->getMessage());
}
M::write();