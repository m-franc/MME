<?php

// class correspondant à toutes les pdo du site

class ManagerUsers
{
	private $_db;

	public function __construct($db)
	{
		$this->setDb($db);
	}

	public function add(Users $user)
	{
		$sql = $pdo->query('INSERT INTO user VALUES (NULL, "'.$id_fb.'", "'.$email.'", "'.$nom.'", "'.$prenom.'", "'.$genre.'")');
	}

	public function get($id) {
		$sql = $pdo->query('SELECT * FROM users WHERE id="'.$_id.'"');
		while($data = $sql->fetch(PDO::FETCH_ASSOC)) {
			$user = new User();
			foreach($data as $prop -> $value) {
				$user->{$prop} = $value;
			}
		}
	}

	public function getListUser()
	{
		// tableau avec tous les user
	}

	public function update(Users $user)
	{
		// modifier un user 
	}

	public function setDb($db)
	{
		$this->$_db = $db;
	}
}

function getUser($id) {
	$user = new User();
	$user->get($id);
	return $user;
}

?>