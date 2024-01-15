<?php
include "koneksi.php";
$sql = mysqli_query($conn, "SELECT * FROM tb_kegiatan");
$id = $_GET['id'];
$sql1 = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user='$id'");

if (isset($_POST['simpan'])) {
    $sumber_dana = $_POST['sumber_dana'];
    $tahun_ajuan = $_POST['tahun_ajuan'];
    $nama_kegiatan = $_POST['nama_kegiatan'];
    $bulan = $_POST['bulan'];
    $biaya = $_POST['biaya'];
    $total = $_POST['biaya'] * $_POST['vol1'] * $_POST['vol2'] * $_POST['vol3'] * $_POST['vol4'];
    $proses =  mysqli_query($conn, "INSERT INTO tb_kegiatan (sumber_dana, tahun_ajuan, nama_kegiatan, bulan, biaya, total, status ) VALUES ('$sumber_dana','$tahun_ajuan','$nama_kegiatan','$bulan', '$biaya', '$total', 'Belum di Cek')");

    if ($proses) {
        echo "
        <script>
            alert('Data Berhasil Masuk!');
            window.location.href='kegiatan.php?id=$id';
        </script>
        ";
    } else {
        echo "
    <script>
        alert('Data Gagal Masuk');  
        window.location.href='kegiatan.php?id=$id';
    </script>
    ";
    }
}

?>