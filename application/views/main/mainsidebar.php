  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('') ?>" class="brand-link">
      <img src="<?= base_url('dist/img/AdminLTELogo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Administracion</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('dist/img/user2-160x160.jpg')?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Santiago Loca Martinez</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>Administracion<i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('menus')?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Menus</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('usuario_admin')?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Usuarios Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('usuario_web')?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Usuarios Web</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-male"></i>
              <p>
                Clientes
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('clientes')?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Clientes</p>
                </a>
              </li>
            </ul>
          </li> 
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-truck"></i>
              <p>
                Guias
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('lugares')?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Lugares</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('rutas')?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Rutas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('guias')?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Guias</p>
                </a>
              </li>
            </ul>
          </li>          
          <!--
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>