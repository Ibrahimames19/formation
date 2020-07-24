<?php 
echo '<p>calculons lla somme des nombre pair compris enre 1 et 100</p>';
$som=0;
for ($i=0; $i <=100 ; $i++) { 
	if ($i%2==0) {
		$som=$som+$i;
	}

}
echo '<p>la somme des nombre compris entre 0 et 100 est :'. $som .'</p>';

?>

<?php 
echo '<hr/><p>calculons lla somme des nombre impair compris enre 1 et 100</p>';
$som=0;
for ($i=0; $i <=100 ; $i++) { 
	if ($i%2<>0) {
		$som=$som+$i;
	}

}
echo '<p>la somme des nombre compris entre 0 et 100 est :'. $som .'</p>';

?>

<?php 
echo '<hr/><p>Verification lla somme des nombre compris enre 1 et 100</p>';
$som=0;
for ($i=0; $i <=100 ; $i++) { 
	
		$som=$som+$i;
}
echo '<p>la somme des nombre compris entre 0 et 100 est :'. $som .'</p>';

?>