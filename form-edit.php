<?php
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM pasien WHERE norm = '".$_GET['norm']."'");
$result = mysqli_fetch_array($data_edit); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>halaman edit data</title>
</head>
<body>
<h2>edit data pasien</h2>
<a href="index.php" style="padding: 0.4% 0.8%;background-color: #009900;color: #fff;border-radius: 2px;text-decoration: none;">data pasien</a><br><br>


<form action="" method="POST">
	<table>
		        <tr>
					<td>norm</td>
					<td>:</td>
					<td><input type="text" name="norm" value="<?php echo $result['norm'] ?>" required></td>
				</tr>
				<tr>
					<td>noidpasien</td>
					<td>:</td>
					<td><input type="text" name="noidpasien" value="<?php echo $result['noidpasien'] ?>" required></td>
				</tr>
				<tr>
					<td>jenisid</td>
					<td>:</td>
					<td><input type="number" name="jenisid" value="<?php echo $result['jenisid'] ?>" required></td>
				</tr>
				<tr>
					<td>namapasien</td>
					<td>:</td>
					<td><input type="text" name="namapasien" value="<?php echo $result['namapasien'] ?>" required></td>
				</tr>
				<tr>
					<td>alamat</td>
					<td>:</td>
					<td><input type="datetime" name="alamat" value="<?php echo $result['alamat'] ?>" required></td>
				</tr>
				<tr>
					<td>agama</td>
					<td>:</td>
					<td><input type="datetime" name="agama" value="<?php echo $result['agama'] ?>" required></td>
				</tr>
				<tr>
					<td>golongandarah</td>
					<td>:</td>
					<td><input type="datetime" name="golongandarah" value="<?php echo $result['golongandarah'] ?>" required></td>
				</tr>
				<tr>
					<td>tanggallahir</td>
					<td>:</td>
					<td><input type="datetime" name="tanggallahir" value="<?php echo $result['tanggallahir'] ?>" required></td>
				</tr>
				<tr>
					<td>jeniskelamin</td>
					<td>:</td>
					<td><input type="datetime" name="jeniskelamin" value="<?php echo $result['jeniskelamin'] ?>" required></td>
				</tr>
				<tr>
					<td>waktudaftar</td>
					<td>:</td>
					<td><input type="datetime" name="waktudaftar" value="<?php echo $result['waktudaftar'] ?>" required></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="edit" value="simpan"></td>
				</tr>
	</table>
</form>
<?php 
if (isset($_POST['edit'])) {
	$update = mysqli_query($conn, "UPDATE pasien SET norm = '".$_POST['norm']."', 
		noidpasien = '".$_POST['noidpasien']."', 
		jenisid = '".$_POST['jenisid']."', 
		namapasien = '".$_POST['namapasien']."', 
		alamat = '".$_POST['alamat']."', 
		agama = '".$_POST['agama']."', 
		golongandarah = '".$_POST['golongandarah']."', 
		tanggallahir = '".$_POST['tanggallahir']."', 
		jeniskelamin = '".$_POST['jeniskelamin']."', 
		waktudaftar = '".$_POST['waktudaftar']."' WHERE norm = '".$_GET['norm']."'");
	if ($update) {
		echo 'berhasil edit';
	}else{
		echo 'gagal edit';
	}
 }
 ?>
</body>
</html>