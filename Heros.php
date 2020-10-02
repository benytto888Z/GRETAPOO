<?php
    Class Heros {

        public $nom;
        public $vie;
        public $force;

        public function __construct($nom, $vie, $force) {
            $this->nom = $nom;
            $this->vie = $vie;
            $this->force = $force;
        }

        public function Blesser($cible) {
            $cible->force = $cible->force - ($cible->force *20/100);
        }

        public function Tuer() {

        }
    }
?>