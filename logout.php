<?php
	
	require('includes/util.inc.php');

	if ($user) {

		$user = null;
		$_SESSION = array();
		setcookie(session_name(), false, time()-3600);

		session_destroy();

		$pageTitle = 'Logout';
		include('includes/header.inc.php');
		include('pages/logout.html');

	}
?>