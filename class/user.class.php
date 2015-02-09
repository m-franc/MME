<?php
class User {

	private $id;
	private $id_fb;
	private $email;
	private $nom;
	private $prenom;
	private $genre;

	
	public function hydrate(array $donnees) {
	  
	  foreach ($donnees as $key => $value) {
	    // On récupère le nom du setter correspondant à l'attribut.
	    $method = 'set'.ucfirst($key);
	        
	    // Si le setter correspondant existe.
	    if (method_exists($this, $method))
	    {
	      // On appelle le setter.
	      $this->$method($value);
	    }
	  }
	}


	public function id() {
		return $this->id;
	}

	public function id_fb() {
		return $this->id_fb;
	}

	public function nom() {
		return $this->nom;
	}

	public function prenom() {
		return $this->prenom;
	}

	public function email() {
		return $this->email;
	}

	public function genre() {
		return $this->genre;
	}
	
	public function setNom($nom) {
		if(is_string($nom)) {
			$this->nom = $nom;
		}
	}

	public function setPrenom($prenom) {
		if(is_string($prenom)) {
			$this->prenom = $prenom;
		}
	}

	public function setEmail($email) {
		if(is_string($email) && preg_match('/^[a-zA-Z0-9._-]+@{1}[a-z0-9_-]{2,}\.[a-z]{2,4}$/', $email)) {
			$this->email = $email;
		}
	}

	public function setGenre($genre) {
		if(is_string($genre)) {
			$this->genre = $genre;
		}
	}
}



?>