<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Dashboard</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">  
    <!-- Custom styles for this template-->
    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand topbar mb-4 fixed-top">
                    <!-- Sidebar Toggle (Topbar) -->
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                             <img src="assets/img/logo.png" alt="" width="70" height="auto" class="d-inline-block align-text-top">
                        </a>
                    </div>
                    <!-- Topbar Search -->
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Tentang kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Kontak</a>
                        </li>
                        <!-- Nav Item - Alerts -->
                        <!-- Nav Item - Messages -->
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right animated--grow-in"
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

                <!-- End of Topbar -->
                <div class="container-fluid">
                    <div class="jumbotron  text-dark">
                        <div class="row">
                            <div class="col">
                                <h1 class="display-4">Laundry Victorya</h1>
                                <p class="lead">Namanya juga hidup banyak <b>cobaan</b>, kalo banyak <b>cucian</b> bawa aja ke <b>Victorya Laundry</b></p>
                                <hr class="my-4">
                                <p class="lead">
                                    <a class="btn btn-primary btn-lg" href="member/" role="button">Login</a>
                                </p>
                            </div>
                            <div class="col">
                                <img class="img-fluid" src="assets/img/banner1.svg" alt="banner1">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Begin Page Content -->
                <div class="container">



                    <!-- Landing Page -->
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-lg-12 mb-4">
                            <!-- Illustrations -->
                            <div class="card mb-4 text-white">
                                <div class="card-body">

                                    <div class="row align-items-center justify-content-between">
                                        <div class="col">
                                            <p class="text-dark">"Laundry kami memakai bahan sabun berkualitas demi
                                                menjaga pakaian tetap bersih, harum, dan tidak merusak kain. Dijamin
                                                tidak mengecewakan"</p>
                                            <p class="text-dark">Layanan kami adalah yang terbaik dan paling cepat. Cuci
                                                sekarang, ambil 12 jam kemudian</p>
                                        </div>
                                        <div class="col">
                                            <img class="img-fluid" src="assets/img/bg1.svg">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Approach -->
                            <div class="card mb-4 text-white">
                                <div class="card-body">

                                    <div class="row align-items-center justify-content-between">
                                        <div class="col text-dark">
                                            <p>"Musim hujan tak kunjung usai bikin baju dan celana jadi susah kering.
                                                Apalagi besok kerja dan seragamnya nggak kering-kering. Solusinya adalah
                                                masukkan pakaian kotormu ke (laundry victorya) saja! Dijamin cepat
                                                kering tanpa apek, nggak perlu pusing-pusing ngeringin karena cuaca lagi
                                                nggak bersahabat.”</p>

                                        </div>
                                        <div class="col">
                                            <img class="img-fluid" src="assets/img/bg2.svg">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card mb-4  text-white">
                                <div class="card-body">

                                    <div class="row align-items-center justify-content-between">
                                        <div class="col text-dark">
                                            <p>“Sering sibuk sampai tidak sempat nyuci baju? Hubungi kami untuk layanan
                                                antar jemput pakaian kotormu. Tersedia layanan reguler dan ekspress
                                                dengan harga super terjangkau.”</p>
                                        </div>
                                        <div class="col">
                                            <img class="img-fluid" src="assets/img/bg3.svg">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="card mb-4  text-white">
                                <div class="card-body">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col text-dark">
                                            <p>“Sering sibuk sampai tidak sempat nyuci baju? Hubungi kami untuk layanan
                                                antar jemput pakaian kotormu. Tersedia layanan reguler dan ekspress
                                                dengan harga super terjangkau.”</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Landing Page -->
                    
                    
                    



                    <hr>









                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>
</body>

</html>