<?php
include "koneksi.php";
if (isset($_POST['simpan'])) {
    $sumber_dana = $_POST['sumber_dana'];
    $tahun_ajuan = $_POST['tahun_ajuan'];
    $nama_item = $_POST['nama_item'];
    $merk = $_POST['merk'];
    $spesifikasi = $_POST['spesifikasi'];
    $harga = $_POST['harga'];
    $qty = $_POST['qty'];
    $kebutuhan = $_POST['kebutuhan'];
}
$query = "INSERT INTO tb_det_alat(sumber_dana, item, merk, spesifikasi, harga, qty, kebetuhan_untuk) VALUES ('$sumber_dana','$nama_item','$merk','$spesifikasi','$harga','$qty','$kebutuhan',)";
$proses = mysql_query($conn, $query);

if ($proses) {
    echo "
    <script>
    alert('Data Berhasil Ditambahkan');
    window.location.href='prosesalatpraktik.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Data Gagal Ditambahkan');
    window.location.href='prosesalatpraktik.php';
    </script>
    ";
}
?>