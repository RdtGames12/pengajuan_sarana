<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Print</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body onload="window.print()">
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
                                            <th>Status</th>
                                    </tr>
                                        <?php $no = 0;?>
                                    <?php foreach ($alat as $row) : ?>
                                    <tr>
                                    <th><?php $no += 1; echo $no;?></th>
                                    <th><?= $row["item"];?></th>
                                    <th><?= $row["merk"];?></th>
                                    <th><?= $row["spesifikasi"];?></th>
                                    <th><?= $row["harga"];?></th>
                                    <th><?= $row["qty"];?></th>
                                    <th><?= $subtotal = $row["harga"] * $row["qty"];?></th>
                                    <th><?= $row['status'];?></th>
                                    </tr>
                                
                                    <?php endforeach; ?>
                                    </table>
                            </div>
                            <?php if ($cari == 'Ajuan Bahan') {
                                    ?>
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
                                            <th>Status</th>
                                    </tr>
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
                                    <th><?= $row['status'];?></th>
                                    </tr>
                                
                                    <?php endforeach; }  
                                ?></table> 
                             <?php ?>
                            </div>
                            <a href="print.html">Print This Page</a>
                        </div>
                    </div>
                        </div>
</body>
</html>