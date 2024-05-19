<?php 
include "koneksi.php";
session_start();

if (isset($_POST['simpan'])) {
$user = $_POST['user'];
$pass = $_POST['password'];
$sql = mysqli_query($conn, "SELECT * FROM tb_user WHERE nama_user='$user' AND password='$pass'");

foreach ($sql as $row) :
    if ($user == $row['nama_user'] && $pass == $row['password']) {
        $id = $row['id_bagian'];
        $_SESSION['id']=$row['id_user'];
        if ($id == 1) {
            echo "
            <script>
                alert('Login Berhasil');
                window.location.href='homejurusan.php';
            </script>
        ";
        } elseif ($id == 2) {
            echo "
            <script>
                alert('Login Berhasil');
                window.location.href='homewakepsek.php?id=$row[id_user]';
            </script>
        ";
        }elseif ($id == 3) {
            echo "
            <script>
                alert('Login Berhasil');
                window.location.href='hometu.php?id=$row[id_user]';
            </script>
        ";
        }elseif ($id == 10) {
        echo "
        <script>
            alert('Login Berhasil');
            window.location.href='admin.php?id=$row[id_user]';
        </script>
        ";
        }elseif ($id == 11) {
            echo "
            <script>
                alert('Login Berhasil');
                window.location.href='homevalidator.php?id=$row[id_user]';
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