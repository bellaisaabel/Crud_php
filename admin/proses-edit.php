<?php

include 'koneksi.php';

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
	$id = $_POST['id'];
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$penulis = $_POST['penulis'];
	
	
	// buat query update
	$sql = "UPDATE konten SET judul='$judul', isi='$isi', penulis='$penulis' WHERE id=$id";
	$query = mysqli_query($koneksi, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: list-berita.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
