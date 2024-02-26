<?php
include "koneksi.php";
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
$sql = mysqli_query($conn, "SELECT * FROM tb_alat");
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
    $kebutuhan = $_POST['kebutuhan'];
    if ($id == 356758684) {
        $proses =  mysqli_query($conn, "UPDATE tb_alat SET sumber_dana = '$sumber_dana', tahun_ajuan = '$tahun_ajuan', item = '$nama_item', merk = '$merk', spesifikasi = '$spesifikasi', harga = '$harga', qty = '$qty', subtotal = '$subtotal', kebutuhan_untuk = '$kebutuhan' WHERE id_alat = '$id1'");
    }
    elseif ($id == 287839666) {
        $proses =  mysqli_query($conn, "UPDATE tb_alat SET sumber_dana = '$sumber_dana', tahun_ajuan = '$tahun_ajuan', item = '$nama_item', merk = '$merk', spesifikasi = '$spesifikasi', harga = '$harga', qty = '$qty', subtotal = '$subtotal', kebutuhan_untuk = '$kebutuhan' WHERE id_alat = '$id1'");
    }
    elseif ($id == 499308321) {
        $proses =  mysqli_query($conn, "UPDATE tb_alat SET sumber_dana = '$sumber_dana', tahun_ajuan = '$tahun_ajuan', item = '$nama_item', merk = '$merk', spesifikasi = '$spesifikasi', harga = '$harga', qty = '$qty', subtotal = '$subtotal', kebutuhan_untuk = '$kebutuhan' WHERE id_alat = '$id1'");
    }
    elseif ($id == 257802071) {
        $proses =  mysqli_query($conn, "UPDATE tb_alat SET sumber_dana = '$sumber_dana', tahun_ajuan = '$tahun_ajuan', item = '$nama_item', merk = '$merk', spesifikasi = '$spesifikasi', harga = '$harga', qty = '$qty', subtotal = '$subtotal', kebutuhan_untuk = '$kebutuhan' WHERE id_alat = '$id1'");
    }
    elseif ($id == 6083232) {
        $proses =  mysqli_query($conn, "UPDATE tb_alat SET sumber_dana = '$sumber_dana', tahun_ajuan = '$tahun_ajuan', item = '$nama_item', merk = '$merk', spesifikasi = '$spesifikasi', harga = '$harga', qty = '$qty', subtotal = '$subtotal', kebutuhan_untuk = '$kebutuhan' WHERE id_alat = '$id1'");
    }
    elseif ($id == 899055276) {
        $proses =  mysqli_query($conn, "UPDATE tb_alat SET sumber_dana = '$sumber_dana', tahun_ajuan = '$tahun_ajuan', item = '$nama_item', merk = '$merk', spesifikasi = '$spesifikasi', harga = '$harga', qty = '$qty', subtotal = '$subtotal', kebutuhan_untuk = '$kebutuhan' WHERE id_alat = '$id1'");
    }
    /*echo"
    $sumber_dana
    $tahun_ajuan
    $nama_item
    $merk
    $spesifikasi
    $harga
    $qty
    $kebutuhan
    $id1";
    */
    if ($proses) {
        echo "
        <script>
            alert('Data Berhasil Masuk!');
            window.location.href='lihatpengajuan.php?id=$id';
        </script>
        ";
    } else {
        echo "
    <script>
        alert('Data Gagal Masuk');  
        window.location.href='lihatpengajuan.php?id=$id';
    </script>
    ";
    }
}

?>
