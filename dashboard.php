<?php
require_once("includes/header.php");
require_once("includes/sidebar.php");
// 🔸 Count total job posts
$stmt = $pdo->query("SELECT COUNT(*) FROM job_posts");
$totalJobs = $stmt->fetchColumn();

// 🔸 Count total departments
$stmt = $pdo->query("SELECT COUNT(*) FROM department");
$totalDepartments = $stmt->fetchColumn();

// 🔸 Count total report managers
$stmt = $pdo->query("SELECT COUNT(*) FROM report_manager");
$totalManagers = $stmt->fetchColumn();

?>
<main style="margin-top: 58px">
    <div class="container py-4">
        <div class="row g-3">
            <!-- Job Posts Card -->
            <div class="col-md-3">
                <div class="card text-white bg-primary h-100">
                    <div class="card-body">
                        <h5 class="card-title">Total Job Posts</h5>
                        <p class="card-text fs-4"><?= $totalJobs ?></p>
                    </div>
                </div>
            </div>

            <!-- Departments Card -->
            <div class="col-md-3">
                <div class="card text-white bg-success h-100">
                    <div class="card-body">
                        <h5 class="card-title">Total Departments</h5>
                        <p class="card-text fs-4"><?= $totalDepartments ?></p>
                    </div>
                </div>
            </div>

            <!-- Report Managers Card -->
            <div class="col-md-3">
                <div class="card text-white bg-warning h-100">
                    <div class="card-body">
                        <h5 class="card-title">Report Managers</h5>
                        <p class="card-text fs-4"><?= $totalManagers ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once("includes/footer.php");
?>