<?php

class A
{

}

class B extends A
{
    public function __construct($a, $b)
    {

        $this->a = $a;
        $this->b = $b;
    }

    protected $a, $b;
}

class C extends B
{

    public function __construct($a, $b, $c)
    {
        $this->c = $c;
        parent:: __construct($a, $b);
    }

    protected $c;
}

$a1 = new A();
$a2 = new A();
$b3 = new B($a1, $a2);
$a4 = new A();
$a5 = new A();
$c6 = new C($b3, $a4, $a5);

var_dump($c6);
?>