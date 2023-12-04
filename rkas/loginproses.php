<?php 
include "koneksi.php";

if (isset($_POST['simpan'])) {
$user = $_POST['user'];
$pass = $_POST['password'];
$sql = mysqli_query($conn, "SELECT * FROM tb_user WHERE nama_user='$user'");

foreach ($sql as $row) :
    if ($user == $row['nama_user'] && $pass == $row['password']) {
        $id = $row['id_bagian'];
        if ($id == 1) {
            echo "
            <script>
                alert('Login Berhasil');
                window.location.href='indexjurusan.php?id=$row[id_user]';
            </script>
        ";
        } elseif ($id == 10) {
            echo "
            <script>
                alert('Login Berhasil');
                window.location.href='admin.php';
            </script>
        ";
        }
    }else {
        echo "
        <script>
            alert('Username atau Password Tidak Ditemukan');
            window.location.href='index.php';
        </script>
        ";
    }
endforeach;
}
?>