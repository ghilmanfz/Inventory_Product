<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="https://www.spc-indo.com/">PT. Supertone</a></strong>
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0 (BETA)
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge("uibutton", $.ui.button);
</script>
<!-- Bootstrap 4 -->
<script src="assets/Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Sparkline -->
<script src="assets/Admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="assets/Admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/Admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets/Admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="assets/Admin/plugins/moment/moment.min.js"></script>
<script src="assets/Admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="assets/Admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="assets/Admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/Admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/Admin/dist/js/adminlte.js"></script>
<script src="chart.js"></script>
<!-- <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script> -->
</body>
<script>
$(function() {
    $('#tabel').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});
</script>

</html>