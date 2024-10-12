<?php
session_start();
if ($_SESSION['status']  != 'login') {
    header("location:./login.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/Admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="assets/Admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="assets/Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="assets/Admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/Admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="assets/Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="assets/Admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="assets/Admin/plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="assets/Admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/Admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/Admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- jQuery -->
    <script src="assets/Admin/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="assets/Admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="assets/Admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/Admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/Admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/Admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="assets/Admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/Admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/Admin/plugins/jszip/jszip.min.js"></script>
    <script src="assets/Admin/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="assets/Admin/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="assets/Admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/Admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="assets/Admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Toaster -->
    <link rel="stylesheet" href="assets/bootstrap-toastr/toastr.css">
    <script src="assets/bootstrap-toastr/toastr.js"></script>
</head>

<body class=" hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!--Preloader-->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="assets/Admin/dist/img/logospch.png" alt="logo-spc" height="60" width="100">
        </div>
        <?php include 'partial/navbar.php'; ?>
        <?php include 'partial/sidebar.php'; ?>