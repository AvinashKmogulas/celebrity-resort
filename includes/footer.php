<script type="text/javascript" src="<?= BASE_URL ?>assets/js/new-prism.js"></script>
<script type="text/javascript" src="<?= BASE_URL ?>assets/js/mdbsnippet.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL ?>assets/js/mdb.min.js"></script>
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