<header>
    <!-- Sidenav -->
    <div
        id="sidenav-1"
        class="sidenav"
        role="navigation"
        data-hidden="false"
        data-accordion="true">
        <a
            class="ripple d-flex justify-content-center py-4"
            href="#!"
            data-ripple-color="primary">
            <img
                id="MDB-logo"
                src="<?= BASE_URL ?>assets/images/logo/logo.png"
                alt="Celebrity Resort Logo"
                draggable="false" width="50" />
        </a>

        <ul class="sidenav-menu">
            <li class="sidenav-item">
                <a class="sidenav-link" href="dashboard.php">
                    <i class="fas fa-tachometer-alt pr-3"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidenav-item">
                <a class="sidenav-link" href="<?= BASE_URL ?>department.php">
                    <i class="fas fa-building pr-3"></i>
                    <span>Department</span>
                </a>
            </li>
            <li class="sidenav-item">
                <a class="sidenav-link" href="<?= BASE_URL ?>report-manager.php">
                    <i class="fas fa-user-tie pr-3"></i>
                    <span>Report Manager</span>
                </a>
            </li>

            <li class="sidenav-item">
                <a class="sidenav-link" href="job-post.php">
                    <i class="fas fa-briefcase pr-3"></i>
                    <span>Job Post</span>
                </a>
            </li>
            <li class="sidenav-item">
                <a class="sidenav-link" href="<?= BASE_URL ?>users.php">
                    <i class="fas fa-user-plus pr-3"></i>
                    <span>Create User</span>
                </a>
            </li>

        </ul>
    </div>
    <!-- Sidenav -->

    <!-- Navbar -->
    <nav
        id="main-navbar"
        class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggler -->
            <button
                data-toggle="sidenav"
                data-target="#sidenav-1"
                class="btn shadow-0 p-0 mr-3 d-block d-xxl-none"
                aria-controls="#sidenav-1"
                aria-haspopup="true">
                <i class="fas fa-bars fa-lg"></i>
            </button>

            <!-- Search form -->
            <form class="d-none d-md-flex input-group w-auto my-auto">
                <input
                    autocomplete="off"
                    type="search"
                    class="form-control rounded"
                    placeholder='Search (ctrl + "/" to focus)'
                    style="min-width: 225px" />
                <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
            </form>

            <!-- Right links -->
            <ul class="navbar-nav ml-auto d-flex flex-row">
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-toggle="dropdown"
                        aria-expanded="false">
                        <img
                            src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg"
                            class="rounded-circle"
                            height="22"
                            alt=""
                            loading="lazy" />
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-right"
                        aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?= BASE_URL ?>code/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>