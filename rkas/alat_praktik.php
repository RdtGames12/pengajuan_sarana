<!DOCTYPE html>
<html lang="en">
<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM tb_alat");
$sql1 = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user='$id'");
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RKAS SMKN 2 Cimahi - Beranda</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php?id=<?= $id ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Beranda RKAS </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin.php?id=<?= $id ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                PENGAJUAN
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Wakil Kep. Sek.</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jenis Ajuan:</h6>
                        <a class="collapse-item" href="#">Kegiatan</a>
                        <a class="collapse-item" href="#">Sarana</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Program Keahlian</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jenis Ajuan :</h6>
                        <a class="collapse-item" href="alat_bahan.php?id=<?= $id ?>">Bahan Praktik</a>
                        <a class="collapse-item" href="alat_praktik.php?id=<?= $id ?>">Alat Praktik</a>
                        <a class="collapse-item" href="#">Sarana</a>
                        
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#TU"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Tata Usaha</span>
                </a>
                <div id="TU" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jenis Ajuan :</h6>
                        <a class="collapse-item" href="#">Kegiatan</a>
                        <a class="collapse-item" href="#">Sarana</a>
                        <a class="collapse-item" href="#">ATK</a>
                        
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Lainnya
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#status"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Status Pengajuan</span>
                </a>
                <div id="status" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jenis Ajuan:</h6>
                        <a class="collapse-item" href="login.html">Bahan Praktik</a>
                        <a class="collapse-item" href="register.html">Alat Praktik</a>
                        <a class="collapse-item" href="forgot-password.html">Kegiatan</a>
                        
                        <a class="collapse-item" href="404.html">Sarana</a>
                        <a class="collapse-item" href="blank.html">ATK</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#lihat"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Lihat Pengajuan</span>
                </a>
                <div id="lihat" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Bidang/Bagian:</h6>
                        <a class="collapse-item" href="login.html">Wakil Kep.Sek.</a>
                        <a class="collapse-item" href="lihatpengajuanadmin.php?id=<?= $id ?>">Program Keahlian</a>
                        <a class="collapse-item" href="forgot-password.html">TU</a>
                        
                        
                    </div>
                </div>
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
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    

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

                        <!-- Nav Item - Alerts -->
                        

                        <!-- Nav Item - Messages -->
                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle border-bottom-danger" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-900 small"><?php foreach ($sql1 as $row) :
                                echo $row['nama']; 
                                    endforeach;
                                    ?></span>
                                <img class="img-profile rounded-circle "
                                    src="img/venom.jpg">
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
        <div class="container">
        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Input Pengajuan Alat Praktik!</h1>
                            </div>
                            <form class="user" action="prosesalatpraktik.php" method="POST">
                                <div class="form-group">
                                    <!-- <div class="col-sm-6 mb-1 mb-sm-0"> -->
                                    <label for="sumber_dana">Sumber Dana:</label>
                                    <select class="form-control" id="sumber_dana" name="sumber_dana">
                                        <option value="BOS">BOS</option>
                                        <option value="BOPD">BOPD</option>
                                        <option value="KOMITE">KOMITE</option>
                                        <option value="BANTUAN">BANTUAN</option>
                                    </select>
                                    <!-- <input type="text" class="form-control form-control-user" id="sumber"
                                        placeholder="Sumber Dana"> -->
                                </div>
                                <div class="form-group">
                                    <label for="tahun_ajuan">Tahun Ajuan:</label>
                                    <select class="form-control" id="tahun_ajuan" name="tahun_ajuan">
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                    </select>
                                    <!-- <input type="text" class="form-control form-control-user" id="sumber"
                                        placeholder="Sumber Dana"> -->
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama_item" name="nama_item"
                                        placeholder="Masukkan Nama Item..">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="merk" name="merk"
                                        placeholder="Masukkan merk..">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="spesifikasi" name="spesifikasi"
                                        placeholder="Masukkan spesifikasi..">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" id="harga" name="harga"
                                        placeholder="Masukkan harga..">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" id="qty" name="qty"
                                        placeholder="Masukkan Jumlah beli..">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="kebutuhan" name="kebutuhan"
                                        placeholder="untuk kebutuhan..">
                                </div>
                                
                                
                                <!-- <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Ulang Password">
                                    
                                </div>
                                </div> -->
                                
                                <input type="submit" value="simpan" name="simpan" style="width : 100%;" class="btn btn-primary btn-user btn-block">
                                <hr>
                                <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a> -->
                            <!-- </div> -->
                                <!-- </div> -->
                            </form>
                        </div>
                            <!-- <div class="text-center">
                                <a class="small" href="forgot-password.html">Lupa Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Sudah punya akun? Login!</a>
                            </div> -->
                        
                        <!-- </div>
                    </div>

    </div> -->
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
                    <a class="btn btn-primary" href="index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>