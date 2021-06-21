<?php
include('koneksi.php');
$id = $_GET['id'];
$sql = "DELETE FROM hitung WHERE id=" . $id;
$res = mysqli_query($koneksi, $sql);
Header('Location:hitungan.php');