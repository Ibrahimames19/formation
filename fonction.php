<?php
include 'calculatrice.php';
include 'personne.php';

// $calc = new Calctulatrice();

// $x= $calc->somme(12,15);

// // echo $x;

// $y= $calc->multiplication(2,5);

// // echo $y;

// $i = 'Andrianiaina';

$andry = new Personne(1);
$andry->setNom('Andrianiaina');
// $andry->prenom = 'XYZ';
// $andry->age = 25;
$andry->afficherInformation();

echo "<br/>";

$pers2 = new Personne(0);
$pers2->setNom('Sarah');
// $pers2->prenom = 'ABC';
// $pers2->age = 19;
$pers2->afficherInformation();

echo $pers2->getNom();

