<?php
 
	echo '<h1> cest un tableau a un seul ligne </h1>';
	$user = array(
		'nom' => 'ANDRY',
		'Prenom' => 'Ramano',
		'age' => 25,
		'adresse' => 'Antananarivo'
	);
 // insertion des nouvelle elements dans le tableau
	
	// affichage de tout les elements
	foreach ($user as $key => $value) {
		echo $value;
	} 
?>
<hr/>
<?php 
$personne = array(
	array(
		'nom' => 'ABC', 
		'age' =>112
	),
	array(
		'nom' => 'AMONNG', 
		'age' =>82
	),
	array(
		'nom' => 'ZERFG', 
		'age' =>12
	),
	array(
		'nom' => 'DLFKEJ', 
		'age' =>13
	)
);

foreach ($personne as $key1 => $value) {
		// echo $key1 .':' .($key1 +1).'<br/>';
foreach ($value as $key2 => $value2) {	
		echo '<p> <strong>'. $key2 .'</strong> :' .$value2. '</p><br/>'; 
				}
			}
	?>
							