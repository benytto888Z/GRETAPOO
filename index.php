<?php

require 'Person.php';
require 'Policier.php';

$jolepolicier = new Policier("John","Doe",44);

echo $jolepolicier->sePresenter();