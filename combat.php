<?php
    require "Heros.php";
    require "Monstre.php";

    $heros = new Heros("Shogun", 5, 100);
    $monstre1 = new Monstre("Takun", 200);

    echo "le monstre a " . $monstre1->force . " Points de vie." . PHP_EOL;
    $heros->Blesser($monstre1);
    echo "le monstre a " . $monstre1->force . " Points de vie.". PHP_EOL;
    echo "le héros a " . $heros->vie ." vies". PHP_EOL;
    $monstre1->Attaquer($heros);
    echo "le héros a " . $heros->vie ." vies". PHP_EOL;
?>