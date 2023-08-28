  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>" class="brand-link">
      <img src="<?php echo base_url() ?>public/dist/img/AdminLTELogo.png" alt="SIBAS WARGA Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIBAS WARGA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo base_url() ?>user/profile" class="d-block">Raja MKA</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url() ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url() ?>kartu_keluarga" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kartu Keluarga</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>penduduk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Penduduk</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Penentuan Bansos
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url() ?>periode_bansos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Periode Bansos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>periode_bansos/hasil" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hasil Bansos</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Penerima
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <hr>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>logout"  class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
