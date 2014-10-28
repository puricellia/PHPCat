<?php
	
	require('includes/util.inc.php');

	$form = '
		<form action="register.php" method="post">
			<input type="text" name="username">
			<input type="text" name="email">
			<input type="password" name="password">
			<input type="submit" value="Register">
		</form>
	';

	if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['username'])) {

		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = SHA1($_POST['password']);

		$q = 'SELECT username FROM users WHERE username = :username';
		$stmt = $pdo->prepare($q);
		$stmt->bindParam(':username', $username);
		$stmt->execute();

			if($stmt->rowCount() > 0) {
				echo "<pre>This username has already been taken</pre>";
			} else {
				$qi = 'INSERT INTO users ( username, password, email ) VALUES ( :username, SHA1(:password), :email )';
			    $query = $pdo->prepare($qi);
			    $result = $query->execute( array( ':username'=>$username, ':password'=>$password, ':email'=>$email ) );

			    if($result) {
			      echo '<pre>Registered</pre>';
			    } else {
			      echo '<pre>Error, please try again</pre>';
			    }
			}

	}

	$pageTitle = 'Register';
	include('includes/header.inc.php');
	include('pages/register.html');

?>