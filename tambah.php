<?php
session_start();
include 'connect.php';

$firstName = trim($_POST['firstName']);
$email = trim($_POST['email']);
$password = $_POST['password'];

// Cek user berdasarkan first name & email
$stmt = $conn->prepare("SELECT id, password FROM user WHERE first_name = ? AND last_name = ?");
$stmt->bind_param("ss", $firstName, $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    
    if (password_verify($password, $row['password'])) {
        // Login sukses
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $firstName;
        header("Location: todolist.php");
        exit();
    } else {
        // Password salah
        echo "<script>alert('Password salah!'); window.location.href='index.php';</script>";
    }
} else {
    echo "<script>alert('User tidak ditemukan!'); window.location.href='index.php';</script>";
}
?>
