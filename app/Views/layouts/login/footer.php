<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/js/adminlte.min.js"></script>

<script src="/assets/js/sweetalert2.min.js"></script>

<script>
    function showNotif(tipe, judul, pesan) {
        var arrayTipe = ['success', 'info', 'error', 'warning'];
        if (tipe.includes(arrayTipe) != false) {
            tipe = 'info';
        }
        return swal.fire({
            icon: tipe,
            title: judul,
            text: pesan,
            showConfirmButton: false,
            timer: 2500
        })
    }
</script>

<?= session()->getFlashdata('notif') ?>
</body>

</html>