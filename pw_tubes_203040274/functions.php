<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_tubes_203040174');
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function upload()
{
  $nama_file = $_FILES["gambar"]["name"];
  $tipe_file = $_FILES["gambar"]["type"];
  $ukuran_file = $_FILES["gambar"]["size"];
  $error = $_FILES["gambar"]["error"];
  $tmp_file = $_FILES["gambar"]["tmp_name"];

  // cek apakah tidak ada gambar yg diupload
  if ($error == 4) {
    // echo "
    //     <script>
    //         alert('pilih gambar terlebih dahulu');
    //     </script>
    //     ";
    return 'nofoto.jpg';
  }

  // cek apakah yang diupload hanya gambar
  $daftar_Gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));

  if (!in_array($ekstensi_file, $daftar_Gambar)) {
    echo "
            <script>
                alert('yang anda pilih bukan gambar');
            </script>
        ";
    return false;
  }

  // cek tipe file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "
            <script>
                alert('yang anda pilih bukan gambar');
            </script>
        ";
    return false;
  }

  // cek jika ukurannya terlalu besar
  if ($ukuran_file > 5000000) {
    echo "
            <script>
                alert('ukuran gambar terlalu besar');
            </script>
        ";
    return false;
  }

  // lolos pengecekan
  // siap upload
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;

  move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();

  $Judul = htmlspecialchars($data['Judul']);
  $Pengarang = htmlspecialchars($data['Pengarang']);
  $Terbit = htmlspecialchars($data['Terbit']);
  $Dimensi = htmlspecialchars($data['Dimensi']);
  $ISBN = htmlspecialchars($data['ISBN']);
  // $gambar = htmlspecialchars($data['gambar']);

  $Gambar = upload();

  if (!$Gambar) {
    return false;
  }

  $query = "INSERT INTO
             books
            VALUES
            (null, '$Judul', '$Pengarang', '$Terbit', '$Dimensi', '$ISBN', ' $Gambar);
          ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();

  // menghapus gambar di folder
  $book = query("SELECT * FROM books WHERE id = $id");
  if ($book['Gambar'] != 'nofoto.jpg') {
    unlink('Gambar/' . $jpg['Gambar']);
  }

  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $Judul = htmlspecialchars($data['Judul']);
  $Pengarang = htmlspecialchars($data['Pengarang']);
  $Terbit = htmlspecialchars($data['Terbit']);
  $Dimensi = htmlspecialchars($data['Dimensi']);
  $ISBN = htmlspecialchars($data['ISBN']);
  $Gambar_lama = htmlspecialchars($data['gambar_lama']);

  $Gambar = upload();

  if (!$Gambar) {
    return false;
  }

  if ($Gambar == 'nofoto.jpg') {
    $Gambar = $gambar_lama;
  }

  $query = "UPDATE books SET
              Judul = '$Judul',
              Pengarang = '$Pengarang',
              Terbit = '$Terbit',
              Dimensi = '$Dimensi',
              ISBN = '$ISBN',
              Gambar = '$Gambar'
            WHERE id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM books
              WHERE 
            Judul LIKE '%$keyword%' OR
            Pengarang LIKE '%$keyword%'
          ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek dulu username 
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
    // cek password
    if (password_verify($password, $user['password'])) {
      // set session
      $_SESSION['login'] = true;

      header("Location: index.php");
      exit;
    }
  }

  return [
    'error' => true,
    'pesan' => 'Username / Password Salah!'
  ];
}


function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // jika username / password kosong
  if (empty($username) || empty($password2) || empty($password2)) {
    echo "<script>
            alert('username / password tidak boleh kosong!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika username sudah ada 
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
            alert('username sudah terdaftar!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika konfirmasi password tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
            alert('konfirmasi password tidak sesuai!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika password < 5 digit
  if (strlen($password1) < 5) {
    echo "<script>
            alert('password terlalu pendek!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika username & password sudah sesuai
  // enkripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  // insert ke tabel user
  $query = "INSERT INTO user
              VALUES
            (null, '$username', '$password_baru')
          ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}