<?php
// Base URL
define('BASE_URL', 'http://localhost/celebrity-resort/');
define('ADMIN_BASE_URL', 'http://localhost/celebrity-resort/admin/');
define('COMP_URI', '/celebrity-resort/admin');
$host = 'localhost';
$db   = 'celebrity-resort';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
