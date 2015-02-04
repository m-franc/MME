<?php
	session_start();
	date_default_timezone_set('Europe/Paris');

	$host = "localhost";
	$user = "root";
	$pass = "";
	$bdd = "meetus";
	$db = mysqli_connect($host,$user,$pass,$bdd) or die("Error SQL" . mysqli_error($db));  
	
	include('class/user.class.php');
	include('class/event.class.php');

?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>MeetUs</title>
		<link rel="stylesheet" href="layout/css/jquery-ui.1.11.2.css">
		<link rel="stylesheet" href="layout/css/style.css">
		
		<script text="javascript" src="layout/js/jquery-ui.1.11.2.min.js"></script>
		<script text="javascript" src="layout/js/jquery-1.11.2.min.js"></script>
		<script text="javascript" src="layout/js/script.js"></script>
	</head>