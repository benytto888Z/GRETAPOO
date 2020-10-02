<?php
    Class Monstre {

        public $force;
        public $nom;


        public function __construct($nom, $force) {
            $this->nom = $nom;
            $this->force = $force;
        }

        public function Attaquer($cibleHeros) {
            $cibleHeros->vie = $cibleHeros->vie - 1;
        }

        public function ViderEnergie() {

        }
    }
?>