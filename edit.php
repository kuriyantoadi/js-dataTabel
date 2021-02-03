<?php

include 'koneksi.php';

$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];

$cek_edit = mysqli_query($koneksi, "UPDATE user SET
            nama='$nama',
            alamat='$alamat',
            status='$status'
             where id_user='$id_user'
             ");

if ($cek_edit) {
    header("location:index.php");
} 