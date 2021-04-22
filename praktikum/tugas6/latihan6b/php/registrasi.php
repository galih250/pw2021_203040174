<?php
/*
    Linggih Kusumah Dilagga
    203040174
    Jumat,13.00
*/
?>

<?php
require 'functions.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "
			<script>
				alert('Registrasi Berhasil');
        document.location.href = 'login.php';
			</script>
		";
  } else {
    echo "
			<script>
				alert('Registrasi Gagal');
			</script>
		";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form method="post" action="">
    <table>
      <tr>
        <td><label for="username">Username</label></td>
        <td>:</td>
        <td><input type="text" name="username"></td>
      </tr>
      <tr>
        <td><label for="password">Password</label></td>
        <td>:</td>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <td><label for="password2">Konfirmasi Password</label></td>
        <td>:</td>
        <td><input type="password" name="password2" id="password2"></td>
      </tr>
    </table>
    <button type="submit" name="register">Register</button>
    <form>

</body>

</html>