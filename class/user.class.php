<?php

class User {

	public $id;
	public $id_fb;
	public $email;
	public $nom;
	public $prenom;
	public $genre;


	public function setId_fb($id_fb) {
		if(is_string($id_fb)) {
			$this->id_fb = strip_tags(stripslashes($id_fb));
		}
	}
	
	public function setNom($nom) {
		if(is_string($nom)) {
			$this->nom = strip_tags(stripslashes($nom));
		}
	}

	public function setPrenom($prenom) {
		if(is_string($prenom)) {
			$this->prenom = strip_tags(stripcslashes($prenom));
		}
	}

	public function setEmail($email) {
		if(is_string($email) && preg_match('/^[a-zA-Z0-9._-]+@{1}[a-z0-9_-]{2,}\.[a-z]{2,4}$/', $email)) {
			$this->email = $email;
		}
	}

	public function setGenre($genre) {
		if(is_string($genre)) {
			$this->genre = strip_tags(stripslashes($genre));
		}
	}
}



?>