<?php
    Class Heros {

        private string $nom;
        private int $vie;
        private int  $force;

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

        /**
         * Get the value of nom
         */ 
        public function getNom():string
        {
                return $this->nom;
        }
    }
?>