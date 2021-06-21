<?php
include('koneksi.php');
$id = $_GET['id'];
$sql = "DELETE FROM periode WHERE id=" . $id;
$res = mysqli_query($koneksi, $sql);
Header('Location:periode.php');