<?php
include('koneksi.php');

$id = $_POST['id'];
$gaji_pokok = $_POST['gaji_pokok'];
$gaji_lembur = $_POST['gaji_lembur'];
$jml_lembur = $_POST['jml_lembur'];
$sakit = $_POST['sakit'];
$izin = $_POST['izin'];
$telat = $_POST['telat'];
$alpa = $_POST['alpa'];
$potongan = $_POST['potongan'];
var_dump($_POST);

$sql = "UPDATE hitung SET gaji_pokok = '" . $gaji_pokok . "', gaji_lembur = '" . $gaji_lembur . "', jumlah_lembur= '" . $jml_lembur . "', sakit='" . $sakit . "', izin = '" . $izin . "', telat = '" . $telat . "', alpa='" . $alpa . "', potongan_lainnya='" . $potongan . "' WHERE id=" . $id;
$result = mysqli_query($koneksi, $sql);
Header('Location:hitungan.php?status=berhasil');