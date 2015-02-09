<?php

// class correspondant à toutes les pdo du site

class ManagerUser
{
	private $db;

	public function __construct($db)
	{
		$this->setDb($db);
	}

	public function add(User $user)
	{
		$sql = $pdo->query('INSERT INTO user VALUES (NULL, "'.$id_fb.'", "'.$email.'", "'.$nom.'", "'.$prenom.'", "'.$genre.'")');
	}

	public function get($id) {
		$sql = $pdo->query('SELECT * FROM users WHERE id="'.$id.'"');
		while($data = $sql->fetch(PDO::FETCH_ASSOC)) {
			$user = new User();
			foreach($data as $prop -> $value) {
				$user->{$prop} = $value;
			}
		}
	}

	public function update(User $user)
	{
		 $sql = $pdo->query('UPDATE user SET id_fb = "'.$id_fb.'", email = "'.$email.'", nom = "'.$nom.'", prenom = "'.$prenom.'", genre = "'.$genre.'")');
	}

	public function setDb($pdo)
	{
		$this->$db = $pdo;
	}
}

function getUser($id) {
	$user = new User();
	$user->get($id);
	return $user;
}

?>