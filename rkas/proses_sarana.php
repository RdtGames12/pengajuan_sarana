<?php
include "koneksi.php";
$sql = mysqli_query($conn, "SELECT * FROM tb_sarana");
$id = $_GET['id'];
$sql1 = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user='$id'");

if (isset($_POST['simpan'])) {
    $sumber_dana = $_POST['sumber_dana'];
    $tahun_ajuan = $_POST['tahun_ajuan'];
    $bulan = $_POST['bulan'];
    $nama_ruang = $_POST['nama_ruang'];
    $jkerusakan = $_POST['jkerusakan'];
    $jumlah = $_POST['jumlah'];
    $keterangan = $_POST['keterangan_saran'];
    $proses =  mysqli_query($conn, "INSERT INTO tb_sarana (sumber_dana, tahun_ajuan, bulan, nama_ruang, jkerusakan, jumlah, keterangan_saran, status) VALUES ('$sumber_dana', '$tahun_ajuan', '$bulan', '$nama_ruang', '$jkerusakan', '$jumlah', '$keterangan', 'Belum di cek')");

    if ($proses) {
        echo "
        <script>
            alert('Data Berhasil Masuk!');
            window.location.href='sarana.php?id=$id';
        </script>
        ";
    } else {
        echo "
    <script>
        alert('Data Gagal Masuk');  
        window.location.href='sarana.php?id=$id';
    </script>
    ";
    }
}

?>