<?php
$host="localhost";
$user="root";
$pass="";
$database="db_rkas";
$conn = new mysqli($host, $user, $pass, $database);
if ($conn->connect_error) {
    echo "Gagal koneksi ke database";
} 
else {
    //koneksi berhasil
    //echo "berhasil";
}
?>