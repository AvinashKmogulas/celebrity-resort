<?php
require_once("../config/config.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name     = trim($_POST['name']);
    $email    = trim($_POST['email']);
    $password = $_POST['password'];
    $role     = $_POST['role'];
    $status   = 1;

    $stmt = $pdo->prepare("SELECT COUNT(*) FROM admin WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetchColumn() > 0) {
        echo "Email already exists.";
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO admin (name, email, password, role, status) 
                           VALUES (?, ?, ?, ?, ?)");

    $success = $stmt->execute([$name, $email, $hashedPassword, $role, $status]);

    if ($success) {
        echo "success";
    } else {
        echo "Failed to add user.";
    }
} else {
    echo "Invalid Request.";
}
