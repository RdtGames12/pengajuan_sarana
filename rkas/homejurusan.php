<?php
include 'koneksi.php';
session_start();
$id = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user='$id'");
if ($id == 356758684) {
    $jurusan =  'Mekatronika';
    $profil = '<img class="img-profile rounded-circle" src="img/logomeka.png">';
}
elseif ($id == 287839666) {
    $jurusan =  'PPLG';
    $profil = '<img class="img-profile rounded-circle" src="img/logorpl.png">';
}
elseif ($id == 499308321) {
    $jurusan =  'Kimia';
    $profil = '<img class="img-profile rounded-circle" src="img/logokimia.png">';
}
elseif ($id == 257802071) {
    $jurusan =  'Animasi';
    $profil = '<img class="img-profile rounded-circle" src="img/logoanimasi.png">';
}
elseif ($id == 6083232) {
    $jurusan =  'DKV';
    $profil = '<img class="img-profile rounded-circle" src="img/logodkv.png">';
}
elseif ($id == 899055276) {
    $jurusan =  'Pemesinan';
    $profil = '<img class="img-profile rounded-circle" src="img/logomesin.png">';
}else {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

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

   <?php
    $bahan = mysqli_query($conn, "SELECT COUNT(status) FROM tb_bahan WHERE status = 'Diterima' AND jurusan ='$jurusan'");
    $diterima = $bahan -> fetch_array(MYSQLI_NUM);
    $bahan1 = mysqli_query($conn, "SELECT COUNT(status) FROM tb_bahan WHERE status = 'Ditolak' AND jurusan ='$jurusan'");
    $ditolak = $bahan1 -> fetch_array(MYSQLI_NUM);
    $bahan2 = mysqli_query($conn, "SELECT COUNT(status) FROM tb_bahan WHERE status = 'Belum di Cek' AND jurusan ='$jurusan'");
    $belumdicek = $bahan2 -> fetch_array(MYSQLI_NUM);
   ?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['status', 'jumlah'],
            ['Diterima',     <?= $diterima[0]?>],
            ['Ditolak',      <?= $ditolak[0]?>],
            ['Belum di Cek',  <?= $belumdicek[0]?>]
        ]);

        var options = {
          title: '',
          pieHole: 0.10,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>


   <?php
    $bahan = mysqli_query($conn, "SELECT COUNT(status) FROM tb_bahan WHERE status = 'Diterima' AND jurusan ='$jurusan'");
    $diterima = $bahan -> fetch_array(MYSQLI_NUM);
    $bahan1 = mysqli_query($conn, "SELECT COUNT(status) FROM tb_bahan WHERE status = 'Ditolak' AND jurusan ='$jurusan'");
    $ditolak = $bahan1 -> fetch_array(MYSQLI_NUM);
    $bahan2 = mysqli_query($conn, "SELECT COUNT(status) FROM tb_bahan WHERE status = 'Belum di Cek' AND jurusan ='$jurusan'");
    $belumdicek = $bahan2 -> fetch_array(MYSQLI_NUM);
   ?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['status', 'jumlah'],
            ['Diterima',     <?= $diterima[0]?>],
            ['Ditolak',      <?= $ditolak[0]?>],
            ['Belum di Cek',  <?= $belumdicek[0]?>]
        ]);

        var options = {
          title: 'Status Pengecekan Bahan',
          pieHole: 0.10,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchartbahan'));
        chart.draw(data, options);
      }
    </script>


