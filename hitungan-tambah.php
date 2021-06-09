<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Gaji | Data Hitungan</title>

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
                            <h1 class="m-0">Data Hitungan</h1>
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


                    <!-- /.row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title"><b>Tambah Data Hitungan</b></h3>
                                    <br><br>



                                </div>


                                <!-- form start -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Karyawan</label>

                                            <select class="form-control" name="nama_karyawan">
                                                <option>Pilih Nama Karyawan</option>
                                                <option>Imam Sholehudin</option>
                                                <option>Yoga Adijaya</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Periode</label>
                                            <select class="form-control" name="periode">
                                                <option>Pilih Periode</option>
                                                <option>2021 | Januari</option>
                                                <option>2021 | Februari</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Gaji Pokok</label>
                                            <input type="number" class="form-control" name="gaji_pokok"
                                                id="exampleInputPassword1" placeholder="Enter Sallary">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Gaji Lembur</label>
                                            <input type="number" class="form-control" name="gaji_lembur"
                                                id="exampleInputPassword1" placeholder="Enter income">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Jumlah Lembur</label>
                                            <input type="number" class="form-control" name="jml_lembur"
                                                id="exampleInputPassword1" placeholder="Qyt">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Sakit</label>
                                            <input type="number" class="form-control" name="sakit"
                                                id="exampleInputPassword1" placeholder="Qyt">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Izin</label>
                                            <input type="number" class="form-control" name="izin"
                                                id="exampleInputPassword1" placeholder="Qyt">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Telat</label>
                                            <input type="number" class="form-control" name="telat"
                                                id="exampleInputPassword1" placeholder="Qyt">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Alpa</label>
                                            <input type="number" class="form-control" name="alpa"
                                                id="exampleInputPassword1" placeholder="Qyt">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Potongan Lainnya</label>
                                            <input type="number" class="form-control" name="potongan"
                                                id="exampleInputPassword1" placeholder="reduction">
                                        </div>

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <input type="submit" class="btn btn-primary" name="Simpan" value="Simpan">
                                        <input type="reset" class="btn btn-warning" name="Simpan" value="Reset">
                                        <a href="karyawan.php" type="submit" class="btn btn-danger">Kembali </a>
                                    </div>
                                </form>


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