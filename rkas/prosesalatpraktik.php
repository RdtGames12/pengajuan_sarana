<?php
include "koneksi.php";
$sql = mysqli_query($conn, "SELECT * FROM tb_alat");
$id = $_GET['id'];
$sql1 = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user='$id'");
if (isset($_POST['simpan'])) {
    $sumber_dana = $_POST['sumber_dana'];
    $tahun_ajuan = $_POST['tahun_ajuan'];
    $nama_item = $_POST['nama_item'];
    $merk = $_POST['merk'];
    $spesifikasi = $_POST['spesifikasi'];
    $harga = $_POST['harga'];
    $qty = $_POST['qty'];
    $kebutuhan = $_POST['kebutuhan'];
    if ($id == 356758684) {
        $proses =  mysqli_query($conn, "INSERT INTO tb_alat (sumber_dana, tahun_ajuan, item, merk, spesifikasi, harga, qty, kebutuhan_untuk, jurusan, status ) VALUES ('$sumber_dana','$tahun_ajuan','$nama_item','$merk','$spesifikasi', '$harga', '$qty', '$kebutuhan', 'Mekatronika', 'Belum di Cek')");
    }
    elseif ($id == 287839666) {
        $proses =  mysqli_query($conn, "INSERT INTO tb_alat (sumber_dana, tahun_ajuan, item, merk, spesifikasi, harga, qty, kebutuhan_untuk, jurusan, status ) VALUES ('$sumber_dana','$tahun_ajuan','$nama_item','$merk','$spesifikasi', '$harga', '$qty', '$kebutuhan', 'PPLG', 'Belum di Cek')");
    }
    elseif ($id == 499308321) {
        $proses =  mysqli_query($conn, "INSERT INTO tb_alat (sumber_dana, tahun_ajuan, item, merk, spesifikasi, harga, qty, kebutuhan_untuk, jurusan, status ) VALUES ('$sumber_dana','$tahun_ajuan','$nama_item','$merk','$spesifikasi', '$harga', '$qty', '$kebutuhan', 'Kimia', 'Belum di Cek')");
    }
    elseif ($id == 257802071) {
        $proses =  mysqli_query($conn, "INSERT INTO tb_alat (sumber_dana, tahun_ajuan, item, merk, spesifikasi, harga, qty, kebutuhan_untuk, jurusan, status ) VALUES ('$sumber_dana','$tahun_ajuan','$nama_item','$merk','$spesifikasi', '$harga', '$qty', '$kebutuhan', 'Animasi', 'Belum di Cek')");
    }
    elseif ($id == 6083232) {
        $proses =  mysqli_query($conn, "INSERT INTO tb_alat (sumber_dana, tahun_ajuan, item, merk, spesifikasi, harga, qty, kebutuhan_untuk, jurusan, status ) VALUES ('$sumber_dana','$tahun_ajuan','$nama_item','$merk','$spesifikasi', '$harga', '$qty', '$kebutuhan', 'DKV', 'Belum di Cek')");
    }
    elseif ($id == 899055276) {
        $proses =  mysqli_query($conn, "INSERT INTO tb_alat (sumber_dana, tahun_ajuan, item, merk, spesifikasi, harga, qty, kebutuhan_untuk, jurusan, status ) VALUES ('$sumber_dana','$tahun_ajuan','$nama_item','$merk','$spesifikasi', '$harga', '$qty', '$kebutuhan', 'Pemesinan', 'Belum di Cek')");
    } else {
        $proses =  mysqli_query($conn, "INSERT INTO tb_alat (sumber_dana, tahun_ajuan, item, merk, spesifikasi, harga, qty, kebutuhan_untuk) VALUES ('$sumber_dana','$tahun_ajuan','$nama_item','$merk','$spesifikasi', '$harga', '$qty', '$kebutuhan')");
    }
    if ($proses) {
        echo "
        <script>
            alert('Data Berhasil Masuk!');
            window.location.href='alat_praktikjurusan.php?id=$id';
        </script>
        ";
    } else {
        echo "
    <script>
        alert('Data Gagal Masuk');  
        window.location.href='alat_praktikjurusan.php?id=$id';
    </script>
    ";
    }
}

?>