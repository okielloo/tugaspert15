<?php 
include 'koneksi.php';
if(isset($_GET['norm'])){
	$delete = mysqli_query($conn, "DELETE FROM pasien WHERE norm = '".$_GET['norm']."' ");
	header('location:index.php');
 }
 ?>
