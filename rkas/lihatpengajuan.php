<?php
include "koneksi.php";
session_start();
$id = $_SESSION['id'];
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
}
else {
    header("location:index.php");
}
$bahan = mysqli_query($conn, "SELECT * FROM tb_bahan WHERE jurusan = '$jurusan'");
$alat = mysqli_query($conn, "SELECT * FROM tb_alat  WHERE jurusan = '$jurusan'");
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
                        <a class="collapse-item" href="alat_bahanjurusan.php?id=<?= $id ?>">Bahan Praktik</a>
                        <a class="collapse-item" href="alat_praktikjurusan.php?id=<?= $id ?>">Alat Praktik</a>
                        
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
    <form action="lihatpengajuan.php?id=<?= $id ?>" method="POST">
                        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Ajuan</h6>
                        <select class="animated--fade-in" name="ajuan">
                            <option value="Ajuan Bahan" name="bahan1"<?php echo isset($_POST['ajuan']) && $_POST['ajuan'] == 'Ajuan Bahan' ? 'selected' : ''; ?>>Ajuan Bahan</option>
                            <option value="Ajuan Alat" name="alat1"<?php echo isset($_POST['ajuan']) && $_POST['ajuan'] == 'Ajuan Alat' ? 'selected' : ''; ?>>Ajuan Alat</option>
                        </select>                                                                                             
                        <select class="animated--fade-in" name="tahun">
                            <option value="2024" name="2024"<?php echo isset($_POST['tahun']) && $_POST['tahun'] == '2024' ? 'selected' : ''; ?>>2024</option>
                            <option value="2025" name="2025"<?php echo isset($_POST['tahun']) && $_POST['tahun'] == '2025' ? 'selected' : ''; ?>>2025</option>
                            <option value="2026" name="2026"<?php echo isset($_POST['tahun']) && $_POST['tahun'] == '2026' ? 'selected' : ''; ?>>2026</option>
                        </select>
                            <input class="bg-primary text-gray-100" style="width: 10%;" type="submit" name="cari" value="Cari">
                                </form>
                        </div>
                        <?php
                        
