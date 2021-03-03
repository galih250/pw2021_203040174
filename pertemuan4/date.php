<?php
/* 
    Linggih Kusumah Dilagga
    203040174
    github.com/galih250/pw2021_203040174
    Pertemuan 4( 22 Februari 2021 )
    Materi Minggu ini mempelajari mengenai Function
*/
?>

<?php 
    // Date
    // Untuk menampilkan tanggal data dengan format tertentu
    //  echo date("l, d-M-Y");

    // Time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 Januari 1970
    // echo time();
    // echo date("d M Y", time()-60*60*24*100)

    // Mkime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    //  echo date("l, d M Y", mktime(0,0,0,5,22,2001));

    // strtotime
    echo date("l",strtotime("25 aug 1985"));


    // String
    // strlen()  menghitung panjang sebuah string
    // strcmp() menggabung string
    // explode() jika ingin memecah sebuah file
    // htmlspecialchars() menjaga(sederhana) website dari hacker


    // Utility
    // var_dump() mencetak sebuah isi
    // isset() mengecek sudah membuat variabel/belum
    // empty() variabel sudah ada sudah berisi/belum 
    // die() memberhentikan program
    // sleep() memberhentikan sementara
?>