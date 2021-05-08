<?php  
session_start();

if (isset($_SESSION['login'])) {
	header("Location: index.php");
	exit;
}

require 'functions.php';

// ketika tombol login ditekan
if (isset($_POST['login'])) {
	$login = login($_POST);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h3>Form Login</h3>
	<?php if (isset($login['error'])) : ?>
	<p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
	<?php endif; ?>
	<form action="" method="post">
		<ul>
			<li>
				<label>
					Username :
					<input type="text" name="username" autofocus autocomplete="off" required> 
				</label>
			</li>
			<li>
				<label>
					Password :
					<input type="password" name="password">
				</label>
			</li>
			<li>
				<button type="submit" name="login">Login</button>
			</li>
			<li>
				<a href="registrasi.php">Registrasi</a>
			</li>
		</ul>
	</form>
</body>
</html>