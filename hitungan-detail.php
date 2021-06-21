<!DOCTYPE html>
<html lang="en">
<?php
include('koneksi.php');
$id = $_GET['id'];
$sql = "SELECT * FROM hitung LEFT JOIN karyawan ON hitung.id_karyawan = karyawan.id JOIN periode ON hitung.id_periode = periode.id WHERE hitung.id=" . $id;
$query = mysqli_query($koneksi, $sql);

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Gaji | Data Karyawan</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- aside -->
        <?php include('sidebar.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Karyawan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>7</h3>

                                    <p>Karyawan</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- /.row -->
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"><b>Detail Data Karyawan</b></h3>
                                    <br><br>
                                    <a href="hitungan.php" class="btn btn-primary">Kembali</a>


                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <?php
                                    while ($data = mysqli_fetch_array($query)) {
                                        //var_dump($data);

                                    ?>
                                    <table class="table table-hover text-nowrap">

                                        <tr>
                                            <td>Nama Karyawan</td>
                                            <td><?php echo $data['nama_karyawan']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>No Telp</td>
                                            <td><?php echo $data['no_telp']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><?php echo $data['email']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td><?php echo $data['alamat']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td><?php echo $data['jabatan']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Pendidikan Terakhir</td>
                                            <td><?php echo $data['pendidikan_terakhir']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Bulan, Tahun</td>
                                            <td><?php echo $data['bulan'] . ', ' . $data['tahun']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Gaji Pokok</td>
                                            <td><?php echo $data['gaji_pokok']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Gaji Lembur</td>
                                            <td><?php echo $data['gaji_lembur']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Lembur (Jam)</td>
                                            <td><?php echo $data['jumlah_lembur']; ?>Jam</td>
                                        </tr>
                                        <tr>
                                            <td>Sakit</td>
                                            <td><?php echo $data['sakit']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Izin</td>
                                            <td><?php echo $data['izin']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Telat</td>
                                            <td><?php echo $data['telat']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Alpa</td>
                                            <td><?php echo $data['alpa']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Gaji Kotor</td>
                                            <td><?php $gaji_kotor = $data['gaji_pokok'] + ($data['gaji_lembur'] * $data['jumlah_lembur']);
                                                    echo $gaji_kotor;
                                                    ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Potongan Kehadiran</td>
                                            <td><?php echo $potongan =  (((($data['alpa'] + $data['izin'] + $data['sakit']) / $data['waktu_kerja']) * $data['gaji_pokok']) + (($data['telat'] / 100) * $data['gaji_pokok']));
                                                    ?></td>
                                        </tr>
                                        <tr>
                                            <td>Potongan lainnya</td>
                                            <td><?php echo $data['potongan_lainnya']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Gaji Bersih</td>
                                            <td><?php echo $gaber = $gaji_kotor - ($potongan + $data['potongan_lainnya']); ?>
                                            </td>
                                        </tr>
                                    </table><br>
                                    <?php } ?>
                                    <center>
                                        <a href="#" class="btn btn-success">Print</a>
                                    </center>
                                    <br>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>


                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>