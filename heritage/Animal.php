<?php

class Animal
{
    private $nom;
    private $age;
  
    public function __construct($nom,$age){
        $this->nom = $nom;
        $this->age = $age;

        echo " Je suis un nouvel animal je m'appelle ".$this->nom.PHP_EOL;
    }

    public function crier(){
        echo " je crie ".PHP_EOL;
    }

    protected function sauter(){
        echo " Je saute bien ".PHP_EOL;
    }
}

