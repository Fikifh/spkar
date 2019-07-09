<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Sistem Pakar</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    

    <!-- Navbar -->
    

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="?halaman=index.php&action=index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Beranda</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="?halaman=data_gejala&action=data_gejala">
          <i class="fas fa-fw fa-check"></i>
          <span>Data Gejala</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?halaman=data_gangguan&action=data_gangguan">
          <i class="fas fa-fw fa-book"></i>
          <span>Data Gangguan</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?halaman=data_konsultasi&action=data_konsultasi">
          <i class="fas fa-fw fa-heart"></i>
          <span>Data Konsultasi</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?halaman=data_relasi&action=data_relasi">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Relasi</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
        <?php 

        $halaman = @$_GET['halaman'];
        $action = @$_GET['action'];

          if($halaman == "data_gejala") {
            if ($action == "data_gejala") {
              include "admin/gejala/data_gejala.php";
            }elseif ($action == "hapus_gejala") {
              include "admin/gejala/hapus_gejala.php";  
            }elseif ($action == "edit_gejala") {
              include "admin/gejala/edit_gejala.php";
            }elseif ($action == "tambah_gejala") {
              include "admin/gejala/tambah_gejala.php";  
            }
          }elseif ($halaman == "data_gangguan" ) {
            if ($action == "data_gangguan"){
              include "admin/gangguan/data_gangguan.php";
            }elseif ($action == "hapus_gangguan") {
              include "admin/gangguan/hapus_gangguan.php";  
            }elseif ($action == "edit_gangguan") {
              include "admin/gangguan/edit_gangguan.php";
            }elseif ($action == "tambah_gangguan") {
              include "admin/gangguan/tambah_gangguan.php";  
            }
          }elseif ($halaman == "data_konsultasi" ) {
            if ($action == "data_konsultasi"){
              include "admin/konsultasi/data_konsultasi.php";
            }elseif ($action == "hapus_gangguan") {
              include "admin/konsultasi/hapus_konsultasi.php";  
            }elseif ($action == "edit_gangguan") {
              include "admin/konsultasi/edit_konsultasi.php";
            }
          }elseif ($halaman == "data_relasi" ) {
            if ($action == "data_relasi"){
              include "admin/relasi/data_relasi.php";
            }elseif ($action == "hapus_relasi") {
              include "admin/relasi/hapus_relasi.php";  
            }elseif ($action == "edit_relasi") {
              include "admin/relasi/edit_relasi.php";
            }elseif ($action == "tambah_relasi") {
              include "admin/relasi/tambah_relasi.php";  
            }
          }

        ?>  
      </div>
    </div>

        <!-- Area Chart Example-->
        

        <!-- DataTables Example -->
        

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Mujiburrahman 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
