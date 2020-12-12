<?php

namespace Akulov;

use core\LogInterface;
use core\LogAbstract;

class MyLog extends LogAbstract implements LogInterface
{
    public function _write()
    {
        foreach ($this->log as $v)
            echo $v . "\r\n";

        /*лог дата и время*/
        $b = date('d-m-Y\_H.i.s.u');
        echo "Date: $b";
        file_put_contents(__DIR__ . "\..\log\\$b.log", $b . PHP_EOL, FILE_APPEND);
    }

    public static function log($str)
    {
        self::Instance()->_log($str);
    }

    public function _log($str)
    {
        $this->log[] = $str;
    }

    public static function write()
    {
        self::Instance()->_write();
    }
}