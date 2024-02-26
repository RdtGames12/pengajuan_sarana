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
    $subtotal = $harga * $qty;
    $ekstensi_gambar = array('png', 'jpg');
    $gambar = $_FILES['contoh_gambar']['name'];
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['contoh_gambar']['size'];
    $file_tmp = $_FILES['contoh_gambar']['tmp_name'];

    move_uploaded_file($file_tmp, 'foto_contoh/'.$gambar);
    $kebutuhan = $_POST['kebutuhan'];
    foreach ($sql1 as $row) :
    if ($id == 356758684) {
        $proses =  mysqli_query($conn, "INSERT INTO tb_alat (sumber_dana, tahun_ajuan, item, merk, spesifikasi, harga, qty, contoh_gambar, subtotal, kebutuhan_untuk, jurusan, status ) VALUES ('$sumber_dana','$tahun_ajuan','$nama_item','$merk','$spesifikasi', '$harga', '$qty', '$gambar', '$subtotal', '$kebutuhan', 'Mekatronika', 'Belum di Cek')");
    }
    elseif ($id == 287839666) {
        $proses =  mysqli_query($conn, "INSERT INTO tb_alat (sumber_dana, tahun_ajuan, item, merk, spesifikasi, harga, qty, contoh_gambar, subtotal, kebutuhan_untuk, jurusan, status ) VALUES ('$sumber_dana','$tahun_ajuan','$nama_item','$merk','$spesifikasi', '$harga', '$qty', '$gambar', '$subtotal', '$kebutuhan', 'PPLG', 'Belum di Cek')");
    }
    elseif ($id == 499308321) {
        $proses =  mysqli_query($conn, "INSERT INTO tb_alat (sumber_dana, tahun_ajuan, item, merk, spesifikasi, harga, qty, contoh_gambar, subtotal, kebutuhan_untuk, jurusan, status ) VALUES ('$sumber_dana','$tahun_ajuan','$nama_item','$merk','$spesifikasi', '$harga', '$qty', '$gambar', '$subtotal', '$kebutuhan', 'Kimia', 'Belum di Cek')");
    }
    elseif ($id == 257802071) {
        $proses =  mysqli_query($conn, "INSERT INTO tb_alat (sumber_dana, tahun_ajuan, item, merk, spesifikasi, harga, qty, contoh_gambar, subtotal, kebutuhan_untuk, jurusan, status ) VALUES ('$sumber_dana','$tahun_ajuan','$nama_item','$merk','$spesifikasi', '$harga', '$qty', '$gambar', '$subtotal', '$kebutuhan', 'Animasi', 'Belum di Cek')");
    }
    elseif ($id == 6083232) {
        $proses =  mysqli_query($conn, "INSERT INTO tb_alat (sumber_dana, tahun_ajuan, item, merk, spesifikasi, harga, qty, contoh_gambar, subtotal, kebutuhan_untuk, jurusan, status ) VALUES ('$sumber_dana','$tahun_ajuan','$nama_item','$merk','$spesifikasi', '$harga', '$qty', '$gambar', '$subtotal', '$kebutuhan', 'DKV', 'Belum di Cek')");
    }
    elseif ($id == 899055276) {
        $proses =  mysqli_query($conn, "INSERT INTO tb_alat (sumber_dana, tahun_ajuan, item, merk, spesifikasi, harga, qty, contoh_gambar, subtotal, kebutuhan_untuk, jurusan, status ) VALUES ('$sumber_dana','$tahun_ajuan','$nama_item','$merk','$spesifikasi', '$harga', '$qty', '$gambar', '$subtotal', '$kebutuhan', 'Pemesinan', 'Belum di Cek')");
    } else {
        $proses =  mysqli_query($conn, "INSERT INTO tb_alat (sumber_dana, tahun_ajuan, item, merk, spesifikasi, harga, qty, contoh_gambar, subtotal, kebutuhan_untuk) VALUES ('$sumber_dana','$tahun_ajuan','$nama_item','$merk','$spesifikasi', '$harga', '$qty', '$gambar', '$subtotal', '$kebutuhan')");
    }
    endforeach;

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