<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jns_kelamin = $_POST['jns_kelamin'];
$nohp = $_POST['nohp']; 
// menginput data ke database
	$sql	= 'INSERT into mahasiswa (nim,nama,alamat,jns_kelamin,nohp) values ("'.$nis.'","'.$nama.'","'.$alamat.'","'.$jns_kelamin.'","'.$nohp.'")';
	$query	= mysqli_query($con,$sql);

header('location: data.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel 
?>	