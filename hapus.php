<?php
// koneksi database
include 'koneksi.php';

$id_user = $_GET['id_user'];
// menghapus data dari database
$cek_hapus = mysqli_query($koneksi, "delete from user where id_user='$id_user' ");

// mengalihkan halaman kembali ke index.php
if ($cek_hapus) {
    header("location:index.php");
} 