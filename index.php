<?php

	require('includes/util.inc.php');

	$pageTitle = 'Home';
	include('includes/header.inc.php');

	echo "Hello <i>" . $user->getUsername() . "</i><br />";

	$cat = new cat('Freddles');
	$cat->breed(1);
	$cat->getHunger();
	$cat->getHealth();

	echo "Name: " . $cat->name;
	echo "Happiness: " . $cat->getHappiness();

?>
