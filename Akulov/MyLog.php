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