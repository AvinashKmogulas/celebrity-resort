<?php
require_once("includes/header.php");
require_once("includes/sidebar.php");

// Fetch for edit if ID is passed
$jobId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$editMode = $jobId > 0;
$title = "";
$departments = [];
$reports = [];
$description = "";
if ($editMode) {
    $stmt = $pdo->prepare("SELECT * FROM job_posts WHERE id = ?");
    $stmt->execute([$jobId]);
    $job = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($job) {
        $title = $job['title'];
        $departments = explode(", ", $job['department']);
        $reports = explode(", ", $job['report']);
        $description = $job['description'];
    }
}
?>

<main style="margin-top: 58px">
    <div class="container py-4">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="job-post.php">Job Post</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?php echo $editMode ? "Edit Job" : "Create Job"; ?>
                </li>
            </ol>
        </nav>

        <!-- Card Form -->
        <div class="card shadow-3">
            <div class="card-header">
                <h5 class="mb-0"><?php echo $editMode ? "Edit Job Post" : "Add New Job Post"; ?></h5>
            </div>
            <div class="card-body">
                <form method="POST" id="create-job">
                    <input type="hidden" name="id" id="jobid" value="<?php echo $jobId; ?>">

                    <div class="mb-4">
                        <label class="form-label" for="title">Job Title:</label>
                        <input type="text" id="title" name="title" class="form-control" value="<?php echo htmlspecialchars($title); ?>" />
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="department">Department:</label>
                        <?php
                        $stmt = $pdo->prepare("SELECT id, department FROM department");
                        $stmt->execute();
                        $departmentsList = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        ?>

                        <select name="department[]" id="department" class="form-select select2" multiple="multiple">
                            <option disabled>Select Departments</option>
                            <?php foreach ($departmentsList as $dept):
                                $selected = in_array($dept['id'], $departments) ? "selected" : "";
                            ?>
                                <option value="<?= htmlspecialchars($dept['id']) ?>" <?= $selected ?>>
                                    <?= htmlspecialchars($dept['department']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="report">Report To:</label>
                        <?php
                        $stmt = $pdo->prepare("SELECT id, name FROM report_manager");
                        $stmt->execute();
                        $managerList = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        ?>

                        <select name="report[]" id="report" class="form-select select2" multiple="multiple">
                            <option disabled>Select Report To</option>
                            <?php foreach ($managerList as $manager):
                                $selected = in_array($manager['id'], $reports) ? "selected" : "";
                            ?>
                                <option value="<?= htmlspecialchars($manager['id']) ?>" <?= $selected ?>>
                                    <?= htmlspecialchars($manager['name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="job-d">Job Description:</label>
                        <textarea class="form-control" name="description" id="job-d"><?php echo htmlspecialchars($description); ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i> <?php echo $editMode ? "Update Job" : "Save Job"; ?>
                    </button>
                    <a href="job-post.php" class="btn btn-secondary ms-2">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
require_once("includes/footer.php");
?>