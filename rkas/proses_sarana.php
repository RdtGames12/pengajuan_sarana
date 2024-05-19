<?php
include "koneksi.php";
session_start();
$sql = mysqli_query($conn, "SELECT * FROM tb_sarana");
$id = $_SESSION['id'];
if ($id != 641487792) {
    header("location:index.php");
}
$sql1 = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user='$id'");

if (isset($_POST['simpan'])) {
    $sumber_dana = $_POST['sumber_dana'];
    $tahun_ajuan = $_POST['tahun_ajuan'];
    $bulan = $_POST['bulan'];
    $nama_ruang = $_POST['nama_ruang'];
    $jsarana = $_POST['jenis_sarana'];
    $ajuan_sarana = $_POST['ajuan_sarana'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $subtotal = $harga * $jumlah;
    $ekstensi_gambar = array('png', 'jpg');
    $gambar = $_FILES['contoh_gambar']['name'];
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['contoh_gambar']['size'];
    $file_tmp = $_FILES['contoh_gambar']['tmp_name'];
    move_uploaded_file($file_tmp, 'foto_contoh/'.$gambar);
    $keterangan = $_POST['keterangan_saran'];
    $proses =  mysqli_query($conn, "INSERT INTO tb_sarana (sumber_dana, tahun_ajuan, bulan, nama_ruang, jenis_sarana, ajuan_sarana, jumlah, harga, subtotal, foto, keterangan_saran, status) VALUES ('$sumber_dana', '$tahun_ajuan', '$bulan', '$nama_ruang', '$jsarana', '$ajuan_sarana', '$jumlah', '$harga', '$subtotal', '$gambar', '$keterangan', 'Belum di cek')");

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