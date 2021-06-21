<?php
include('koneksi.php');
$id = $_GET['id'];
$sql = "DELETE FROM admin WHERE id=" . $id;
$res = mysqli_query($koneksi, $sql);
Header('Location:admin.php');