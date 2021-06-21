<?php
include('koneksi.php');
$id = $_GET['id'];
$sql = "DELETE FROM karyawan WHERE id=" . $id;
$res = mysqli_query($koneksi, $sql);
Header('Location:karyawan.php');