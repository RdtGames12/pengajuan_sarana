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
    $vol1 = $_POST['vol1'];
    $vol2 = $_POST['vol2'];
    $vol3 = $_POST['vol3'];
    $vol4 = $_POST['vol4'];
    $volket1 = $_POST['volket1'];
    $volket2 = $_POST['volket2'];
    $volket3 = $_POST['volket3'];
    $volket4 = $_POST['volket4'];
    $proses =  mysqli_query($conn, "INSERT INTO tb_kegiatan (sumber_dana, tahun_ajuan, nama_kegiatan, bulan, biaya, volume_1, volume_2, volume_3, volume_4, keterangan_volume1, keterangan_volume2, keterangan_volume3, keterangan_volume4, total, status ) VALUES ('$sumber_dana','$tahun_ajuan','$nama_kegiatan','$bulan', '$biaya', '$vol1', '$vol2', '$vol3', '$vol4', '$volket1', '$volket2', '$volket3', '$volket4', '$total', 'Belum di Cek')");

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