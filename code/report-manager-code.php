<?php
require_once("../config/config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        if (isset($_POST['deleteReport']) && $_POST['deleteReport'] == true) {
            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
            $stmt = $pdo->prepare("DELETE FROM report_manager WHERE id = :id");
            $stmt->execute([':id' => $id]);
            echo "success";
        } else if (isset($_POST['id']) && $_POST['id'] != "") {
            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
            $name = trim($_POST['rmName']);
            $stmt = $pdo->prepare("UPDATE report_manager SET name = :name WHERE id = :id");
            $stmt->execute([':name' => $name, ':id' => $id]);
            echo "success";
        } else {
            $name = trim($_POST['rmName']);
            $stmt = $pdo->prepare("INSERT INTO report_manager (name) VALUES (:name)");
            $stmt->execute([':name' => $name]);
            echo "success";
        }
    } catch (PDOException $e) {
        error_log($e->getMessage());
        echo json_encode(['status' => 'error', 'message' => 'Database error']);
    }
}