<?php
    $alat = mysqli_query($conn, "SELECT COUNT(status) FROM tb_alat WHERE status = 'Diterima' AND jurusan ='$jurusan'");
    $diterima = $alat -> fetch_array(MYSQLI_NUM);
    $alat1 = mysqli_query($conn, "SELECT COUNT(status) FROM tb_alat WHERE status = 'Ditolak' AND jurusan ='$jurusan'");
    $ditolak = $alat1 -> fetch_array(MYSQLI_NUM);
    $alat2 = mysqli_query($conn, "SELECT COUNT(status) FROM tb_alat WHERE status = 'Belum di Cek' AND jurusan ='$jurusan'");
    $belumdicek = $alat2 -> fetch_array(MYSQLI_NUM);
   ?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['status', 'jumlah'],
            ['Diterima',     <?= $diterima[0]?>],
            ['Ditolak',      <?= $ditolak[0]?>],
            ['Belum di Cek',  <?= $belumdicek[0]?>]
        ]);

        var options = {
          title: 'Status Pengecekan Alat',
          pieHole: 0.15,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchartalat'));
        chart.draw(data, options);
      }
    </script>
</head>
<style>
    body {
        background-image: url(img/bgori.png);
        background-size: cover;
    }
    
    .spinner {
  width: 70.4px;
  height: 70.4px;
  --clr: rgb(247, 197, 159);
  --clr-alpha: rgb(247, 197, 159,.1);
  animation: spinner 1.6s infinite ease;
  transform-style: preserve-3d;
}

.spinner > div {
  background-color: var(--clr-alpha);
  height: 100%;
  position: absolute;
  width: 100%;
  border: 3.5px solid var(--clr);
}

.spinner div:nth-of-type(1) {
  transform: translateZ(-35.2px) rotateY(180deg);
}

.spinner div:nth-of-type(2) {
  transform: rotateY(-270deg) translateX(50%);
  transform-origin: top right;
}

.spinner div:nth-of-type(3) {
  transform: rotateY(270deg) translateX(-50%);
  transform-origin: center left;
}

.spinner div:nth-of-type(4) {
  transform: rotateX(90deg) translateY(-50%);
  transform-origin: top center;
}

.spinner div:nth-of-type(5) {
  transform: rotateX(-90deg) translateY(50%);
  transform-origin: bottom center;
}

.spinner div:nth-of-type(6) {
  transform: translateZ(35.2px);
}

@keyframes spinner {
  0% {
    transform: rotate(45deg) rotateX(-25deg) rotateY(25deg);
  }

  50% {
    transform: rotate(45deg) rotateX(-385deg) rotateY(25deg);
  }

  100% {
    transform: rotate(45deg) rotateX(-385deg) rotateY(385deg);
  }
}
</style>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="homejurusan.php?id=<?= $id ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Beranda RKAS </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="homejurusan.php?id=<?= $id ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                PENGAJUAN
            </div>

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
                        <a class="collapse-item" href='alat_bahanjurusan.php?id=<?= $id ?>'>Bahan Praktik</a>
                        <a class="collapse-item" href="alat_praktikjurusan.php?id=<?= $id ?>">Alat Praktik</a>
                        
                    </div>
                </div>
            </li>-
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
                        <a class="collapse-item" href="statuspengajuanbahan.php?id=<?= $id ?>">Bahan Praktik</a>
                        <a class="collapse-item" href="statuspengajuanalat.php?id=<?= $id ?>">Alat Praktik</a>
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
                        <a class="collapse-item" href="lihatpengajuan.php?id=<?= $id ?>">Program Keahlian</a>
                        
                        
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php foreach ($sql as $row) :
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
                                <h1 style="border-radius: 100px; font-family:verdana;" class="h3 mb-4 bg-light text-primary">Selamat Datang di Website Pengajuan Sarana <br> SMK Negeri 2 Cimahi</h1>
                            </div>
                   <!-- Content Row -->
                   <div class="row">

<div class="col-xl-11 col-lg-7" style="padding-left: 15%;">


<!-- Donut Chart -->
<div class="col-xl-11 col-lg-7">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Statistik</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
        <div id="donutchartbahan" style="width: 450px; height: 150px;"></div>
        <div id="donutchartalat" style="width: 450px; height: 150px;"></div>
        <div class="spinner">
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
</div>
            </div>
        </div>
    </div>
</div>
            </div>
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
    <script src="js/demo/chart-area-demo-jurusan.js"></script>
    <script src="js/demo/chart-pie-demo-jurusan.js"></script>

</body>

</html>