<?php


class ManagerUser
{
	private $_db;

	public function __construct($db)
	{
		$this->setDb($db);
	}

	public function get($id) {
		$this->_db->query('SELECT * FROM users WHERE id="'$id.'"');
		while($data = $sql->fetch(PDO::FETCH_ASSOC)) {
			$user = new User();
			foreach($data as $prop -> $value) {
				$user->{$prop} = $value;
			}
		}
	}

	public function getByIdFB($id_fb) {
		$this->_db->query('SELECT * FROM users WHERE id_fb="'.$id_fb.'"');
		while($data = $sql->fetch(PDO::FETCH_ASSOC)) {
			$user = new User();
			foreach($data as $prop -> $value) {
				$user->{$prop} = $value;
			}
		}
	}

	public function add(User $user)
	{
		$this->_db->query('INSERT INTO user VALUES (NULL, "'.$user->id_fb.'", "'.$user->email.'", "'.$user->nom.'", "'.$user->prenom.'", "'.$user->genre.'", "'.$user->photo.'")');
	}

	public function update(User $user)
	{
		 $this->_db->query('UPDATE user SET id_fb = "'.$user->id_fb.'", email = "'.$user->email.'", nom = "'.$user->nom.'", prenom = "'.$user->prenom.'", genre = "'.$user->genre.'", photo = "'.$user->photo.'")');
	}

	public function setDb(PDO $db)
	{
		$this->_db = $db;
	}

}

function getUserId($id) {
	$manager->get($id);
	return $user;
}

function getUserId_Fb($id_fb) {
	$manager->getByIdFB($id_fb);
	return $user;
}

?>