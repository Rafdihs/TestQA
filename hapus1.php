<?php
include 'koneksi.php';

$con = mysqli_connect("localhost", "root", "", "belajar");
$nidn= $_GET['id'];

mysqli_query($con,"DELETE  from dosen WHERE nidn='$nidn'");

header('location: data1.php');
?>