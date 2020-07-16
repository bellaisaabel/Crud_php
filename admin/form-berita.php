<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
    <form action="proses-pendaftaran.php" method="POST">

				<label for="judul"><h2>Judul Berita</h2> </label>
				<input type="text" name="judul"/>
			

				<label for="isi"><h2>Isi Berita</h2></label>
				<textarea name="isi"></textarea>
		
				<label for="penulis"><h2>Penulis</h2> </label>
				<input type="text" name="penulis"></textarea>
				
				<p>
				<input type="submit" value="Simpan" name="daftar" />
				</p>
		</div>
	</form>
</div>
</body>
</html>