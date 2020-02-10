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
mysqli_query($con,"UPDATE dosen SET nidn='$nidn',nama='$nama',alamat='$alamat',jns_kelamin='$jns_kelamin',jabatan='$jabatan' WHERE nidn='$nidn'");

header('location: data1.php');
?>	