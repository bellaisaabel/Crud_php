<?php
include 'koneksi.php';

$query="SELECT * FROM konten";
$result = mysqli_query($koneksi, $query);
?>



<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan PHP mysql</title>
</head>
<body>


<?php if(mysqli_num_rows($result) > 0)
{
 while($row =mysqli_fetch_array($result))
 {
	 echo "" . $row['judul']."<br>";
	 echo "-----------------------------------------------------------------------------";
	echo"<br>";
	echo "" . $row['isi']."<br>";
	echo"<br>"; 
  	echo "Penulis : " . $row['penulis']. "<br>";
	echo "<br><br>";
	
 }
}
?>




	<h2>Login Untuk Admin</h2>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>


	<br/>
	<br/>
	<form method="post" action="cek_login.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>			
	</form>
</body>
</html>