<?php
include('koneksi.php');
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "UPDATE admin SET nama = '" . $nama . "', email = '" . $email . "', password = '" . $password . "' WHERE id=" . $id;
$result = mysqli_query($koneksi, $sql);

Header('Location:admin.php?status=berhasil');