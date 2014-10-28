<?php

	require('includes/util.inc.php');

	$pageTitle = 'Home';
	include('includes/header.inc.php');

	if($user) {
		echo "Hello <i>" . $user->getUsername() . "</i><br />";
	}

	$cat = new cat('Freddles');
	$cat->getBreed(1);
	$cat->getHunger();
	$cat->getHealth();

?>
