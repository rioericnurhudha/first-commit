<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
// menghapus data dari database
mysqli_query($koneksi,"delete from admin_pemdes_ekspres where id_admin='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:tampil_adminpemdesekspres.php");
 
?>