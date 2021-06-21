<?php
include('koneksi.php');
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$no_telp = $_POST['telp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];
$pendidikan = $_POST['pendidikan'];
$sql = "INSERT INTO karyawan (nik, nama_karyawan, email, no_telp, alamat, jabatan, pendidikan_terakhir) VALUES ('" . $nik . "','" . $nama . "','" . $email . "','" . $no_telp . "','" . $alamat . "','" . $jabatan . "','" . $pendidikan . "')";
var_dump($sql);
//die;
$result = mysqli_query($koneksi, $sql);
var_dump($result);
//die;
Header('Location:karyawan.php');