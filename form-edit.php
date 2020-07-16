<?php 

include 'config.php';

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
	<title>Membuat CRUD</title>
</head>

<body>
	<header>
		<h3>Form Edit Berita</h3>
	</header>
	
	<form action="proses-edit.php" method="POST">
		
		<fieldset>
			
			<input type="hidden" name="id" value="<?php echo $konten['id'] ?>" />
		
		<p>
			<label for="judul">Judul </label>
			<input type="text" name="judul"  value="<?php echo $konten['judul'] ?>" />
		</p>
		<p>
			<label for="isi">Isi</label>
			<textarea name="isi"><?php echo $konten['isi'] ?></textarea>
		</p>
        <p>
			<label for="penulis">Penulis </label>
			<textarea name="penulis"><?php echo $konten['penulis'] ?></textarea>
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
		
	
	</form>
	
	</body>
</html>
