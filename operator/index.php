<?php include_once 'sistem/content.php'; ?>








<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Cards</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.cdnfonts.com/css/sf-pro-display?styles=98774,98777,98776,98772,98773,98775,98770,98771,98769" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../assets/js/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.html">
                <div class="sidebar-brand-text mx-3">Victorya Laundry</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link <?= @$d_active ?>"" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            <?php if ($_SESSION['level'] == 'Admin'): ?>
            <li class="nav-item <?= @$pt_active ?>">
                <a class="nav-link" href="index.php?page=produk">
                    <i class="fas fa-tshirt"></i>
                    <span>Jenis Pemesanan</span></a>
            </li>
            <?php endif; ?>

            
                <!--_____________________-->
                
                
                
                <li class="nav-item <?= @$pt_active ?>">
                    <a class="nav-link" href="#">
                        <i class="fas fa-users"></i>
                        <span>ini operator</span>
                    </a>
                </li>


                <?php if ($_SESSION['level'] == 'pegawai'): ?>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-users"></i>
                        <span>ini pegawai</span>
                    </a>
                </li>
                <?php endif; ?>

                <!--_____________________-->


            <li class="nav-item">
                <a class="nav-link" href="index.php?page=pegawai">
                    <i class="fas fa-users"></i>
                    <span>Karyawan</span></a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=member">
                    <i class="fas fa-user-tag"></i>
                    <span>Member</span></a>
            </li>
            
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=laporan">
                    <i class="fas fa-user-tag"></i>
                    <span>Laporan</span></a>
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
                <nav class="navbar navbar-expand topbar mb-4 fixed-top">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                  

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

           

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['nama'] ?></span>
                                <img class="img-profile rounded-circle"
                                    src="../assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <?= $_SESSION['level'] ?>
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
                                <a class="dropdown-item" href="sistem/logout.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

               
                    <?php include_once 'views/' . $page ?>








        

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <!--___________________________________________________________ -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!--___________________________________________________________ -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

    <!--__________________________________________________ -->

       <!-- Page level plugins -->
    <script src="../assets/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/js/datatables-demo.js"></script>

    <script src="main/main.js"></script>


	<script>
		$(document).ready(function() {
			var BASE_URL = '<?= 'http://' . $_SERVER['HTTP_HOST'] . str_replace('operator/' . basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']) ?>'; // use your own base url
            tinymce.init({
                selector: ".texteditor",
                theme: "modern",
                // width: 680,
                height: 500,
                relative_urls: false,
                remove_script_host: false,
                // document_base_url: BASE_URL,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                    "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
                ],
                toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
                toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
                image_advtab: true,
                external_filemanager_path: BASE_URL + "assets/vendor/filemanager/",
                filemanager_title: "Media Gallery",
                external_plugins: { "filemanager": BASE_URL + "assets/vendor/filemanager/plugin.min.js" }
            });
		});

		if (data) {
			let ctx = document.getElementById('chart').getContext('2d');
			let myLineChart = new Chart(ctx, {
				type: 'line',
				data: data,
				options: options
			});
		}
	</script>
    <!--__________________________________________________ -->



</body>

</html>











<?php unset($_SESSION['pesan']) ?>
