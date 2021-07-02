<!DOCTYPE html>
<html>
<head>
	<title>halaman data pasien</title>
</head>
<body><center>
<h2>data pasien</h2>
<a href="form-input.php" style="padding: 0.4% 0.8%;background-color: #009900;color: #fff;border-radius: 2px;text-decoration: none;">tambah data</a><br><br>
<table border="1" cellspacing="0" width="50%">
	<tr style="text-align: center; font-weight: bold;background-color: #eee;">
		<td>no</td>
		<td>norm</td>
		<td>noidpasien</td>
		<td>jenisid</td>
		<td>namapasien</td>
		<td>alamat</td>
		<td>agama</td>
		<td>golongandarah</td>
		<td>tanggallahir</td>
		<td>jeniskelamin</td>
		<td>waktudaftar</td>
		<td>opsi</td>
	</tr>
    <?php 
    include 'koneksi.php';
    $no = 1;
    $select = mysqli_query($conn, "SELECT * FROM pasien");
    if(mysqli_num_rows($select) > 0){
    while ($hasil = mysqli_fetch_array($select)){
     ?>
	<tr style="text-align: center;">
		<td><?php echo $no++ ?></td>
		<td><?php echo $hasil['norm'] ?></td>
		<td><?php echo $hasil['noidpasien'] ?></td>
		<td><?php echo $hasil['jenisid'] ?></td>
		<td><?php echo $hasil['namapasien'] ?></td>
		<td><?php echo $hasil['alamat'] ?></td>
		<td><?php echo $hasil['agama'] ?></td>
		<td><?php echo $hasil['golongandarah'] ?></td>
		<td><?php echo $hasil['tanggallahir'] ?></td>
		<td><?php echo $hasil['jeniskelamin'] ?></td>
		<td><?php echo $hasil['waktudaftar'] ?></td>
		<td>
			<a href="form-edit.php?norm=<?php echo $hasil['norm'] ?>">edit</a> ||
			<a href="delete.php?norm=<?php echo $hasil['norm'] ?>">hapus</a>
		</td>
	</tr>
<?php }}else{ ?>
<tr>
	<td colspan="12" align="center">Data Kosong</td>
</tr>
<?php } ?>	
</table>
<!-- footer -->
    <footer><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="container">
            <small style="padding: 10px 0; background-color: #333; color: #fff; text-align: center;">Copyright &copy; 2021 - Nama : M.OKI, Npm : 1955201004</small>
        </div>
    </footer>
</body></center>
</html>