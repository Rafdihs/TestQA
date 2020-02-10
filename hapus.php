<?php
include 'koneksi.php';

$con = mysqli_connect("localhost", "root", "", "belajar");
$nim= $_GET['id'];

mysqli_query($con,"DELETE  from mahasiswa WHERE nim='$nim'");

header('location: data.php');
?>