<?php
include "koneksi.php";
$sql = mysqli_query($conn, "SELECT * FROM tb_kegiatan");
$id = $_GET['id'];
$sql1 = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user='$id'");

if (isset($_POST['simpan'])) {
    $sumber_dana = $_POST['sumber_dana'];
    $tahun_ajuan = $_POST['tahun_ajuan'];
    $nama_kegiatan = $_POST['nama_kegiatan'];
    $bulan = $_POST['bulan'];
    $biaya = $_POST['biaya'];
    $total = $_POST['biaya'] * $_POST['vol1'] * $_POST['vol2'] * $_POST['vol3'] * $_POST['vol4'];
    foreach ($sql1 as $row) :
    if ($id == 356758684) {
        $proses =  mysqli_query($conn, "INSERT INTO tb_kegiatan (sumber_dana, tahun_ajuan, nama_kegiatan, bulan, biaya, total, jurusan, status ) VALUES ('$sumber_dana','$tahun_ajuan','$nama_kegiatan','$bulan', '$biaya', '$total', 'Mekatronika', 'Belum di Cek')");
    }
    elseif ($id == 287839666) {
        $proses =  mysqli_query($conn, "INSERT INTO tb_kegiatan (sumber_dana, tahun_ajuan, nama_kegiatan, bulan, biaya, total, jurusan, status ) VALUES ('$sumber_dana','$tahun_ajuan','$nama_kegiatan','$bulan', '$biaya', '$total', 'PPLG', 'Belum di Cek')");
    }
    elseif ($id == 499308321) {
        $proses =  mysqli_query($conn, "INSERT INTO tb_kegiatan (sumber_dana, tahun_ajuan, nama_kegiatan, bulan, biaya, total, jurusan, status ) VALUES ('$sumber_dana','$tahun_ajuan','$nama_kegiatan','$bulan', '$biaya', '$total', 'Kimia', 'Belum di Cek')");
    }
    elseif ($id == 257802071) {
        $proses =  mysqli_query($conn, "INSERT INTO tb_kegiatan (sumber_dana, tahun_ajuan, nama_kegiatan, bulan, biaya, total, jurusan, status ) VALUES ('$sumber_dana','$tahun_ajuan','$nama_kegiatan','$bulan', '$biaya', '$total', 'Animasi', 'Belum di Cek')");
    }
    elseif ($id == 6083232) {
        $proses =  mysqli_query($conn, "INSERT INTO tb_kegiatan (sumber_dana, tahun_ajuan, nama_kegiatan, bulan, biaya, total, jurusan, status ) VALUES ('$sumber_dana','$tahun_ajuan','$nama_kegiatan','$bulan', '$biaya', '$total', 'DKV', 'Belum di Cek')");
    }
    elseif ($id == 899055276) {
        $proses =  mysqli_query($conn, "INSERT INTO tb_kegiatan (sumber_dana, tahun_ajuan, nama_kegiatan, bulan, biaya, total, jurusan, status ) VALUES ('$sumber_dana','$tahun_ajuan','$nama_kegiatan','$bulan', '$biaya', '$total', 'Pemesinan', 'Belum di Cek')");
    } else {
        $proses =  mysqli_query($conn, "INSERT INTO tb_kegiatan (sumber_dana, tahun_ajuan, nama_kegiatan, bulan, biaya, total) VALUES ('$sumber_dana','$tahun_ajuan','$nama_kegiatan','$bulan', '$biaya', '$total')");
    }
    endforeach;

    if ($proses) {
        echo "
        <script>
            alert('Data Berhasil Masuk!');
            window.location.href='kegiatan_jurusan.php?id=$id';
        </script>
        ";
    } else {
        echo "
    <script>
        alert('Data Gagal Masuk');  
        window.location.href='kegiatan_jurusan.php?id=$id';
    </script>
    ";
    }
}

?>