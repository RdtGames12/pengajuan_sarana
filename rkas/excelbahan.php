<?php
include "koneksi.php";
$id = $_GET['id'];
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
$bahan = mysqli_query($conn, "SELECT * FROM tb_bahan WHERE jurusan = '$jurusan'");
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
                header("Content-Disposition: attachment; filename=cetak_bahan.xls");
                ?>
        <div class="container">
        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Pengajuan Bahan</h1>
                            </div>
                            <hr>
                        </div>
                        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Ajuan Bahan</h6>
                        </div>
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
                                            <th>Sub Total</th>
                                            <th>Status</th>
                                    </tr>
                                        <?php $no = 0;?>
                                    <?php foreach ($bahan as $row) : ?>
                                    <tr>
                                    <th><?php $no += 1; echo $no;?></th>
                                    <th><?= $row["item"];?></th>
                                    <th><?= $row["tahun_ajuan"];?></th>
                                    <th><?= $row["merk"];?></th>
                                    <th><?= $row["spesifikasi"];?></th>
                                    <th><?= $row["harga"];?></th>
                                    <th><?= $row["qty"];?></th>
                                    <th><?= $subtotal = $row["harga"] * $row["qty"];?></th>
                                    <th><?= $row['status'];?></th>
                                    </tr>
                                
                                    <?php endforeach;
                                    $total = mysqli_query($conn, "SELECT SUM(subtotal) FROM tb_bahan WHERE jurusan = '$jurusan'");
                                    $gtotal = $total -> fetch_array(MYSQLI_NUM);
                                    ?>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>TOTAL</th>
                                    <th><?= $gtotal[0] ?></th>
                                    </table>
                            </div>
                                    </div>
                                    </div>
                                    </div>

    <meta http-equiv="refresh" content="1; URL=http:lihatpengajuan.php?id=<?= $id ?>" />
</body>

</html>