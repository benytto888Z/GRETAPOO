<?php

class A
{
    public function toto()
    {
        echo "je suis la méthode toto appelée depuis la classe A".PHP_EOL;
    }
}

class B extends A
{
    public function tata()
    {
       // echo "je suis la méthode toto appelée depuis la classe A".PHP_EOL;
       //A::toto().PHP_EOL;
        parent::toto().PHP_EOL;
        echo "je suis la méthode tata appelée depuis la classe B".PHP_EOL;
    }
}

$a = new A();
$a->toto();

$b = new B();
$b->tata();

