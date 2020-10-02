<?php

class Person
{
    public $firstName ;
    public $lastName;
    public $age;
    
    public function __construct($firstName,$lastName,$age){
       $this->firstName = $firstName;
       $this->lastName = $lastName;
       $this->age = $age;
    }

    public function danser()
    {
        echo "je danse bien !";
    }

    private function sePresenter()
    {
        return "Je m'appelle ".$this->firstName." ".$this->lastName." et j'ai ".$this->age." ans";
    }

    public function presenteToi(){
         $this->sePresenter();
    }


}





$john = new Person('John','Doe',44);
echo $john->lastName.PHP_EOL;
echo $john->danser().PHP_EOL;

echo $john->presenteToi();

//var_dump($john);