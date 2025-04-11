<?php
session_start();
include 'connect.php';

if (isset($_POST['signUp'])) {
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if the user already exists
    $stmt = $conn->prepare("SELECT id FROM user WHERE first_name = ?");
    if ($stmt === false) {
        die('Error preparing the query: ' . $conn->error);
    }
    $stmt->bind_param("s", $firstName);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Email sudah terdaftar!";
    } else {
        // Insert new user
        $stmt = $conn->prepare("INSERT INTO user (first_name, last_name, password) VALUES (?, ?, ?)");
        if ($stmt === false) {
            die('Error preparing the query: ' . $conn->error);
        }
        $stmt->bind_param("sss", $firstName, $lastName, $password);
        if ($stmt->execute()) {
            header("Location: todolist.php");
            exit();
        } else {
            echo "Registrasi gagal!" . $conn->error;
        }
    }
    $stmt->close();
}
?>
