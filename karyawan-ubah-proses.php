<?php
include('koneksi.php');
var_dump($_POST);
$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];
$pendidikan = $_POST['pendidikan'];

$sql = "UPDATE karyawan SET nik='" . $nik . "', nama_karyawan='" . $nama . "', No_telp= '" . $telp . "', email='" . $email . "', alamat='" . $alamat . "', jabatan='" . $jabatan . "', pendidikan_terakhir='" . $pendidikan . "' WHERE id=" . $id;
$result = mysqli_query($koneksi, $sql);


Header('Location:karyawan.php?status=berhasil');