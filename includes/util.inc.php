<?php 

	function class_loader($class) {
		require 'classes/' . $class . '.class' . '.php';
	}

	spl_autoload_register('class_loader');

	session_start();
	$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : null;
	$cat = (isset($_SESSION['cat'])) ? $_SESSION['cat'] : null;

	try {
		$pdo = new PDO('mysql:dbname=phpcat; host=localhost', 'root', '');
	} catch (PDOException $e) {
		$pageTitle = 'Error!';
		include('header.inc.php');
		include('../pages/error.html');
		exit();
	}