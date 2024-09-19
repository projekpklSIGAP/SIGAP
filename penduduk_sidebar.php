<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

  <li class="nav-item">
    <a href="../penduduk_dashboard" class="nav-link <?php if ($konstruktor == 'penduduk_dashboard') {
                                                      echo 'active';
                                                    } ?>">
      <i class="fas fa-home nav-icon"></i>
      <p>Dashboard</p>
    </a>
  </li>

  <li class="nav-item">
    <a href="../surat_dashboard" class="nav-link <?php if ($konstruktor == 'surat_dashboard') {
                                                    echo 'active';
                                                  } ?>">
      <i class="fas fa-envelope nav-icon"></i>
      <p>Pengajuan Surat</p>
    </a>
  </li>

  <li class="nav-item">
    <a href="../penduduk_gantipw" class="nav-link <?php if ($konstruktor == 'penduduk_gantipw') {
                                                    echo 'active';
                                                  } ?>">
      <i class="fas fa-lock nav-icon"></i>
      <p>Ganti Password</p>
    </a>
  </li>
  <li class="nav-item">
    <a href="../login/logout.php" class="nav-link">
      <i class="fas fa-sign-out-alt nav-icon"></i>
      <p>Keluar</p>
    </a>
  </li>
</ul>
</li>