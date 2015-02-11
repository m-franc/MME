<?php
	session_start();
	date_default_timezone_set('Europe/Paris');

	try {
	    $db = new PDO('mysql:host=localhost;dbname=seeyouthere', 'root', '');
	}
	catch(Exception $e) {
	    echo 'Echec de la connexion à la base de données';
	    exit();
	}

	require('class/user.class.php');
	require('class/user.manager.php');
	//require('class/event.class.php');
	//require('class/event.manager.php');

	$manager = new ManagerUser($db);
?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>See You There</title>
		<link rel="stylesheet" href="layout/css/jquery-ui.1.11.2.css">
		<link rel="stylesheet" href="layout/css/style.css">
		
		<script text="javascript" src="layout/js/jquery-1.11.2.min.js"></script>
		<script text="javascript" src="layout/js/jquery-ui.1.11.2.min.js"></script>
		<script text="javascript" src="layout/js/script.js"></script>
	</head>