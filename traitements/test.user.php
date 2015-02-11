<?php
print_r($_POST);
if($_POST['id_fb'] != '') {
	
	$personne = new User();

	$personne->setNom($_POST['nom']);
	$personne->setId_fb($_POST['id_fb']);
	$personne->setPrenom($_POST['prenom']);
	$personne->setEmail($_POST['email']);
	$personne->setGenre($_POST['genre']);
	$personne->setPhoto($_POST['photo']);

	$manager->add($personne);

	echo'profil en base';

}


?>