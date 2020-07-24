<?php 
include 'function.php';
$users= new utilisateur(1);
$users->set_name('Ibrahim');
$users->get_name();
echo $users->affichage();
print('<br/>');

$users1= new utilisateur(0);
$users1->set_name('MOUSSA');
$users1->get_name();
$users1->affichage();
print('<br/>');

$users1= new utilisateur(1);
$users1->set_name('Maladif');
$users1->get_name();
$users1->affichage();
print('<br/>');

$users1= new utilisateur(0);
$users1->set_name('Portable');
$users1->get_name();
$users1->affichage();