<?php
require_once("../config/config.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $department = $_POST['department'];
    $report = $_POST['reportTo'];
    $description = $_POST['description'];

    $departStr = implode(', ', $department);
    $reportStr = implode(', ', $report);

    if (isset($_POST['id']) && $_POST['id'] != 0) {
        $id = $_POST['id'];
        try {
            $stmt = $pdo->prepare("UPDATE job_posts SET title = :title, department = :department, report = :report_to, description = :description WHERE id = :id");

            $stmt->execute([
                ':title' => $title,
                ':department' => $departStr,
                ':report_to' => $reportStr,
                ':description' => $description,
                ':id' => $id
            ]);
            echo "success";
        } catch (PDOException $e) {
            echo "Failed to update status: " . $e->getMessage();
        }
    } else {
        try {
            $stmt = $pdo->prepare("INSERT INTO job_posts (title, department, report, description)VALUES (:title, :department, :report_to, :description)");

            $stmt->execute([
                ':title' => $title,
                ':department' => $departStr,
                ':report_to' => $reportStr,
                ':description' => $description
            ]);
            echo "success";
        } catch (PDOException $e) {
            echo "Failed to update status: " . $e->getMessage();
        }
    }
}
