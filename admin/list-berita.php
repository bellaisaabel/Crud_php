<?php include 'koneksi.php';
 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<header>
		<h3>DAFTAR BERITA</h3>
	</header>
	
	<nav>
		<a href="form-berita.php">[+] Tambah Baru</a>
	</nav>
	
	<br>
	
	<table border="1">
	<thead>
		<tr>
			<th>Judul</th>
			<th>Isi</th>
			<th>Penulis</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM konten";
		$query = mysqli_query($koneksi, $sql);
		
		while($berita = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$berita['judul']."</td>";
			echo "<td>".$berita['isi']."</td>";
			echo "<td>".$berita['penulis']."</td>";
			
			
			echo "<td>";
			echo "<a href='form-edit.php?id=".$berita['id']."'>Edit</a> | ";
			echo "<a href='hapus.php?id=".$berita['id']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?> Berita</p>
	<br/>
	<a href="logout.php">LOGOUT</a>

	</body>
</html>
