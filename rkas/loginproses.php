<?php 
include "koneksi.php";
$sql = mysqli_query($conn, "SELECT * FROM tb_user");

if (isset($_POST['simpan'])) {
$user = $_POST['user'];
$pass = $_POST['password'];

foreach ($sql as $row) :
    if ($user == $row['nama_user'] && $pass == $row['password']) {
        echo "
        <script>
            alert('Login Berhasil');
            window.location.href='index.php';
        </script>
        ";
    }elseif ($user != $row['nama_user'] && $pass == $row['password']) {
        echo "
        <script>
            alert('Username Salah');
            window.location.href='login.php';
        </script>
        ";
    }elseif ($user == $row['nama_user'] && $pass != $row['password']) {
        echo "
        <script>
            alert('Password Salah');
            window.location.href='login.php';
        </script>
        ";
    }else {
        echo "
        <script>
            alert('Login Gagal');
            window.location.href='login.php';
        </script>
        ";
    }
endforeach;
}
?>