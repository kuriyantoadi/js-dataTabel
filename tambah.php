<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];


$cek_tambah = mysqli_query($koneksi, "INSERT INTO user Values('','$nama','$alamat','$status')");

if ($cek_tambah) {
    header("location:index.php");
} 
