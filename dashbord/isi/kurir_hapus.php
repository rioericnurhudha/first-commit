<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
// menghapus data dari database
mysqli_query($koneksi,"delete from kurir where id_kurir='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:kurir_tampil.php");
 
?>