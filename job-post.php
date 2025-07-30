<?php
require_once("includes/header.php");
require_once("includes/sidebar.php");
?>
<main style="margin-top: 58px">
    <div class="container-fluid py-4">

        <!-- ✅ Breadcrumb using MDB -->
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Job Post</li>
            </ol>
        </nav>

        <!-- ✅ Card -->
        <div class="card shadow-2 mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Job List</h5>
                <a href="create-job.php" class="btn btn-primary btn-sm">
                    <i class="fas fa-user-plus me-1"></i> Create Job
                </a>
            </div>

            <!-- ✅ MDB Table -->
            <div class="card-body">
                <div class="table-responsive">
                    <table id="jobPostTable" class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Job Title</th>
                                <th>Department</th>
                                <th>Reports To</th>
                                <th>Job Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sn = 1;
                            $stmt = $pdo->prepare("SELECT * FROM job_posts ORDER BY id DESC");
                            $stmt->execute();
                            $job_posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($job_posts as $job_post) {
                                // Department names
                                $department_names = [];
                                if (!empty($job_post['department'])) {
                                    $dept_ids = explode(',', $job_post['department']);
                                    foreach ($dept_ids as $dept_id) {
                                        $dept_stmt = $pdo->prepare("SELECT department FROM department WHERE id = ?");
                                        $dept_stmt->execute([$dept_id]);
                                        $dept_name = $dept_stmt->fetchColumn();
                                        if ($dept_name) {
                                            $department_names[] = $dept_name;
                                        }
                                    }
                                }

                                // Report manager names
                                $report_names = [];
                                if (!empty($job_post['report'])) {
                                    $report_ids = explode(',', $job_post['report']);
                                    foreach ($report_ids as $report_id) {
                                        $report_stmt = $pdo->prepare("SELECT name FROM report_manager WHERE id = ?");
                                        $report_stmt->execute([$report_id]);
                                        $report_name = $report_stmt->fetchColumn();
                                        if ($report_name) {
                                            $report_names[] = $report_name;
                                        }
                                    }
                                }

                            ?>
                                <tr>
                                    <td><?= $sn++; ?></td>
                                    <td><?= htmlspecialchars($job_post['title']) ?></td>
                                    <td><?= htmlspecialchars(implode(' / ', $department_names)) ?></td>
                                    <td><?= htmlspecialchars(implode(' / ', $report_names)) ?></td>
                                    <td><?= htmlspecialchars(strip_tags(substr($job_post['description'], 0, 100))) ?>...</td>
                                    <td>
                                        <button class="btn btn-sm <?= $job_post['status'] == 1 ? 'btn-success' : 'btn-danger' ?> change-status"
                                            data-id="<?= $job_post['id'] ?>"
                                            data-status="<?= $job_post['status'] ?>">
                                            <i class="fas fa-sync-alt"></i>
                                            <?= $job_post['status'] == 1 ? 'Active' : 'Deactive' ?>
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-warning me-1 edit-post" data-id="<?= $job_post['id'] ?>">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>

                                        <button class="btn btn-sm btn-danger delete-user" data-id="<?= $job_post['id'] ?>">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</main>
<?php require_once("includes/footer.php"); ?>