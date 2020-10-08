<?php

class Person
{
    public $firstName ;
    public $lastName;
    public $age;
    
    private static $nbreDePerson = 0;

    public function __construct($firstName,$lastName,$age){
       $this->firstName = $firstName;
       $this->lastName = $lastName;
       $this->age = $age;
       static::$nbreDePerson++;
    }

    public function danser()
    {
        echo "je danse bien !";
    }

    public function sePresenter()
    {
        return "Je m'appelle ".$this->firstName." ".$this->lastName." et j'ai ".$this->age." ans";
    }

    public function presenteToi(){
         $this->sePresenter();
    }



    /**
     * Get the value of nbreDePerson
     */ 
    public static function getNbreDePerson()
    {
        return static::$nbreDePerson; // on peut aussi mettre self
    }
}





$john = new Person('John','Doe',44);
$pierre = new Person('Pierre','Durand',22);
$jeanne = new Person('Jeanne','Matheo',58);
/*echo $john->lastName.PHP_EOL;
echo $john->danser().PHP_EOL;

echo $john->presenteToi();*/

echo Person::getNbreDePerson();

//var_dump($john);