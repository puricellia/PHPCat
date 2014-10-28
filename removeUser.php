<?php
	
	require('includes/util.inc.php');

	$s = 0;

	if($user->isAdmin() == 1) {

		$username = $_GET['username'];

			$q = "DELETE FROM users WHERE username =  :username";
		    $stmt = $pdo->prepare( $q );
		    $r = $stmt->execute(array(':username'=>$username));

		    $s = 1;

	} else {

		echo "Access Denied!";

	}

	if($s == 1) {

		header("location:users.php?q=$username");
		exit;

	}
	

	$pageTitle = 'Remove User' . $_GET['username'];
	include('includes/header.inc.php');

?>