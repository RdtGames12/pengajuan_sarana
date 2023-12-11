<?php
if (isset($_POST['cetak'])) {
include('koneksi.php');
require 'lihatpengajuan.php';
 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
 
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'item');
$sheet->setCellValue('C1', 'merk');
$sheet->setCellValue('D1', 'spesifikasi');
$sheet->setCellValue('E1', 'harga');
$sheet->setCellValue('F1', 'qty');
$sheet->setCellValue('G1', 'harga');
$sheet->setCellValue('H1', 'status');
 
$bahan = mysqli_query($conn, "SELECT * FROM tb_bahan WHERE jurusan = '$jurusan'");
$i = 2;
$no = 1;
while($d = mysqli_fetch_array($bahan))
{
    $sheet->setCellValue('A2'.$i, $no++);
    $sheet->setCellValue('B2'.$i, $d['item']);
    $sheet->setCellValue('C2'.$i, $d['merk']);
    $sheet->setCellValue('D2'.$i, $d['spesifikasi']);
    $sheet->setCellValue('E2'.$i, $d['harga']);    
    $sheet->setCellValue('F2'.$i, $d['qty']);
    $sheet->setCellValue('G2'.$i, $d['harga'] * $d['qty']);
    $sheet->setCellValue('H2'.$i, $d['status']);
    $i++;
}
 
$writer = new Xlsx($spreadsheet);
$writer->save('hasil/CetakPengajuan.Xlsx');
echo "<script>window.location = 'hasil/CetakPengajuan.Xlsx'</script>";
}
?>