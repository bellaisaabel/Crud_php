<?php 

include 'koneksi.php';

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: list-berita.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM konten WHERE id=$id";
$query = mysqli_query($koneksi, $sql);
$konten = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Edit </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<header>
		<h3>Form Edit Berita</h3>
	</header>
	<div class="container">
	<form action="proses-edit.php" method="POST">
		
			
			<input type="hidden" name="id" value="<?php echo $konten['id'] ?>" />
		
		
			<label for="judul">Judul </label>
			<input type="text" name="judul" value="<?php echo $konten['judul'] ?>" />
		
			<label for="isi">Isi </label>
			<textarea name="isi"><?php echo $konten['isi'] ?></textarea>
		
			<label for="penulis">Penulis </label>
			<input type="text" name="penulis" value="<?php echo $konten['penulis'] ?>"/>
	
		
			<p>
			<input type="submit" value="Simpan" name="simpan" />
			</p>
		
	</form>
</div>
	
	</body>
</html>
