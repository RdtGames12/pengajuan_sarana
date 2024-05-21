<?php
include "koneksi.php";
session_start();
$sql = mysqli_query($conn, "SELECT * FROM tb_atk");
$id = $_SESSION['id'];
if ($id != 171128105) {
    header("location:index.php");
}
$sql1 = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user='$id'");

if (isset($_POST['simpan'])) {
    $sumber_dana = $_POST['sumber_dana'];
    $nama_barang = $_POST['nama_barang'];
    $tahun_ajuan = $_POST['tahun_ajuan'];

    // Mengonversi input harga_barang ke numerik
    $harga_barang = $_POST['harga_barang'];
    $harga_barang = (float) str_replace(['Rp. ', ','], '', $harga_barang);

    $jumlah = $_POST['jumlah'];
    $satuan = $_POST['satuan'];
    $total = $jumlah * $harga_barang; // Menggunakan nilai harga_barang yang sudah dikonversi ke tipe numerik

    $proses = mysqli_query($conn, "INSERT INTO tb_atk (sumber_dana, nama_barang, tahun_ajuan, harga_barang, jumlah, satuan, status, total) VALUES ('$sumber_dana', '$nama_barang', '$tahun_ajuan', '$harga_barang', '$jumlah', '$satuan', 'Belum di Cek', '$total')");
    
    if ($proses) {
        echo "
        <script>
            alert('Data Berhasil Masuk!');
            window.location.href='atk.php?id=$id';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal Masuk');  
            window.location.href='atk.php?id=$id';
        </script>
        ";
    }
}
?>
