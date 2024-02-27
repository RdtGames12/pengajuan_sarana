<?php
include "koneksi.php";
$id = $_GET['id'];
$id1 = $_GET['id1'];
if ($id == 641487792) {
    $jurusan =  'Wakil Kepala Sekolah';
}
$sql = mysqli_query($conn, "SELECT * FROM tb_sarana");
$sql1 = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user='$id'");
if (isset($_POST['simpan'])) {
    $sumber_dana = $row['sumber_dana'];
    $tahun_ajuan = $row['tahun_ajuan'];
    $bulan = $row['bulan'];
    $nama_ruang = $row['nama_ruang'];
    $jkerusakan = $row['jkerusakan'];
    $jumlah = $row['jumlah'];
    $foto = $row['foto'];
    $keterangan_saran = $row['keterangan_saran'];
    if ($id == 641487792) {
        $proses =  mysqli_query($conn, "UPDATE tb_sarana SET 
        sumber_dana = '$sumber_dana', 
        tahun_ajuan = '$tahun_ajuan',
        bulan = '$bulan',
        nama_ruang = '$nama_ruang',
        jkerusakan = '$jkerusakan',
        jumlah = '$jumlah',
        foto = '$foto',
        keterangan_saran = '$keterangan_saran',
        WHERE id_sarana = '$id1'");
    }
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
