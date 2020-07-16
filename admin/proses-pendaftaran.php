<?php

include 'koneksi.php';

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data 
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$penulis = $_POST['penulis'];
	
	
	// buat query
	mysqli_query($koneksi,"insert into konten values('','$judul','$isi','$penulis')");
    header("location:index.php");
}

?>
