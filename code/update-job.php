<?php
require_once("../config/config.php");
if (isset($_POST['action']) && $_POST['action'] == "change_status") {
    if (isset($_POST['id']) && isset($_POST['current_status'])) {
        $id = $_POST['id'];
        $currentStatus = $_POST['current_status'];
        $newStatus = $currentStatus == 1 ? 0 : 1;
        $statusMessage = $currentStatus == 1 ? "deactivated" : "activated";

        try {
            $stmt = $pdo->prepare("UPDATE job_posts SET status = :status WHERE id = :id");
            $stmt->execute([
                ':status' => $newStatus,
                ':id' => $id
            ]);
            echo "success";
        } catch (PDOException $e) {
            echo "Failed to update status: " . $e->getMessage();
        }
    }
} else if (isset($_POST['action']) && $_POST['action'] == "delete_post") {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        try {
            $stmt = $pdo->prepare("DELETE FROM job_posts WHERE id = :id");
            $stmt->execute(['id' => $id]);
            echo "success";
        } catch (PDOException $e) {
            echo "Failed to delete: " . $e->getMessage();
        }
    }
} else {
    echo "Invalid action";
}
