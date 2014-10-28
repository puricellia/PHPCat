<?php
	
	require('includes/util.inc.php');

	$form = '
		<form action="login.php" method="post">
			<input type="text" name="username">
			<input type="password" name="password">
			<input type="submit" value="Login">
		</form>
	';

	if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['username'])) {

		$username = $_POST['username'];
		$password = SHA1($_POST['password']);

		//Validation needed
		$q = 'SELECT userId, username, email, userStatus FROM users WHERE username=:username AND password=SHA1(:password)';
		$stmt = $pdo->prepare($q);
		$r = $stmt->execute(array(':username'=>$username, ':password'=>$password));

		if ($r) {
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
			$user = $stmt->fetch();
		}

		if ($user) {
			if($user->getUserStatus() != 2) {
				$_SESSION['user'] = $user;
				header("location:index.php");
				exit;
			} else {
				echo '<pre>Banned</pre>';
			}
		}

	}

	$pageTitle = 'Login';
	include('includes/header.inc.php');
	include('pages/login.html');

?>