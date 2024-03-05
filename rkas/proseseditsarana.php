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
    $sumber_dana = $_POST['sumber_dana'];
    $tahun_ajuan = $_POST['tahun_ajuan'];
    $bulan = $_POST['bulan'];
    $nama_ruang = $_POST['nama_ruang'];
    $jenis_sarana = $_POST['jenis_sarana'];
    $ajuan_sarana = $_POST['ajuan_sarana'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $subtotal = $harga * $jumlah;
    $keterangan_saran = $_POST['keterangan_saran'];
    
        $proses =  mysqli_query($conn, "UPDATE tb_sarana SET
        sumber_dana = '$sumber_dana', 
        tahun_ajuan = '$tahun_ajuan',
        bulan = '$bulan',
        nama_ruang = '$nama_ruang',
        jenis_sarana = '$jenis_sarana',
        ajuan_sarana = '$ajuan_sarana',
        jumlah = '$jumlah',
        harga = '$harga',
        subtotal = '$subtotal',
        keterangan_saran = '$keterangan_saran'
        WHERE id_sarana = '$id1'");

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
