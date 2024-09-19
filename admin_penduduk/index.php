<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sigap | Dashboard Admin</title>

  <?php
  session_start();
  $konstruktor = 'admin_penduduk';
  require_once '../database/config.php';
  if ($_SESSION['status'] != 0) {
    $usr = $_SESSION['username'];
    $waktu = date('Y-m-d H:i:s');
    $auth = $_SESSION['status'];
    $nama = $_SESSION['nama_user'];
    if ($auth == 1) {
      $tersangka = "Rw";
    }
    if ($auth == 2) {
      $tersangka = "Penduduk";
    }

    $ket = "Pengguna dengan username " . $usr . " , nama : " . $nama . " melakukan cross authority dengan akses sebagai " . $tersangka;
    $querycrossauth = mysqli_query($koneksi, "INSERT INTO tbl_cross_auth VALUES ('','$usr','$waktu','$ket')") or die(mysqli_error($koneksi));

    echo '<script>window.location="../login/logout.php"</script>';
  } else {
    include '../listlink.php';
  ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="anikation__shake" src="../img/desa.png" alt="AdminLTELogo" height="200" width="200">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <?php
      include '../navbar.php';
      ?>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="../img/desa.png" alt="Monev-Skripsi" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIGAP</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <?php
          include '../admin_sidebar.php';
          ?>

        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Master Data Penduduk</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Master Data Penduduk</li>
              </ol>
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
            <div class="col-lg-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title"><i class="nav-icon fas fa-list"></i> Data penduduk</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <div class="card-body">
                  <a href="tambahpenduduk.php" class="btn btn-primary btn-sm"><i class="nav-icon fas fa-download"></i> Tambah Data</a>


                  <button type="button" data-toggle="modal" data-target="#modal-import" class="btn btn-sm btn-success"><i class="nav-icon fas fa-file-excel"></i> Import Data</button>

                  <br>
                  <br>
                  <table id="example1" class="table table-bordered table-striped table-sm">
                    <thead>
                      <tr>
                        <th width="5%">No</th>
                        <th>
                          <center>Nama</center>
                        </th>
                        <th>
                          <center>Jenis Kelamin</center>
                        </th>
                        <th>
                          <center>Alamat</center>
                        </th>
                        <th>
                          <center>No HP</center>
                        </th>
                        <th>
                          <center>Aksi</center>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      //panggil data pada tbl_angkatan
                      $querypenduduk = mysqli_query($koneksi, "SELECT * FROM tbl_penduduk") or die(mysqli_error($koneksi));

                      //jika tabel ada isinya maka ditampilkan datanya
                      if (mysqli_num_rows($querypenduduk) > 0) {
                        while ($dt_penduduk = mysqli_fetch_array($querypenduduk)) {
                      ?>
                          <tr>
                            <td><?= $no++ ?></td>
                            <td>
                              <b><?= $dt_penduduk['nik'] ?></b>
                              <br>
                              <?= $dt_penduduk['nama'] ?>
                            </td>
                            <td><?= $dt_penduduk['jenis_kelamin'] ?></td>
                            <td><?= $dt_penduduk['alamat'] ?></td>
                            <td><?= $dt_penduduk['no_hp'] ?></td>
                            <td>
                              <center>
                                <button type="button" class="btn btn-sm btn-warning btn-edit" data-toggle="modal" data-target="#modal-edit"
                                  data-nik="<?= $dt_penduduk['nik']; ?>"
                                  data-nama="<?= $dt_penduduk['nama']; ?>"
                                  data-jenis_kelamin="<?= $dt_penduduk['jenis_kelamin']; ?>"
                                  data-alamat="<?= $dt_penduduk['alamat']; ?>"
                                  data-no_hp="<?= $dt_penduduk['no_hp']; ?>">

                                  <i class="nav-icon fas fa-edit"></i>
                                </button>

                                <a href="proseshapus.php?kd_penduduk=<?= encriptData($dt_penduduk['nik']) ?>&hapus=hapus" class="btn btn-sm btn-danger" onclick="return confirm('Anda akan menghapus data penduduk dengan kode penduduk [<?= $dt_penduduk['nik']; ?>] - Nama penduduk : [<?= $dt_penduduk['nama']; ?>]')"><i class="fas fa-trash"> </i></a>
                                <a href="eksporpdf.php" class="btn btn-danger btn-sm" target="_blank"><i class="nav-icon fas fa-file-pdf"></i>
                                </a>
                              </center>
                            </td>
                          </tr>
                        <?php
                        }
                      }
                      // jika table tidak ada isinya maka
                      else {
                        ?>
                        <tr>
                          <td colspan="6">Tidak ditemukan data angkatan pada database</td>
                        </tr>
                      <?php
                      }

                      ?>
                    </tbody>

                  </table>

                </div>
                <!-- /.card-body -->

              </div>
            </div>
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
    include '../footer.php';
    ?>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
<?php
    include '../script.php';
  }
?>

<div class="modal fade" id="modal-edit">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header" style="background-color: blue;">
        <h4 class="modal-title">
          <font color="#ffffff"><i class="fas fa-file"></i> Edit Data Penduduk</font>
        </h4>
      </div>
      <form id="#modal-edit" action="editpenduduk.php" method="POST">
        <div class="modal-body">
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
                <div class="form-group row">
                  <label for="data-nik" class="col-sm-12 control-label">nik</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="nik" id="nik" disabled>
                    <input type="text" class="form-control" name="nik" id="nik" hidden>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="data-nama" class="col-sm-12 control-label">Nama Penduduk</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="nama" id="nama">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="data-jeniskelamin" class="col-sm-12 control-label">jeniskelamin</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="data-alamat" class="col-sm-12 control-label">Alamat</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="alamat" id="alamat">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="data-nohp" class="col-sm-12 control-label">NO HP</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="no_hp" id="no_hp">
                  </div>
                </div>

              </div>
              </tr>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="submit" name="editpenduduk" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </div>
        </div>
    </div>
    </form>
  </div>
</div>
</div>

<script type="text/javascript">
  $('#modal-edit').on('show.bs.modal', function(e) {

    var nik = $(e.relatedTarget).data('nik');
    var nama = $(e.relatedTarget).data('nama');
    var jeniskelamin = $(e.relatedTarget).data('jenis_kelamin');
    var alamat = $(e.relatedTarget).data('alamat');
    var nohp = $(e.relatedTarget).data('no_hp');



    $(e.currentTarget).find('input[name="nik"]').val(nik);
    $(e.currentTarget).find('input[name="nama"]').val(nama);
    $(e.currentTarget).find('input[name="jenis_kelamin"]').val(jeniskelamin);
    $(e.currentTarget).find('input[name="alamat"]').val(alamat);
    $(e.currentTarget).find('input[name="no_hp"]').val(nohp);


  });
</script>
</body>

</html>