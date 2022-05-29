
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UBG Warnet - User</title>

    <!-- Web Fonts 
  ================================================== -->
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet"/> 
  
  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="<?php echo base_url('');?>css/bootstrap.min.css"/>
  <link rel="stylesheet" href="<?php echo base_url('');?>css/font-awesome.min.css"/>
  <link rel="stylesheet" href="<?php echo base_url('');?>css/owl.carousel.css"/>
  <link rel="stylesheet" href="<?php echo base_url('');?>css/owl.transitions.css"/>
  <link rel="stylesheet" href="<?php echo base_url('');?>css/style.css"/>
  <link rel="stylesheet" href="<?php echo base_url('');?>css/colors/color.css"/>
  <link href="<?php echo base_url('sweet-alert2/sweetalert2.min.css');?>" rel="stylesheet" type="text/css">



  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />

  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
      
  <!-- Favicons
  ================================================== -->
  <link rel="icon" type="image/png" href="favicon.png">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('/');?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->

    <link href="<?php echo base_url('/');?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="<?php echo base_url('/');?>img/white.png"></img>
                </div>
            </a>

            <div class="sidebar-heading">
                <br>
                Menu User/Member
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('Voucher/index') ?>">
                    <i class="fas fa-fw fa-wifi"></i>
                    <span>Beli Voucher</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('Home/index') ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Daftar Member Warnet</span></a>
            </li>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('Home/index') ?>">
                    <i class="fas fa-fw fa-laptop-code"></i>
                    <span>Status PC</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <div class="sidebar-heading">
                exit
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('') ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span align="text-center"><b>Logout</b></span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-gray-900 topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-100 small">User Member</span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url('') ?>img/logo-ubg.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
            

                </div>

        <div class="container-fluid">

          <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Beli Voucher :</h1>
          
                <div class="container-fluid">
                  <div class="row justify-content-center">


                    <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
          <div class="team-wrap">
            <a class="d-inline" data-toggle="modal" data-target="#team-modal-1">
              <div class="team-img-wrap js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
                <img src="<?php echo base_url('');?>img/v2.png" alt="">
                <div class="team-img-mask"></div>
              </div>
            </a>
            <h6>Bronze Tier</h6>
            <p>IDR 1000 <br> VOUCHER BRONZE HARGA Rp.1000</p>
            <a class="app-btn" href="#"><i class="fa fa-phone"></i></a>
            <a class="app-btn ml-3" href="#"><i class="fa fa-laptop"></i></a>
            <a class="app-btn ml-3" href="#"><i class="fa fa-wifi"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
          <div class="team-wrap">
            <a class="d-inline" data-toggle="modal" data-target="#team-modal-2">
              <div class="team-img-wrap js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
                <img src="<?php echo base_url('');?>img/v3.png" alt="">
                <div class="team-img-mask"></div>
              </div>
            </a>
            <h6>Silver Tier</h6>
            <p>IDR 5000 <br> VOUCHER SILVER HARGA Rp.5000</p>
            <a class="app-btn" href="#"><i class="fa fa-phone"></i></a>
            <a class="app-btn ml-3" href="#"><i class="fa fa-laptop"></i></a>
            <a class="app-btn ml-3" href="#"><i class="fa fa-wifi"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="team-wrap">
            <a class="d-inline" data-toggle="modal" data-target="#team-modal-3">
              <div class="team-img-wrap js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
                <img src="<?php echo base_url('');?>img/v1.png" alt="">
                <div class="team-img-mask"></div>
              </div>
            </a>
            <h6>Gold Tier</h6>
            <p>IDR 20000 <br> VOUCHER GOLD HARGA Rp.20000</p>
            <a class="app-btn" href="#"><i class="fa fa-phone"></i></a>
            <a class="app-btn ml-3" href="#"><i class="fa fa-laptop"></i></a>
            <a class="app-btn ml-3" href="#"><i class="fa fa-wifi"></i></a>
          </div>
        </div>
                    


                  </div>
                  
                </div>

        </div>

        <div class="container-fluid">
          <div class="container-fluid">
            <form action="<?=site_url('Voucher/proses')?>" method="post" class="container-md">
                <div class="card-body">
                    <table class="text-center" width="60%">
                    <tbody class="form-group">
                        <tr>
                            <td><label for=""> User </label></td>
                            <td><input type="text" name="tuser" class="form-control" value="canggih" ><br></td>
                        </tr>

                        <tr>
                            <td><label for=""> Kode Voucher  </label></td>
                            <td><input type="text" name="tkode" id="tkode" class="form-control" ><br></td>
                        </tr>

                        <tr>
                            <td><label for=""> Jenis Voucher </label></td>
                            <td>
                                <select class="form-control" id="tjenis" name="tjenis">
                                  <option>-Pilih voucher-</option>
                                  <option>Bronze</option>
                                  <option>Silver</option>
                                  <option>Gold</option>
                                </select>
                              <br>
                            </td>
                        </tr>

                        <tr>
                            <td><label for=""> Harga (Rp)</label></td>
                            <td><input type="text" name="tharga" id="tharga" class="form-control" value=""><br></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="Beli Voucher" class="btn btn-primary waves-effect" id="sa-success"><a href="<?= site_url('Home/index') ?>" class="btn btn-warning">Batal</a><br></td>
                        </tr>
                    </tbody>
                    </table>
                </div>

                
                
            </form>

             <script type="text/javascript">
                  function randomNumber(len) {
                      var randomNumber;
                      var n = '';

                      for(var count = 0; count < len; count++) {
                          randomNumber = Math.floor(Math.random() * 10);
                          n += randomNumber.toString();
                      }
                      return n;
                  }

                  window.onload = function() {
                  document.getElementById("tkode").value = randomNumber(6);
                  };
    </script>

          </div>
            

        </div>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

      <!-- JAVASCRIPT
    ================================================== -->




  <script src="<?php echo base_url('');?>js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo base_url('');?>js/popper.min.js"></script> 
  <script src="<?php echo base_url('');?>js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('');?>js/plugins.js"></script> 
  <script src="<?php echo base_url('');?>js/chart-custom.js"></script>  
  <script src="<?php echo base_url('');?>js/particles.js"></script> 
  <script src="<?php echo base_url('');?>js/custom.js"></script>  

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('/');?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('/');?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('/');?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('/');?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('/');?>js/demo/datatables-demo.js"></script>


    <!-- Sweet-Alert  -->
        <script src="<?php echo base_url('sweet-alert2/sweetalert2.min.js');?>"></script>

        <script src="<?php echo base_url('sweet-alert2/jquery.sweet-alert.init.js');?>"></script>

</body>


</html>