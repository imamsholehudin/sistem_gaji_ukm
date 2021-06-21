<?php
include('koneksi.php');
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "INSERT INTO admin (nama, email, password) VALUES ('" . $nama . "','" . $email . "','" . $password . "')";
//var_dump($sql);
//die;
$result = mysqli_query($koneksi, $sql);
//var_dump($result);
//die;
Header('Location:admin.php');