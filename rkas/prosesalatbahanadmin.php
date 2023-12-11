<?php
include "koneksi.php";
$sql = mysqli_query($conn, "SELECT * FROM tb_bahan");
$id = $_GET['id'];
$sql1 = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user='$id'");
if (isset($_POST['simpan'])) {
    $sumber_dana = $_POST['sumber_dana'];
    $tahun_ajuan = $_POST['tahun_ajuan'];
    $nama_item = $_POST['nama_item'];
    $merk = $_POST['merk'];
    $spesifikasi = $_POST['spesifikasi'];
    $harga = $_POST['harga'];
    $qty = $_POST['qty'];
    $kebutuhan = $_POST['kebutuhan'];
    $proses =  mysqli_query($conn, "INSERT INTO tb_bahan(sumber_dana, tahun_ajuan, item, merk, spesifikasi, harga, qty, kebutuhan_untuk, jurusan, status ) VALUES ('$sumber_dana','$tahun_ajuan','$nama_item','$merk','$spesifikasi', '$harga', '$qty', '$kebutuhan', 'By Admin', 'Belum di Cek')");
    if ($proses) {
        echo "
        <script>
            alert('Data Berhasil Masuk!');
            window.location.href='alat_bahan.php?id=$id';
        </script>
        ";
    } else {
        echo "
    <script>
        alert('Data Gagal Masuk');  
        window.location.href='alat_bahan.php?id=$id';
    </script>
    ";
    }
}

?>