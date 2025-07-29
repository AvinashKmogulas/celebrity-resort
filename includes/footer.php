<script type="text/javascript" src="<?= BASE_URL ?>assets/js/new-prism.js"></script>
<script type="text/javascript" src="<?= BASE_URL ?>assets/js/mdbsnippet.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL ?>assets/js/mdb.min.js"></script>
<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php
if ($currentPage == "add-user.php" || $currentPage == "users.php") {
?>
    <script src="<?= BASE_URL ?>assets/js/add-user.js"></script>
<?php
} else if ($currentPage == "job-post.php" || $currentPage == "create-job.php") {
?>
    <script src="https://cdn.tiny.cloud/1/fuzj8lljvdncx7ixsjsxxd20cpyo03nca083dpwvttnhrfui/tinymce/8/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>
    <script src="<?= BASE_URL ?>assets/js/job-post.js"></script>
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#report').select2({
                placeholder: "Select Report To",
                allowClear: true
            });
            $('#department').select2({
                placeholder: "Select Department",
                allowClear: true
            });
        });
    </script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            branding: false
        });
    </script>
<?php
} else if ($currentPage == "department.php") {
?>
    <script src="<?= BASE_URL ?>assets/js/departmentForm.js"></script>
<?php
} else if ($currentPage == "report-manager.php") {
?>
    <script src="<?= BASE_URL ?>assets/js/report_manager.js"></script>
<?php
}
?>
<script type="text/javascript">
    const sidenav = document.getElementById("sidenav-1");
    const instance = mdb.Sidenav.getInstance(sidenav);

    let innerWidth = null;

    const setMode = (e) => {
        if (window.innerWidth === innerWidth) {
            return;
        }

        innerWidth = window.innerWidth;

        if (window.innerWidth < 1400) {
            instance.changeMode("over");
            instance.hide();
        } else {
            instance.changeMode("side");
            instance.show();
        }
    };

    setMode();
    window.addEventListener("resize", setMode);
</script>
</body>

</html>