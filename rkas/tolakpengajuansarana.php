<?php
	include "koneksi.php";

	$id = $_GET['idc'];
	$sql = "UPDATE tb_sarana SET status='Ditolak' WHERE id_sarana=$id";
	$hapus = mysqli_query($conn, $sql);

	if ($hapus) {
        echo "
        <script>
            alert('Data Berhasil Ditolak');
            window.location.href='validatorsarana.php?id=702205615';
        </script>
        ";
    } else {
        echo "
    <script>
        alert('Data Gagal Ditolak');  
        window.location.href='validatorsarana.php?id=702205615';
    </script>
    ";
	}
?>