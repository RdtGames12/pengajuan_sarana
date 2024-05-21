<?php
include "koneksi.php";
session_start();
$id = $_SESSION['id'];
if (isset($_POST['simpan'])) {
    $tahun_terpilih = $_POST['tahun'];
    $id = $_POST['id'];
}
if ($id != 641487792) {
    header("location:index.php");
}
$kegiatan = mysqli_query($conn, "SELECT * FROM tb_kegiatan");
$sql1 = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user='$id'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
                                <?php foreach ($sql1 as $row) :
                                echo $row['nama']; 
                                    endforeach;
                                    ?></span>

                </nav>
                <?php 
                header("Content-type: application/vnd-ms-excel");
                header("Content-Disposition: attachment; filename=cetak_kegiatan.xls");
                ?>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Pengajuan Kegiatan</h1>
                            </div>
                            <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Ajuan Kegiatan</h6>
                        </div>
                            <hr>
                        </div>
                            <hr>
                            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border=1>
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

    <meta http-equiv="refresh" content="1; URL=http:lihatpengajuan.php?id=<?= $id ?>" />
</body>

</html>