<?php
require_once("../config/config.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['deleteDepartment']) && $_POST['deleteDepartment'] == true) {
        $id = $_POST['id'];
        try {
            $stmt = $pdo->prepare("DELETE FROM department WHERE id = :id");
            $stmt->execute([
                ':id' => $id,
            ]);
            echo "success";
        } catch (PDOException $e) {
            echo "Failed to update status: " . $e->getMessage();
        }
    } else if (isset($_POST['id']) && $_POST['id'] != "") {
        $id = $_POST['id'];
        $department = $_POST['department'];
        try {
            $stmt = $pdo->prepare("UPDATE department SET department = :department WHERE id = :id");
            $stmt->execute([
                ':department' => $department,
                ':id' => $id,
            ]);
            echo "success";
        } catch (PDOException $e) {
            echo "Failed to update status: " . $e->getMessage();
        }
    } else {
        $department = $_POST['department'];
        try {
            $stmt = $pdo->prepare("INSERT INTO department (department)VALUES (:department)");

            $stmt->execute([
                ':department' => $department,
            ]);
            echo "success";
        } catch (PDOException $e) {
            echo "Failed to update status: " . $e->getMessage();
        }
    }
}
