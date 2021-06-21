<?php
include('koneksi.php');
//var_dump($_POST);
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$jam = $_POST['jam'];
$sql = "INSERT INTO periode (bulan, tahun, waktu_kerja) VALUES ('" . $bulan . "','" . $tahun . "','" . $jam . "')";
var_dump($sql);
//die;
$result = mysqli_query($koneksi, $sql);
var_dump($result);

Header('Location:periode.php');