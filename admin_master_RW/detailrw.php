<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monev Skripsi | Detail RW</title>

    <?php
    session_start();
    $konstruktor = 'admin_master_RW';
    require_once '../database/config.php';

    // Memeriksa apakah user memiliki hak akses yang benar
    if ($_SESSION['status'] != 0) {
        $usr = $_SESSION['username'];
        $waktu = date('Y-m-d H:i:s');
        $auth = $_SESSION['status'];
        $nama = $_SESSION['nama_user'];
        $tersangka = "Tidak Diketahui";

        if ($auth == 2) {
            $tersangka = "Penduduk";
        } elseif ($auth == 3) {
            $tersangka = "RT";
        }

        $ket = "Pengguna dengan username " . $usr . " , nama : " . $nama . " melakukan cross authority dengan akses sebagai " . $tersangka;
        $querycrossauth = mysqli_query($koneksi, "INSERT INTO tbl_cross_auth VALUES ('', '$usr', '$waktu', '$ket')") or die(mysqli_error($koneksi));

        echo '<script>window.location="../login/logout.php"</script>';
    } else {
        include '../listlink.php';
    ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../img/desa.png" alt="AdminLTELogo" width="300px">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <?php include '../navbar.php'; ?>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="index3.html" class="brand-link">
                <img src="../img/desa.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">SIGAP</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <?php include '../admin_sidebar.php'; ?>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Detail Data RW</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Detail RW</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title"><i class="nav icon fas fa-address-card"> &nbsp Detail Data RW</i></h3>
                                </div>

                                <div class="card-body">
                                    <a href="../admin_master_RW" class="btn btn-warning btn-sm"><i class="nav-icon fas fa-chevron-left">&nbspKembali</i></a>
                                    <br>
                                    <br>
                                    <?php
                                    $kd_rw = @$_GET['id'];
                                    $kodeDecript = decriptData($kd_rw);
                                    $queryrw = mysqli_query($koneksi, "SELECT * FROM tbl_rw WHERE id='$kodeDecript'") or die(mysqli_error($koneksi));
                                    if (mysqli_num_rows($queryrw) > 0) {
                                        while ($dt_rw = mysqli_fetch_array($queryrw)) {
                                    ?>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <table class="table table-sm table-borderless table-striped">
                                                        <tr>
                                                            <td width="25%">
                                                                ID RW
                                                            </td>
                                                            <td width="2%">
                                                                :
                                                            </td>
                                                            <td>
                                                                <b><?= $dt_rw['id'] ?></b>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="25%">
                                                                NIK
                                                            </td>
                                                            <td width="2%">
                                                                :
                                                            </td>
                                                            <td>
                                                                <b><?= $dt_rw['nik'] ?></b>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="25%">
                                                                Nomor RW
                                                            </td>
                                                            <td width="2%">
                                                                :
                                                            </td>
                                                            <td>
                                                                <b><?= $dt_rw['rw'] ?></b>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="25%">
                                                                Nama Ketua RW
                                                            </td>
                                                            <td width="2%">
                                                                :
                                                            </td>
                                                            <td>
                                                                <b><?= $dt_rw['ketua'] ?></b>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="25%">
                                                                Kontak
                                                            </td>
                                                            <td width="2%">
                                                                :
                                                            </td>
                                                            <td>
                                                                <b><?= $dt_rw['kontak'] ?></b>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="25%">
                                                                Alamat
                                                            </td>
                                                            <td width="2%">
                                                                :
                                                            </td>
                                                            <td>
                                                                <b><?= $dt_rw['alamat'] ?></b>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            <?php
                                        }
                                    } else {
                                            ?>
                                            <div class="alert alert-danger">
                                                Tidak ditemukan data RW pada database.
                                            </div>
                                        <?php
                                    }
                                        ?>
                                            </div> <!-- /.row -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php include '../footer.php'; ?>

        <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>

<?php include '../script.php';
    } ?>

</body>

</html>