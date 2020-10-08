<?php

class Carre extends Forme
{
    private $cote=5 ;

    public function aire(){
        return $this->cote**2;
    }
}