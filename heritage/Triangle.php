<?php

class Triangle extends Forme
{
    private $longueur = 7;
    private $hauteur = 3;
    
    public function aire(){
        return $this->longueur * $this->hauteur/2;
    }
    
}