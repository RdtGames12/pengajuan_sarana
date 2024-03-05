<?php
include "koneksi.php";
$id = $_GET['id'];
$id1 = $_GET['id1'];
$sql = mysqli_query($conn, "SELECT * FROM tb_atk");
$sql1 = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user='$id'");
if (isset($_POST['simpan'])) {
    $sumber_dana = $_POST['sumber_dana'];
    $nama_barang = $_POST['nama_barang'];
    $harga_barang = $_POST['harga_barang'];
    $jumlah = $_POST['jumlah'];
    $satuan = $_POST['satuan'];
    $total = $harga_barang * $jumlah;
    $proses =  mysqli_query($conn, "UPDATE tb_atk SET sumber_dana = '$sumber_dana', nama_barang = '$nama_barang', harga_barang='$harga_barang', jumlah='$jumlah', satuan = '$satuan', total='$total' WHERE id_atk = '$id1'");

    if ($proses) {
        echo "
        <script>
            alert('Data Berhasil Masuk!');
            window.location.href='lihatpengajuanatk.php?id=$id';
        </script>
        ";
    } else {
        echo "
    <script>
        alert('Data Gagal Masuk');  
        window.location.href='lihatpengajuanatk.php?id=$id';
    </script>
    ";
    }
}

?>
