<?php
include "koneksi.php";
$id = $_GET['id'];
$bahan = mysqli_query($conn, "SELECT * FROM tb_bahan");
$sql1 = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user='$id'");
if ($id == 702205615) {
    $profil = '<img class="img-profile rounded-circle" src="img/undraw_profile.svg">';
}
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

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="homevalidator.php?id=<?= $id ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Beranda RKAS </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="homevalidator.php?id=<?= $id ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                PENGAJUAN
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#status"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Status Pengajuan</span>
                </a>
                <div id="status" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jenis Ajuan:</h6>
                        <a class="collapse-item" href="validatorbahan.php?id=<?= $id ?>">Bahan Praktik</a>
                        <a class="collapse-item" href="validatoralat.php?id=<?= $id ?>">Alat Praktik</a>
                        <a class="collapse-item" href="validatorkegiatan.php?id=<?= $id ?>">Kegiatan</a>
                        
                        <a class="collapse-item" href="#">Sarana</a>
                        <a class="collapse-item" href="#">ATK</a>
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
                        <a class="collapse-item" href="#">Wakil Kep.Sek.</a>
                        <a class="collapse-item" href="#">Program Keahlian</a>
                        <a class="collapse-item" href="#">TU</a>
                        
                        
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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php foreach ($sql1 as $row) :
                                echo $row['nama']; 
                                    endforeach;
                                    ?></span>
                                <?= $profil ?>
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
                                <h1 class="h4 text-gray-900 mb-4">Lihat Pengajuan</h1>
                            </div>
                            <hr>
                        </div>
    <form action="validatorbahan.php?id=<?= $id ?>" method="POST">
                        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Ajuan</h6>
                            <select name="jurusan">
                                <option value="Mekatronika" name="jurusan1">Mekatronika</option>
                                <option value="DKV" name="jurusan2">DKV</option>
                                <option value="PPLG" name="jurusan3">PPLG</option>
                                <option value="Animasi" name="jurusan4">Animasi</option>
                                <option value="Kimia" name="jurusan5">Kimia Industri</option>
                                <option value="Pemesinan" name="jurusan6">Teknik Pemesinan</option>
                            </select>
                            <input type="submit" name="cari" value="cari">
                                </form>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tr>
                                            <th>No</th>
                                            <th>Nama Item</th>
                                            <th>Merk</th>
                                            <th>Spesifikasi</th>
                                            <th>Harga</th>
                                            <th>Jumlah Beli</th>
                                            <th>Sub Total</th>
                                            <th>Jurusan</th>
                                            <th>Kebutuhan</th>
                                            <th>Aksi</th>
                                    </tr>
                                <?php
                                if (isset($_POST['cari'])) {
                                    $jurusan = $_POST['jurusan'];
                                    $bahan = mysqli_query($conn, "SELECT * FROM tb_bahan WHERE jurusan = '$jurusan'");
                                
                                ?>
                                        <?php $no = 0;?>
                                        <?php foreach ($bahan as $row) : ?>
                                        <tr>
                                        <th><?php $no += 1; echo $no;?></th>
                                        <th><?= $row["item"];?></th>
                                        <th><?= $row["merk"];?></th>
                                        <th><?= $row["spesifikasi"];?></th>
                                        <th><?= $row["harga"];?></th>
                                        <th><?= $row["qty"];?></th>
                                        <th><?= $subtotal = $row["harga"] * $row["qty"];?></th>
                                        <th><?= $row["jurusan"];?></th>
                                        <th><?= $row["kebutuhan_untuk"];?></th>
                                        <th>
                                            <a href="terimapengajuanbahan.php?idc=<?=$row['id_bahan']; ?>"onclick ="return confirm('Yakin?');"><b style="color: royalblue;">Terima</b></a>
                                            |
                                            <a href="tolakpengajuanbahan.php?idc=<?=$row['id_bahan']; ?>"onclick ="return confirm('Yakin?');"><b style="color: tomato;">Tolak</b></a>
                                        </th>
                                        </tr>
                                    
                                        <?php endforeach;
                                    }?>
                            </div>
                                </table>
                            </div>
                        </div>
                    </div>
                        </div>
                        </form>
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