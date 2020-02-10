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
mysqli_query($con,"UPDATE mahasiswa SET nim='$nim',nama='$nama',alamat='$alamat',jns_kelamin='$jns_kelamin',nohp='$nohp' WHERE nim='$nim'");

header('location: data.php');
?>	