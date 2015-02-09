<?php
class User {

	public $id;
	public $id_FB;
	public $email_FB;
	public $firstname;
	public $lastname;
	public $picture;
	public $genre;

	public function get($id) {
		$sql = $pdo->query('SELECT * FROM users WHERE id="'.$_id.'"');
		while($data = $sql->fetch(PDO::FETCH_ASSOC)) {
			$user = new User();
			foreach($data as $prop -> $value) {
				$user->{$prop} = $value;
			}
		}
	}

	public function create() {
		
	}

	public function update() {

	}

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