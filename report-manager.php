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
                <li class="breadcrumb-item active" aria-current="page">Report Manager</li>
            </ol>
        </nav>

        <!-- ✅ Card -->
        <div class="card shadow-2 mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Report Manager List</h5>
                <a href="#" class="btnn btn-primary btn-sm" onclick="openModal()">
                    <i class="fas fa-user-plus me-1"></i> Create Report Manager
                </a>
                <div id="reportModal" class="custom-modal-overlay" style="display:none;">
                    <div class="custom-modal">
                        <div class="custom-modal-header">
                            <h5>Add New Report Manager</h5>
                            <span class="custom-close" onclick="closeModal()">&times;</span>
                        </div>

                        <form id="reportManagerForm">
                            <div class="custom-modal-body">
                                <input type="hidden" id="managerId" name="manager_id" />
                                <label for="managerName" class="form-label">Report Manager Name:<span id="rmErr"></span></label>
                                <input type="text" id="managerName" name="managerName" class="form-control" required />
                            </div>

                            <div class="custom-modal-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
                <script>
                    function openModal() {
                        document.getElementById('reportModal').style.display = 'flex';
                    }

                    function closeModal() {
                        document.getElementById('reportModal').style.display = 'none';
                    }
                </script>
            </div>

            <!-- ✅ MDB Table -->
            <div class="card-body">
                <div class="table-responsive">
                    <table id="userTable" class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stmt = $pdo->prepare("SELECT * FROM report_manager");
                            $stmt->execute();
                            $report_managers = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($report_managers as $report_manager) {
                            ?>
                                <tr>
                                    <td>1</td>
                                    <td><?= $report_manager['name'] ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-warning me-1 editReport" data-id="<?= $report_manager['id'] ?>" data-name="<?= $report_manager['name'] ?>">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>

                                        <button class="btn btn-sm btn-danger deleteReport" data-id="<?= $report_manager['id'] ?>">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                            <!-- Add more rows dynamically using PHP -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</main>
<?php require_once("includes/footer.php"); ?>