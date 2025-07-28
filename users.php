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
                <li class="breadcrumb-item active" aria-current="page">Users</li>
            </ol>
        </nav>

        <!-- ✅ Card -->
        <div class="card shadow-2 mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">User List</h5>
                <a href="add-user.php" class="btn btn-primary btn-sm">
                    <i class="fas fa-user-plus me-1"></i> Add User
                </a>
            </div>

            <!-- ✅ MDB Table -->
            <div class="card-body">
                <div class="table-responsive">
                    <table id="userTable" class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dummy data rows -->
                            <tr>
                                <td>1</td>
                                <td>Avinash</td>
                                <td>avi@example.com</td>
                                <td>Admin</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <button class="btn btn-sm btn-warning me-1"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <!-- Add more rows dynamically using PHP -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</main>
<?php require_once("includes/footer.php"); ?>