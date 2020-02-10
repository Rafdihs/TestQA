<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jns_kelamin = $_POST['jns_kelamin'];
$jabatan = $_POST['jabatan']; 
// menginput data ke database
	$sql	= 'INSERT into dosen (nidn,nama,alamat,jns_kelamin,jabatan) values ("'.$nidn.'","'.$nama.'","'.$alamat.'","'.$jns_kelamin.'","'.$jabatan.'")';
	$query	= mysqli_query($con,$sql);

header('location: data1.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel 
?>	