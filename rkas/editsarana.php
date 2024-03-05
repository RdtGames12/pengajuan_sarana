<?php
include "koneksi.php";
$id = $_GET['id'];
$id1 = $_GET['id1'];
if ($id == 641487792) {
    $jurusan =  'Wakil Kepala Sekolah';
}
$sarana = mysqli_query($conn, "SELECT * FROM tb_sarana WHERE id_sarana = '$id1'");
$sql1 = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user='$id'");
foreach ($sarana as $row) {
    $sumber_dana = $row['sumber_dana'];
    $tahun_ajuan = $row['tahun_ajuan'];
    $bulan = $row['bulan'];
    $nama_ruang = $row['nama_ruang'];
    $jenis_sarana = $row['jenis_sarana'];
    $ajuan_sarana = $row['ajuan_sarana'];
    $jumlah = $row['jumlah'];
    $harga = $row['harga'];
    $foto = $row['foto'];
    $keterangan_saran = $row['keterangan_saran'];
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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php foreach ($sql1 as $row) :
                                echo $row['nama']; 
                                    endforeach;
                                    ?></span>
                            </a>
                            <!-- Dropdown - User Information -->
                        </li>

                    </ul>

                </nav>
                <div class="container">
        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Input Pengajuan Alat Praktik!</h1>
                            </div>
                            <form class="user" action="proseseditsarana.php?id=<?= $id ?>&id1=<?= $id1 ?>" method="POST" enctype="multipart/form-data">
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
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                    </select>
                                    <!-- <input type="text" class="form-control form-control-user" id="sumber"
                                        placeholder="Sumber Dana"> -->
                                </div>
                                <div class="form-group">
                                <label for="bulan">Waktu (bulan ke )</label>
                                <select class="form-control" id="bulan" name="bulan">
                                        <option value="Januari">Januari</option>
                                        <option value="Februari">Februari</option>
                                        <option value="Maret">Maret</option>
                                        <option value="April">April</option>
                                        <option value="Mei">Mei</option>
                                        <option value="Juni">Juni</option>
                                        <option value="Juli">Juli</option>
                                        <option value="Agustus">Agustus</option>
                                        <option value="September">September</option>
                                        <option value="Oktober">Oktober</option>
                                        <option value="November">November</option>
                                        <option value="Desember">Desember</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="nama_ruang">Nama Ruang</label>
                                    <input type="text" class="form-control form-control-user" id="nama_ruang" name="nama_ruang"
                                        placeholder="Masukkan Nama Ruang" value="<?= $nama_ruang ?>">
                                </div>
                                <div class="form-group">
                                    <label for="jenis_sarana">Jenis Sarana:</label>
                                    <select class="form-control" id="jenis_sarana" name="jenis_sarana">
                                        <option value="Pengajuan">Pengajuan Sarana</option>
                                        <option value="Kerusakan">Kerusakan Sarana</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="ajuan_sarana">Ajuan Sarana:</label>
                                    <input type="text" class="form-control form-control-user" id="ajuan_sarana" name="ajuan_sarana"
                                    value="<?= $ajuan_sarana ?>">
                                </div>
                                <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                    <input type="number" class="form-control form-control-user" id="jumlah" name="jumlah"
                                        placeholder="Masukkan Jumlah" min=1 value="<?= $jumlah ?>">
                                </div>
                                <div class="form-group">
                                <label for="jumlah">Harga</label>
                                    <input type="number" class="form-control form-control-user" id="harga" name="harga"
                                        placeholder="Masukkan harga" min=1 value="<?= $harga ?>">
                                </div>
                                <h6>Foto</h6>
                                <div class="form-group">
                                    <input type="file" id="foto" name="foto" value="<?= $foto ?>">
                                </div>
                                <div class="form-group">
                                <label for="keterangan_saran">Keterangan/Saran</label>
                                    <input type="text" class="form-control form-control-user" id="keterangan_saran" name="keterangan_saran"
                                        placeholder="Masukkan Keterangan Atau Saran" value="<?= $keterangan_saran ?>">
                                </div>
                                <a class="scroll-to-top rounded" href="#page-top">
                                    <i class="fas fa-angle-up"></i>
                                </a>
                                <input type="submit" name="simpan" value="Simpan" style="width:100%;" class="btn btn-primary btn-user btn-block">
                                </form>
                                <hr>

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