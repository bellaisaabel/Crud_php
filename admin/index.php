<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class = "card">
	<img src="bg.jpg" alt="hai" style="width:100%">
	<h2>Halaman Admin</h2>
	
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>

	
		<p><button><a href="form-berita.php">Tambah Berita</a></button></p>
		<p><button><a href="list-berita.php">Lihat Berita</a></button></p>
		
	
	
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran siswa baru berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
	<?php endif; ?>

	<br/>
	<br/>

	</div>

</body>
</html>