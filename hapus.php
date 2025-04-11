<?php 
// koneksi database
include 'connect.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from tugas where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:todolist.php");
 
?>
