<?php
class User {

	private $id;
	private $id_FB;
	private $email_FB;
	private $firstname;
	private $lastname;
	private $picture;
	private $genre;

	

}

function getUser($id) {
	$user = new User();
	$user->get($id);
	return $user;
}

$invite = new User();
$invite->id_FB = okjgeroijoerijg;
$invite->create();

$perso = getUser($id);


?>