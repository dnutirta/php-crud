<!DOCTYPE html>
<html>
<head>
<title>pemograman3.com</title>
</head>
<?php
//koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
if(!empty($_POST['save'])){
	$nama = $_POST['nama'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	$status = $_POST['status'];
	//menginput data ke database
	$a=mysqli_query($koneksi,"insert into userr values('','$nama','$password','$level','$status')");
	if($a){
		//mengalihkan halaman kembali
		header("location:tampil_user.php");
	}else{
		echo mysqli_error();
	}
}

?>
<body>
<h2>pemograman 3 2022</h2>
<br/>
<a href="koneksi.php">KEMBALI</a>
<br/>
<br/>
<h3>TAMBAH DATA USER</h3>
<form method="POST">
<table>
<tr>
<td>nama</td>
<td><input type="Text" name="nama"></td>
<tr/>
<tr>
<td>password</td>
<td><input type="number" name="password"></td>
<tr/>
<tr>
<td>level</td>
<td><select name="level">
<option value="">-----pilih</option>
<option value="1">Admin</option>
<option value="2">Staff</option>
<option value="3">Spv</option>
<option value="4">Mgr</option>
</select>
</td>
</tr>
<tr>
<td>status</td>
<td><select name="status">
<option value="">-----pilih</option>
<option value="1">Aktif</option>
<option value="0">Tdk aktif</option>
</select>
</td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="save"></td>
</tr>
</table>
</form>
</body>
</html>