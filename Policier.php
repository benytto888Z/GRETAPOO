<?php

class Policier extends Person
{
   
    public $grade;
    public function __construct($firstName,$lastName,$age,$grade){
       parent::__construct($firstName,$lastName,$age);
       $this->grade = $grade;
       
    }

    public function sePresenter()
    {
        return "Je suis un policier , je m'appelle ".$this->firstName." ".$this->lastName." et j'ai ".$this->age." ans";
    }
}

