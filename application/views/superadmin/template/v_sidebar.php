<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('superadmin/Dashboard')?>" class="brand-link">
      <img src="<?= base_url('assets/logo/logo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PT TK Industrial ID</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/dist/img/user2-160x160.jpg')?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Super admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= base_url('superadmin/Dashboard')?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('superadmin/upload')?>" class="nav-link">
              <i class="nav-icon fas fa-upload"></i>
              <p>
                Upload Files
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('superadmin/input')?>" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Input Kekosongan Admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('superadmin/promosi')?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Kandidat Promosi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('superadmin/penilaian')?>" class="nav-link">
              <i class="nav-icon fas fa-pencil-alt"></i>
              <p>
                Penilaian
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-arrow-right"></i>
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