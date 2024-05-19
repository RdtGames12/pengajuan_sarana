<?php
include "koneksi.php";
session_start();
$id = $_GET['id'];
$id1 = $_GET['id1'];
if ($id == 356758684) {
    $jurusan =  'Mekatronika';
    $profil = '<img class="img-profile rounded-circle" src="img/logomeka.png">';
}
elseif ($id == 287839666) {
    $jurusan =  'PPLG';
    $profil = '<img class="img-profile rounded-circle" src="img/logorpl.png">';
}
elseif ($id == 499308321) {
    $jurusan =  'Kimia';
    $profil = '<img class="img-profile rounded-circle" src="img/logokimia.png">';
}
elseif ($id == 257802071) {
    $jurusan =  'Animasi';
    $profil = '<img class="img-profile rounded-circle" src="img/logoanimasi.png">';
}
elseif ($id == 6083232) {
    $jurusan =  'DKV';
    $profil = '<img class="img-profile rounded-circle" src="img/logodkv.png">';
}
elseif ($id == 899055276) {
    $jurusan =  'Pemesinan';
    $profil = '<img class="img-profile rounded-circle" src="img/logomesin.png">';
}
else {
    header("location:index.php");
}
$bahan = mysqli_query($conn, "SELECT * FROM tb_bahan WHERE id_bahan = '$id1' AND jurusan = '$jurusan'");
$sql1 = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user='$id'");

if ($id == 356758684) {
    $proses =  mysqli_query($conn, "DELETE FROM tb_bahan WHERE id_bahan = '$id1'");
}
elseif ($id == 287839666) {
    $proses =  mysqli_query($conn, "DELETE FROM tb_bahan WHERE id_bahan = '$id1'");
}
elseif ($id == 499308321) {
    $proses =  mysqli_query($conn, "DELETE FROM tb_bahan WHERE id_bahan = '$id1'");
}
elseif ($id == 257802071) {
    $proses =  mysqli_query($conn, "DELETE FROM tb_bahan WHERE id_bahan = '$id1'");
}
elseif ($id == 6083232) {
    $proses =  mysqli_query($conn, "DELETE FROM tb_bahan WHERE id_bahan = '$id1'");
}
elseif ($id == 899055276) {
    $proses =  mysqli_query($conn, "DELETE FROM tb_bahan WHERE id_bahan = '$id1'");
}

if ($proses) {
    echo "
    <script>
        alert('Data Berhasil di Hapus!');
        window.location.href='lihatpengajuan.php?id=$id';
    </script>
    ";
} else {
    echo "
<script>
    alert('Data Gagal di Hapus');  
    window.location.href='lihatpengajuan.php?id=$id';
</script>
";
}
?>