<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo (isset($pageTitle)) ? $pageTitle : 'PHPCat'; ?></title>

	<body>
		<nav>
			<ul>
				<li><a href="index.php">Index</a></li>
					<?php

						if($user) {
							echo '<li><a href="logout.php">Logout</a></li>';
							if($user->isAdmin() == 1) {
								echo '<li><a href="users.php">Users</a></li>';
							}

								$userId = $user->getUserId();

								$q = 'SELECT catName FROM cats WHERE userId = :userId';
								$stmt = $pdo->prepare($q);
								$stmt->bindParam(':userId', $userId);
								$stmt->execute();

									if($stmt->rowCount() > 0) {
										$stmt->setFetchMode(PDO::FETCH_CLASS, 'Cat');
										$cat = $stmt->fetch();

										if($cat) {
											$_SESSION['cat'] = $cat;
										}
									}

						} elseif(!$user) {
							echo '<li><a href="login.php">Login</a></li>';
							echo '<li><a href="register.php">Register</a></li>';
						} 
					?>
			</ul>
		</nav>
