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

      <?php 
      $this->CI =& get_instance();
      $this->CI->load->library('menu');
      $vista_name = explode('/',$vista);
      $controla = "";      
      for($i = 0; $i < sizeof($vista_name)-1;$i++)
      {
        if ($controla == "")
          $controla .= $vista_name[$i];
        else
          $controla .= "/".$vista_name[$i];
      }
      $menus = $this->CI->menu->construir_menu($controla);
      echo ($menus);  

      ?>

    </div>
    <!-- /.sidebar -->
  </aside>