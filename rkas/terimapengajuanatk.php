<?php
	include "koneksi.php";

	$id = $_GET['idc'];
	$sql = "UPDATE tb_atk SET status='Diterima' WHERE id_atk=$id";
	$hapus = mysqli_query($conn, $sql);

	if ($hapus) {
        echo "
        <script>
            alert('Data Berhasil Diterima');
            window.location.href='validatoratk.php?id=702205615';
        </script>
        ";
    } else {
        echo "
    <script>
        alert('Data Gagal Diterima');  
        window.location.href='validatoratk.php?id=702205615';
    </script>
    ";
	}
?>