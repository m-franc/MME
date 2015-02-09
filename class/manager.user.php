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
		// ajouter un user
	}

	public function getUser($id)
	{
		// recuperer un user
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

?>


// read, delete, update