if (isset($_POST['cari'])) {
    $cari = $_POST['ajuan'];
    $tahun_terpilih = $_POST['tahun'];

    if ($cari == 'Ajuan Alat') {
        $query = "SELECT * FROM tb_alat WHERE jurusan = '$jurusan'";
        if (($tahun_terpilih)) {
            $query .= "AND tahun_ajuan = '$tahun_terpilih'";
        }
        $result = mysqli_query($conn, $query);
?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Nama Item</th>
                        <th>Tahun Ajuan</th>
                        <th>Merk</th>
                        <th>Spesifikasi</th>
                        <th>Harga</th>
                        <th>Jumlah Beli</th>
                        <th>Contoh Gambar</th>
                        <th>Bukti Gambar</th>
                        <th>Sub Total</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $no = 0;
                    foreach ($result as $row) :
                        ?>
                            <tr>
                                <th><?php $no += 1;
                                    echo $no; ?></th>
                                <th><?= $row["item"]; ?></th>
                                <th><?= $row["tahun_ajuan"]; ?></th>
                                <th><?= $row["merk"]; ?></th>
                                <th><?= $row["spesifikasi"]; ?></th>
                                <th>Rp<?= number_format($row["harga"], 2, ',', '.'); ?></th>
                                <th><?= $row["qty"]; ?></th>
                                <?php if ($row['contoh_gambar'] == '') {
                                    ?>
                                <th>
                                    Tidak Memberikan Contoh
                                </th>
                                <?php    
                                } else {
                                    ?>
                                    <th><img src="foto_contoh/<?= $row['contoh_gambar']; ?>" width="100px" height="100px"></th>
                                <?php }?>
                                <?php if ($row['bukti'] == '') {
                                    ?>
                                <th>
                                    Belum Direalisasikan/Tidak Memberikan Foto
                                </th>
                                <?php    
                                } else {
                                    ?>
                                   <th><img src="foto_bukti/<?= $row['bukti']; ?>" width="100px" height="100px"></th>
                                <?php }?>
                                <th>Rp<?= number_format($row["subtotal"], 2, ',', '.'); ?></th>
                                <?php if ($row['status'] == 'Belum di Cek') {
                                    ?>
                                <th>
                                    <a href="editalat.php?id=<?= $id ?>&id1=<?= $row['id_alat']?>">EDIT | </a> <a href="hapusalat.php?id=<?= $id ?>&id1=<?= $row['id_alat']?>">HAPUS</a>
                                </th>
                                <?php    
                                } else {
                                    ?>
                                    <th>
                                    <?= $row['status']; ?>
                                    </th>
                                <?php }?>
                            </tr>
                        <?php
                        endforeach;
                    $total_query = mysqli_query($conn, "SELECT SUM(subtotal) FROM tb_alat WHERE tahun_ajuan = '$tahun_terpilih' AND jurusan = '$jurusan'");
                    $total_result = $total_query->fetch_array(MYSQLI_NUM);
                    $total = $total_result[0];

                    $formatted_total = number_format($total, 2, ',', '.');
                    ?>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>TOTAL</th>
                    <th>Rp<?= $formatted_total ?></th>
                    <th></th>
                </table>
            </div>
        </div>
        <form action="printalat.php?id=<?= $id ?>" method="POST">
        <input type="hidden" name="tahun" value="<?= $tahun_terpilih ?>">
        <input type="hidden" name="id" value="<?= $id ?>">
        <button class="bg-primary text-gray-100" style="width: 10%; height: 10%;" name="simpan">PDF</button>
        </form>
        <form action="excelalat.php?id=<?= $id ?>" method="POST">
        <a href="excelalat.php?id=<?= $id ?>"><button class="bg-primary text-gray-100" style="width: 10%; height: 10%;" name="simpan">EXCEL</button></a>
        </form>
<?php
    } elseif ($cari == 'Ajuan Bahan') {
        $query = "SELECT * FROM tb_bahan WHERE tahun_ajuan = '$tahun_terpilih' AND jurusan = '$jurusan'";
        if (($tahun_terpilih)) {
            $query .= " AND tahun_ajuan = '$tahun_terpilih'";
        }
        $result = mysqli_query($conn, $query);
?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Nama Item</th>
                        <th>Tahun Ajuan</th>
                        <th>Merk</th>
                        <th>Spesifikasi</th>
                        <th>Harga</th>
                        <th>Jumlah Beli</th>
                        <th>Contoh Gambar</th>
                        <th>Bukti Gambar</th>
                        <th>Sub Total</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $no = 0;
                    foreach ($result as $row) :
                    ?>
                        <tr>
                            <th><?php $no += 1;
                                echo $no; ?></th>
                            <th><?= $row["item"]; ?></th>
                            <th><?= $row["tahun_ajuan"]; ?></th>
                            <th><?= $row["merk"]; ?></th>
                            <th><?= $row["spesifikasi"]; ?></th>
                            <th><?= $row["harga"]; ?></th>
                            <th><?= $row["qty"]; ?></th>
                            <?php if ($row['contoh_gambar'] == '') {
                                    ?>
                                <th>
                                    Tidak Memberikan Contoh
                                </th>
                                <?php    
                                } else {
                                    ?>
                                    <th><img src="foto_contoh/<?= $row['contoh_gambar']; ?>" width="100px" height="100px"></th>
                                <?php }?>
                                <?php if ($row['bukti'] == '') {
                                    ?>
                                <th>
                                    Belum Direalisasikan/Tidak Memberikan Foto
                                </th>
                                <?php    
                                } else {
                                    ?>
                                   <th><img src="foto_bukti/<?= $row['bukti']; ?>" width="100px" height="100px"></th>
                                <?php }?>
                            <th>Rp<?= number_format($row["subtotal"], 2, ',', '.'); ?></th>
                            <?php if ($row['status'] == 'Belum di Cek') {
                                ?>
                            <th>
                                <a href="editbahan.php?id=<?= $id ?>&id1=<?= $row['id_bahan']?>">EDIT | </a> <a href="hapusbahan.php?id=<?= $id ?>&id1=<?= $row['id_bahan']?>">HAPUS</a>
                            </th>
                            <?php    
                            } else {
                                ?>
                                <th>
                                <?= $row['status']; ?>
                                </th>
                            <?php }?>
                        </tr>
                    <?php
                    endforeach;
                    $total_query = mysqli_query($conn, "SELECT SUM(subtotal) FROM tb_bahan WHERE tahun_ajuan = '$tahun_terpilih' AND jurusan = '$jurusan'");
                    $total_result = $total_query->fetch_array(MYSQLI_NUM);
                    $total = $total_result[0];

                    $formatted_total = number_format($total, 2, ',', '.');
                    ?>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>TOTAL</th>
                    <th>Rp<?= $formatted_total ?></th>
                    <th></th>
                </table>
            </div>
        </div>
        <form action="printbahan.php?id=<?= $id ?>" method="POST">
        <input type="hidden" name="tahun" value="<?= $tahun_terpilih ?>">
        <input type="hidden" name="id" value="<?= $id ?>">
        <button class="bg-primary text-gray-100" style="width: 10%; height: 10%;" name="simpan">PDF</button>
        </form>
        <form action="excelbahan.php?id=<?= $id ?>" method="POST">
        <a href="excelbahan.php?id=<?= $id ?>"><button class="bg-primary text-gray-100" style="width: 10%; height: 10%;" name="simpan">EXCEL</button></a>
        </form>
<?php
    }
}
?>
                    </div>
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