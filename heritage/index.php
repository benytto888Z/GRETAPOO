<?php
/*require 'Animal.php';
require 'Chien.php';
require 'Chat.php';

$pipo = new Chien('Pipo',2);
$pipo->crier();

$pipo->sauter();

$titi = new Chat('Titi',3);
$titi->crier();*/

require 'Forme.php';
require 'Carre.php';
require 'Triangle.php';
require 'Cercle.php';

$carre1 = new Carre();
echo "Aire du carre ". $carre1->aire().PHP_EOL;

$triangle1 = new Triangle();
echo "Aire du triangle ". $triangle1->aire().PHP_EOL;

 

$cercle1 = new Cercle();
echo "Aire du cercle ". $cercle1->aire().PHP_EOL;
