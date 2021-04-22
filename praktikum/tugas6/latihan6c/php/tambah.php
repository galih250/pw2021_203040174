<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['tambah'])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'admin.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'admin.php';
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
    <title>Form Tambah Data Buku</title>
    <link rel="stylesheet" href="../assets/css/form.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body>

<div class="container" style="margin-top:50px;">
<div class="alert alert-dark" role="alert"style="width:500px;">
  <h3>Tambah Data!</h3>
</div>

<div class="row">
<div class="col-6">
<form>
  <div class="form-group">
    <label for="formGroupExampleInput" >Gambar</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Gambar Buku" style="width:500px;">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Judul</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Judul Buku" style="width:500px;">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Pengarang</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Pengarang" style="width:500px;">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Terbit</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Tahun Terbit" style="width:500px;">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Dimensi</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Halaman Dimensi" style="width:500px;">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">ISBN</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="NO ISBN" style="width:500px;">
  </div>
</form>

</div>
<div class="col-4">
<button type="submit" class="btn btn-outline-secondary" name="tambah">Tambahkan</button>
<button type="submit" class="btn btn-outline-secondary"><a href="../index.php">Kembali</a> </button>

</div>

</div>


</div>

</body>

</html>