<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('assets/template/backend/dist') ?>/img/ice.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">ICE-DASHBOARD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/template/backend/dist') ?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">IT-ICE</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Main Menu</li>
          <li class="nav-item">
            <?php if ($segment === 'home'): ?>
              <a href="<?php echo base_url('home') ?>" class="nav-link active">
            <?php else: ?>
              <a href="<?php echo base_url('home') ?>" class="nav-link">
            <?php endif; ?>
              <i class="nav-icon fa fa-home" aria-hidden="true"></i>
              <p>Home</p>
            </a>
          </li>
          <?php if ($segment === 'home'): ?>
            <li class="nav-item">
          <?php else: ?>
            <li class="nav-item menu-open">
          <?php endif; ?>
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <?php if ($segment === 'total_pt'): ?>
                  <a href="<?php echo base_url('dashboard/total_pt') ?>" class="nav-link active">
                <?php else: ?>
                  <a href="<?php echo base_url('dashboard/total_pt') ?>" class="nav-link">
                <?php endif; ?>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Total Perguruan Tinggi</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <?php if ($segment === 'product'): ?>
                  <a href="<?php echo base_url('product') ?>" class="nav-link active">
                <?php else: ?>
                  <a href="<?php echo base_url('product') ?>" class="nav-link">
                <?php endif; ?>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Informasi</p>
                </a>
              </li> -->
              <li class="nav-item">
                <?php if ($segment === 'rekap_enroll_pt'): ?>
                  <a href="<?php echo base_url('dashboard/rekap_enroll_pt') ?>" class="nav-link active">
                <?php else: ?>
                  <a href="<?php echo base_url('dashboard/rekap_enroll_pt') ?>" class="nav-link">
                <?php endif; ?>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rekap Enroll PT</p>
                </a>
              </li>
              <li class="nav-item">
                <?php if ($segment === 'total_mk_konsorsium'): ?>
                  <a href="<?php echo base_url('dashboard/total_mk_konsorsium') ?>" class="nav-link active">
                <?php else: ?>
                  <a href="<?php echo base_url('dashboard/total_mk_konsorsium') ?>" class="nav-link">
                <?php endif; ?>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Total MK Konsorsium</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Informasi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bulanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mingguan</p>
                </a>
              </li>
            </ul>
          </li> -->
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Dashboard 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p></p>
                </a>
              </li>
            </ul>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>