<?php
include "koneksi.php";
if (isset($_POST['simpan'])) {
    $tahun_terpilih = $_POST['tahun'];
    $id = $_POST['id'];
}
if ($id == 641487792) {
    $jurusan =  'Wakil Kepala Sekolah';
}
$kegiatan = mysqli_query($conn, "SELECT * FROM tb_kegiatan WHERE tahun_ajuan='$tahun_terpilih'");
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

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body onload="window.print()">

    <!-- Page Wrapper -->

            <!-- Divider -->


            <!-- Sidebar Toggler (Sidebar) -->

            

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
                            <div class="nav-link dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php foreach ($sql1 as $row) :
                                echo $row['nama']; 
                                    endforeach;
                                    ?></span>
                                </div>
                            <!-- Dropdown - User Information -->

                </nav>
                <table width="100%">
<tr>
<td width="40" align="right"><img src="smk.png" width="40%"></td>
<td width="20" align="center">
    <b>PENGAJUAN 
    <br>SMK NEGERI 2 CIMAHI</b>
    <br><p>Jl.Kamarung Km. 1,5 No. 69 Kel. Citeureup Kec. Cimahi  Utara
    <br>Telp/Fax:(022) 87805857 Website : http://smkn2cmi.sch.id E-mail : smkn2cmi@yahoo.com 
    <br> Kota Cimahi - 40512</p><br></td>
<td width="40" align="left"><img src="" width="60%"></td>
</tr>
</table>
<hr>
    <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold">Daftar Ajuan Kegiatan</h6>
                        </div>
                <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Nama Kegiatan</th>
                        <th>Tahun Ajuan</th>
                        <th>Bulan</th>
                        <th>Biaya</th>
                        <th>Volume</th>
                        <th>Keterangan</th>
                        <th>Subtotal</th>
                    </tr>
                    <?php
                    $no = 0;
                    foreach ($kegiatan as $row) :
                    ?>
                        <tr>
                            <th><?php $no += 1;
                                echo $no; ?></th>
                            <th><?= $row["nama_kegiatan"]; ?></th>
                            <th><?= $row["tahun_ajuan"]; ?></th>
                            <th><?= $row["bulan"]; ?></th>
                            <th><?= $row["biaya"]; ?></th>
                            <th><?= $row["volume_1"]; ?></th>
                            <th><?= $row["keterangan_volume1"]; ?></th>
                            <th></th>
                            <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th><?= $row["volume_2"];?></th>
                                        <th><?= $row["keterangan_volume2"]?></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th><?= $row["volume_3"];?></th>
                                        <th><?= $row["keterangan_volume3"]?></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th><?= $row["volume_4"];?></th>
                                        <th><?= $row["keterangan_volume4"]?></th>
                                        <th>Rp<?= number_format($row["total"], 2, ',', '.'); ?></th>
                            </tr>
                        <?php
                    endforeach;
                    $total_query = mysqli_query($conn, "SELECT SUM(total) FROM tb_kegiatan WHERE tahun_ajuan = '$tahun_terpilih' ");
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
                    <th>TOTAL</th>
                    <th>Rp<?= $formatted_total ?></th>
                </table>
            </div>
        </div>
        <div>
	<div style="width:400px;float:right;text-align:right">
		<b>Kota Cimahi, <?=  date('d-m-Y'); ?></b>
		<br>
        <br>
        <br>
		<p>Nama : <br/>NIP. 1234</p>
	</div>
	<div style="clear:both"></div>
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
    
    <meta http-equiv="refresh" content="1; URL=http:lihatpengajuanwakepsek.php?id=<?= $id ?>" />
</body>

</html>