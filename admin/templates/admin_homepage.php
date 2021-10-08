<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Congreso</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="components/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="components/adminlt/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="components/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="components/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="components/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="components/adminlt/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <?php
    include "vistas/modulos/header.php";
    include "vistas/modulos/menu.php";

    include "vistas/modulos/inicio.php";

    include "vistas/modulos/footer.php";
  ?>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="components/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="components/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- daterangepicker -->
<script src="components/moment/moment.min.js"></script>
<script src="components/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="components/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="components/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="components/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="components/adminlt/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="components/adminlt/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="components/adminlt/js/pages/dashboard.js"></script>
</body>
</html>
