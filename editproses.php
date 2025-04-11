<?php 
include 'connect.php';

$id = $_POST['id'];
$namaTugas = $_POST['nama_tugas'];

// validasi
if (!empty($id) && !empty($namaTugas)) {
    mysqli_query($conn, "UPDATE tugas SET nama_tugas='$namaTugas' WHERE id='$id'");
}

header("location:todolist.php");
?>
