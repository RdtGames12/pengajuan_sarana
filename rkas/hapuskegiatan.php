<?php
include "koneksi.php";
session_start();
$id = $_SESSION['id'];
$id1 = $_GET['id1'];
if ($id == 641487792) {
    $jurusan =  'Wakil Kepala Sekolah';
}
$kegiatan = mysqli_query($conn, "SELECT * FROM tb_kegiatan WHERE id_kegiatan = '$id1'");
$sql1 = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user='$id'");
$proses =  mysqli_query($conn, "DELETE FROM tb_kegiatan WHERE id_kegiatan = '$id1'");

if ($proses) {
    echo "
    <script>
        alert('Data Berhasil di Hapus!');
        window.location.href='lihatpengajuanwakepsek.php?id=$id';
    </script>
    ";
} else {
    echo "
<script>
    alert('Data Gagal di Hapus');  
    window.location.href='lihatpengajuanwakepsek.php?id=$id';
</script>
";
}
?>