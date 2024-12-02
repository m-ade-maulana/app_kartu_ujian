<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        ARA Group
    </div>
    <!-- Default to the left -->
    <strong>&copy; 2024 <a href="#">Sering Coding</a>.</strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/plugins/jszip/jszip.min.js"></script>
<script src="/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
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

    $(function() {
        $("#mp").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }); //.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)')
        $("#akl").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }); //.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)')
        $("#an").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }); //.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)')
        $("#tjkt").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }); //.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)')
        $("#dkv").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }); //.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)')
        $("#bp").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }); //.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)')
        $("#pplg").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }); //.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)')

        $("#peserta").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }); //.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)')
    })
</script>

<?= session()->getFlashdata('notif') ?>
</body>

</html>