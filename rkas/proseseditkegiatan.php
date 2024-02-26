<?php
include "koneksi.php";
$id = $_GET['id'];
$id1 = $_GET['id1'];
if ($id == 641487792) {
    $jurusan =  'Wakil Kepala Sekolah';
}
$sql = mysqli_query($conn, "SELECT * FROM tb_kegiatan");
$sql1 = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user='$id'");
if (isset($_POST['simpan'])) {
    $sumber_dana = $_POST['sumber_dana'];
    $tahun_ajuan = $_POST['tahun_ajuan'];
    $nama_kegiatan = $_POST['nama_kegiatan'];
    $bulan = $_POST['bulan'];
    $biaya = $_POST['biaya'];
    $volume_1 = $_POST['vol1'];
    $volume_2 = $_POST['vol2'];
    $volume_3 = $_POST['vol3'];
    $volume_4 = $_POST['vol4'];
    $keterangan_volume1 = $_POST['volket1'];
    $keterangan_volume2 = $_POST['volket2'];
    $keterangan_volume3 = $_POST['volket3'];
    $keterangan_volume4 = $_POST['volket4'];
    $total = $_POST['biaya'] * $_POST['vol1'] * $_POST['vol2'] * $_POST['vol3'] * $_POST['vol4'];
    /*if ($id == 641487792) {
        $proses =  mysqli_query($conn, "UPDATE tb_kegiatan SET sumber_dana = '$sumber_dana' WHERE tb_kegiatan = '$id1'");
    }*/
    if ($proses) {
        echo "
        <script>
            alert('Data Berhasil Masuk!');
            window.location.href='lihatpengajuanwakepsek.php?id=$id';
        </script>
        ";
    } else {
        echo "
    <script>
        alert('Data Gagal Masuk');  
        window.location.href='lihatpengajuanwakepsek.php?id=$id';
    </script>
    ";
    }
}

?>
