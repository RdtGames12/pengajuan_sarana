<?php
include "koneksi.php";
$id = $_GET['id'];

$atk = mysqli_query($conn, "SELECT * FROM tb_atk");
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
                header("Content-Disposition: attachment; filename=cetak_atk.xls");
                ?>
        <div class="container">
        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Pengajuan Sarana</h1>
                            </div>
                            <hr>
                        </div>
                        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Ajuan Sarana</h6>
                        </div>
                                    <div class="card-body">
                        <div class="table-responsive">
                                <table border=1px; class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Satuan</th>
                        <th>Total</th>
                    </tr>
                                        <?php $no = 0;?>
                                    <?php foreach ($atk as $row) : ?>
                                        <tr>
                            <th><?php $no += 1;
                                echo $no; ?></th>
                            <th><?= $row["nama_barang"]; ?></th>
                            <th><?= $row["harga_barang"]; ?></th>
                            <th><?= $row["satuan"]; ?></th>
                            <th><?= $row["total"]; ?></th>
                        </tr>
                                
                                    <?php endforeach; ?>
                                    </table>
                            </div>
                                    </div>
                                    </div>
                                    </div>

    <meta http-equiv="refresh" content="1; URL=http:lihatpengajuanatk.php?id=<?= $id ?>" />
</body>

</html>