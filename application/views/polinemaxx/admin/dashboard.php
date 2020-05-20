<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title ?></title>

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url('assets/admin/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/admin/css/sb-admin-2.css');?>" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?php echo base_url('assets/admin/vendor/datatables/dataTables.bootstrap4.min.css');?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>admin/dashboard">
        <div class="sidebar-brand-icon">
          <img src="<?php echo base_url('img/PolinemaXX_logoAdmin.png');?>" width="200">
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>admin/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data Penting
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-film"></i>
          <span>Movie</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url(); ?>admin/film"><i class="fas fa-fw fa-film" aria-hidden="true"></i> Data Movie</a>
            <a class="collapse-item" href="<?php echo base_url(); ?>admin/tambahFilm"><i class="fas fa-fw fa-plus" aria-hidden="true"></i>Tambah Movie</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-fw fa-users"></i>
          <span>Member</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url(); ?>admin/member"><i class="fas fa-fw fa-users" aria-hidden="true"></i> Data Member</a>
            <a class="collapse-item" href="<?php echo base_url(); ?>admin/tambahMember"><i class="fas fa-fw fa-plus" aria-hidden="true"></i>Tambah Member</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
          <i class="fas fa-fw fa-location-arrow "></i>
          <span>Theater</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url(); ?>admin/theater"><i class="fas fa-fw fa-location-arrow" aria-hidden="true"></i> Data Theater</a>
            <a class="collapse-item" href="<?php echo base_url(); ?>admin/tambahTheater"><i class="fas fa-fw fa-plus" aria-hidden="true"></i>Tambah Theater</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>admin/laporan">
          <i class="fas fa-fw fa-chart-area "></i>
          <span>Laporan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) 
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
        -->

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-green topbar mb-4 static-top shadow">

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw "></i>
              </a>
            </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-1000 medium"><?php echo $this->session->userdata("nama");?></span>
                <i class="fas fa-fw fa-user-circle fa-2x"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo base_url(); ?>admin/logout" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-fw fa-tachometer-alt"></i> Dashboard</h1><br>

            <div class="row">

                <div class="col-md-11 col-md-6 mb-4" style="background-color: #CAD8E5; align-content: center; margin-left: 50px; padding-bottom: 30px">
                    <div class="xs"><br>
                      <h2 align="center">Selamat Datang!!!</h2><br>
                      <div>
                            <p style="text-align: center">
                                Ini adalah halaman utama <b>(Dashboard Admin)</b> yang dimana pengelolaan data akan semakin mudah dan efisien.
                                <br><br><br>
                                Anda masuk sebagai <b><?php echo $this->session->userdata("nama");?>!</b>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Jumlah Flm -->
                <div class="col-xl-4 col-md-6 mb-4" style="margin-left: 50px">
                  <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Film</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $film; ?></div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-film fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Jumlah Member -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Member</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $member; ?></div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Jumlah Theater -->
                <div class="col-xl-4 col-md-6 mb-4">
                  <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Banyak Theater</div>
                          <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $theater; ?></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-location-arrow fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
      <!-- End of Main Content -->
      <br><br><br><br><br><br><br>

        <!-- Footer -->
      <footer class="sticky-footer bg-green" style="color: white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2020 <a href="#" style="color: white" >PolinemaXX</a>. All Right Reserved</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

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
          <a class="btn btn-primary" href="<?php echo base_url(); ?>admin/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/admin/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/admin/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/admin/js/sb-admin-2.min.js');?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/admin/vendor/datatables/jquery.dataTables.min.js');?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('assets/admin/js/demo/datatables-demo.js');?>"></script>

</body>

</html>