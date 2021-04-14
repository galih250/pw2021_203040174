<?php 

//fungsi untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040174");

    return $conn;
}

//function untuk melakukan query dan memasukannya ke dalam array
function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);
    $row = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

//fungsi untuk menambahkan data di dalam database
function klik($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['Gambar']);
    $judul = htmlspecialchars($data['Judul']);
    $pengarang = htmlspecialchars($data['Pengarang']);
    $terbit = htmlspecialchars($data['Terbit']);
    $dimensi = htmlspecialchars($data['Dimensi']);
    $ISBN = htmlspecialchars($data['ISBN']);

    $query = "INSERT INTO books
				VALUES
			  ('', '$gambar', '$judul', '$pengarang', '$terbit', '$dimensi', '$ISBN')
			";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}



?>