<?php
include('koneksi.php');
var_dump($_POST);
$id_karyawan = $_POST['nama_karyawan'];
$id_periode = $_POST['periode'];
$gaji_pokok = $_POST['gaji_pokok'];
$gaji_lembur = $_POST['gaji_lembur'];
$jml_lembur = $_POST['jml_lembur'];
$sakit = $_POST['sakit'];
$izin = $_POST['izin'];
$telat = $_POST['telat'];
$alpa = $_POST['alpa'];
$potongan = $_POST['potongan'];

$sql = "INSERT INTO hitung(id_karyawan, id_periode, gaji_pokok, gaji_lembur, jumlah_lembur, sakit, izin, telat, alpa, potongan_lainnya) VALUE ('" . $id_karyawan . "','" . $id_periode . "','" . $gaji_pokok . "','" . $gaji_lembur . "','" . $jml_lembur . "','" . $sakit . "','" . $izin . "','" . $telat . "', '" . $alpa . "', '" . $potongan . "')";
var_dump($sql);
$res = mysqli_query($koneksi, $sql);
var_dump($res);
Header('Location:hitungan.php');