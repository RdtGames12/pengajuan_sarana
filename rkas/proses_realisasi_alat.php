<?php
include "koneksi.php";
$id = $_GET['id'];
$id1 = $_GET['id1'];
$sql = mysqli_query($conn, "SELECT * FROM tb_alat WHERE id_alat = '$id1'");
$sql1 = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user='$id'");
?>
<!DOCTYPE html>
<html lang="en">

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

<body id="page-top" background-image=url(img/opback.png)>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">
        
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">



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
                                    src="img/opprofil.png">
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
                                <h1 class="h4 text-gray-50 mb-4">Realisasi alat</h1>
                            </div>
                            <form class="user" action="proses_realisasi_alat.php?id=<?= $id ?>&id1=<?= $id1 ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="jumlah_beli">Jumlah yang sudah dibeli:</label>
                                    <?php $max_query = mysqli_query($conn, "SELECT SUM(qty) FROM tb_alat WHERE id_alat='$id1'");
                                    $max_result = $max_query->fetch_array(MYSQLI_NUM);
                                    $max = $max_result[0];?>
                                    <input type="number" class="form-control form-control-user" id="jumlah_beli" name="jumlah_beli" min="0" max="<? $max ?>">
                                </div>
                                <h6>Masukkan Bukti(Gambar):</h6>
                                <div class="form-group">
                                <input type="file" id="bukti" name="bukti">
                                </div>
                                <input type="submit" name="realisasi" value="Realisasikan" style="width:100%;" class="btn btn-primary btn-user btn-block">
                                </form>
                                <hr>
    </div>
                                <?php 
                                if (isset($_POST['realisasi'])) {
                                    $jumlah = $_POST['jumlah_beli'];
                                    $jumlahsekarang = $max - $jumlah;
                                    $harga_query = mysqli_query($conn, "SELECT harga FROM tb_alat WHERE id_alat='$id1'");
                                    $harga_result = $harga_query->fetch_array(MYSQLI_NUM);
                                    $harga = $harga_result[0];
                                    $subtotal = $harga * $jumlahsekarang;
                                    $ekstensi_gambar = array('png', 'jpg');
                                    $gambar = $_FILES['bukti']['name'];
                                    $x = explode('.', $gambar);
                                    $ekstensi = strtolower(end($x));
                                    $ukuran = $_FILES['bukti']['size'];
                                    $file_tmp = $_FILES['bukti']['tmp_name'];

                                    move_uploaded_file($file_tmp, 'foto_bukti/'.$gambar);

                                    $proses = mysqli_query($conn, "UPDATE tb_alat SET qty = '$jumlahsekarang', subtotal = '$subtotal', bukti = '$gambar' WHERE id_alat = '$id1'");
                                    if ($proses) {
                                        echo "
                                        <script>
                                            alert('Data Berhasil Masuk!');
                                            window.location.href='realisasi_alat.php?id=$id';
                                        </script>
                                        ";
                                    } else {
                                        echo "
                                    <script>
                                        alert('Data Gagal Masuk');  
                                        window.location.href='realisasi_alat.php?id=$id';
                                    </script>
                                    ";
                                    }
                                }
                                ?>
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