<?php 
include 'connect.php';

$namaTugas = $_POST['nama_tugas'];

mysqli_query($conn, "INSERT INTO tugas (nama_tugas) VALUES ('$namaTugas')");

header("Location: todolist.php");
exit;
?>
