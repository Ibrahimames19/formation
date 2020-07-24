<?php

/**
 * Objet Personne
 */
class Personne{

	private $nom;
	private $prenom;
	private $age;
	private $sexe;
	
	function __construct($x)
	{
		if ($x == 1) {
			$this->sexe = "Homme";
		} else {
			$this->sexe = "Femme";
		}
	}

	public function afficherInformation()
	{
		echo "Mon nom est " . $this->nom . " " . $this->prenom . "et je suis " . $this->sexe . ", j'ai " . $this->age . "ans";
	}


	public function setNom($value)
	{
		$this->nom = $value;
	}

	public function getNom()
	{
		return $this->nom;
	}
}
 