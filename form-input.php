<!DOCTYPE html>
<html>
<head>
	<title>halaman input data</title>
</head>
<body><center>
<h2>input data pasien</h2>
<a href="index.php" style="padding: 0.4% 0.8%;background-color: #009900;color: #fff;border-radius: 2px;text-decoration: none;">data pasien</a><br><br>


<form action="" method="POST">
	<table>
		        <tr>
					<td>norm</td>
					<td>:</td>
					<td><input type="text" name="norm" placeholder="" required></td>
				</tr>
				<tr>
					<td>noidpasien</td>
					<td>:</td>
					<td><input type="text" name="noidpasien" placeholder="" required></td>
				</tr>
				<tr>
					<td>jenisid</td>
					<td>:</td>
					<td><input type="number" name="jenisid" placeholder="'KTP','SIM','Paspor','dll'" required></td>
				</tr>
				<tr>
					<td>namapasien</td>
					<td>:</td>
					<td><input type="text" name="namapasien" placeholder="" required></td>
				</tr>
				<tr>
					<td>alamat</td>
					<td>:</td>
					<td><input type="datetime" name="alamat" placeholder="" required></td>
				</tr>
				<tr>
					<td>agama</td>
					<td>:</td>
					<td><input type="datetime" name="agama" placeholder="'islam','katolik','kristen','hindu'" required></td>
				</tr>
				<tr>
					<td>golongandarah</td>
					<td>:</td>
					<td><input type="datetime" name="golongandarah" placeholder="'A','B','AB','O'" required></td>
				</tr>
				<tr>
					<td>tanggallahir</td>
					<td>:</td>
					<td><input type="datetime" name="tanggallahir" placeholder="" required></td>
				</tr>
				<tr>
					<td>jeniskelamin</td>
					<td>:</td>
					<td><input type="datetime" name="jeniskelamin" placeholder="'Perempuan','Laki-laki'" required></td>
				</tr>
				<tr>
					<td>waktudaftar</td>
					<td>:</td>
					<td><input type="datetime" name="waktudaftar" placeholder="" required></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="simpan" value="simpan"></td>
				</tr>
	</table>
</form>
<?php 
include 'koneksi.php';
if (isset($_POST['simpan'])) {
$insert = mysqli_query($conn, "INSERT INTO pasien VALUES 
			('".$_POST['norm']."',
			'".$_POST['noidpasien']."',
			'".$_POST['jenisid']."',
			'".$_POST['namapasien']."',
			'".$_POST['alamat']."',
			'".$_POST['agama']."',
			'".$_POST['golongandarah']."',
			'".$_POST['tanggallahir']."',
			'".$_POST['jeniskelamin']."',
			'".$_POST['waktudaftar']."')");
	 if ($insert) {
	 	 echo 'berhasil disimpan';
	 }else{
	 	'gagal disimpan';
	 }
 }
 ?>
 <!-- footer -->
    <footer><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="container">
            <small style="padding: 10px 0; background-color: #333; color: #fff; text-align: center;">Copyright &copy; 2021 - Nama : M.OKI, Npm : 1955201004</small>
        </div>
    </footer>
</body></center>
</html>