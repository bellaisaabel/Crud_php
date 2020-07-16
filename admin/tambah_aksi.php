<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$penulis = $_POST['penulis'];

// menginput data ke database
mysqli_query($koneksi,"insert into konten values('','$judul','$isi','$penulis')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>