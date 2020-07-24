<?php 
/**
 * 
 */
class  utilisateur
{
	protected $nom;
	protected $sexe;
	protected $pass;
	protected $role ;
	
	function __construct($rol) {
		if ($rol == 0) {
			$this->role =' Administrateur';
		} 
		else {
			$this->role = ' un simple uilisateur';
		}

	}
	public function affichage()
	{	
		echo "Vous etes connecté en tant qu ". $this->role ." monsieur ".$this->nom.'<br/>' ;
		print('<br/>');
	}


	public function set_name($value)
	{
		$this->nom = $value;
	}

	public function get_name()
	{
		return $this->nom;
	}
}


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