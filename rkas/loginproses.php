<?php 
include "koneksi.php";
session_start();

if (isset($_POST['simpan'])) {
    $user = $_POST['user'];
    $pass = $_POST['password'];
    
    $stmt = $conn->prepare("SELECT * FROM tb_user WHERE nama_user = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        if (password_verify($pass, $row['password'])) {
            $id = $row['id_bagian'];
            $_SESSION['id'] = $row['id_user'];
            
            switch ($id) {
                case 1:
                    echo "
                    <script>
                        alert('Login Berhasil');
                        window.location.href='homejurusan.php';
                    </script>";
                    break;
                case 2:
                    echo "
                    <script>
                        alert('Login Berhasil');
                        window.location.href='homewakepsek.php?id={$row['id_user']}';
                    </script>";
                    break;
                case 3:
                    echo "
                    <script>
                        alert('Login Berhasil');
                        window.location.href='hometu.php?id={$row['id_user']}';
                    </script>";
                    break;
                case 10:
                    echo "
                    <script>
                        alert('Login Berhasil');
                        window.location.href='admin.php?id={$row['id_user']}';
                    </script>";
                    break;
                case 11:
                    echo "
                    <script>
                        alert('Login Berhasil');
                        window.location.href='homevalidator.php?id={$row['id_user']}';
                    </script>";
                    break;
                default:
                    echo "
                    <script>
                        alert('Invalid user role');
                        window.location.href='index.php';
                    </script>";
                    break;
            }
        } else {
            echo "
            <script>
                alert('Username atau Password Tidak Ditemukan');
                window.location.href='index.php';
            </script>";
        }
    } else {
        echo "
        <script>
            alert('Username atau Password Tidak Ditemukan');
            window.location.href='index.php';
        </script>";
    }
    
    $stmt->close();
}
?>
