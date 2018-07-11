    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tablero</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Administracion</a></li>
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fa fa-gear"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Viajes</span>
                  <span class="info-box-number">
                    10
                    <small>%</small>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-primary elevation-1"><i class="fa fa-facebook"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Likes</span>
                  <span class="info-box-number">41,410</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
  
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>
  
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fa fa-shopping-cart"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Ventas</span>
                  <span class="info-box-number">760</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-users"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Nuevos Paquetes</span>
                  <span class="info-box-number">2,000</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->      
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Reporte Mensual</h5>
  
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse">
                      <i class="fa fa-minus"></i>
                    </button>
                    <div class="btn-group">
                      <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-wrench"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" role="menu">
                        <a href="#" class="dropdown-item">Accion</a>
                        <a href="#" class="dropdown-item">Otra accion</a>
                        <a href="#" class="dropdown-item">Nueva accion</a>
                        <a class="dropdown-divider"></a>
                        <a href="#" class="dropdown-item">Linea de separacion</a>
                      </div>
                    </div>
                    <button type="button" class="btn btn-tool" data-widget="remove">
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-8">
                      <p class="text-center">
                        <strong>Ventas: 1 Ene, 2018 - 30 Abr, 2018</strong>
                      </p>
  
                      <div class="chart">
                        <!-- Sales Chart Canvas -->
                        <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                      </div>
                      <!-- /.chart-responsive -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4">
                      <p class="text-center">
                        <strong>Metas Completadas</strong>
                      </p>
  
                      <div class="progress-group">
                        Agregar productos a la grafica
                        <span class="float-right"><b>160</b>/200</span>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-primary" style="width: 80%"></div>
                        </div>
                      </div>
                      <!-- /.progress-group -->
  
                      <div class="progress-group">
                        Ventas Completas
                        <span class="float-right"><b>310</b>/400</span>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-danger" style="width: 75%"></div>
                        </div>
                      </div>
  
                      <!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Visita Pagina Premium</span>
                        <span class="float-right"><b>480</b>/800</span>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-success" style="width: 60%"></div>
                        </div>
                      </div>
  
                      <!-- /.progress-group -->
                      <div class="progress-group">
                        Enviar pedidos
                        <span class="float-right"><b>250</b>/500</span>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-warning" style="width: 50%"></div>
                        </div>
                      </div>
                      <!-- /.progress-group -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- ./card-body -->
                <div class="card-footer">
                  <div class="row">
                    <div class="col-sm-3 col-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-success"><i class="fa fa-caret-up"></i> 17%</span>
                        <h5 class="description-header">$35,210.43</h5>
                        <span class="description-text">TOTAL RENOVACION</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 col-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-warning"><i class="fa fa-caret-left"></i> 0%</span>
                        <h5 class="description-header">$10,390.90</h5>
                        <span class="description-text">TOTAL COSTO</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 col-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-success"><i class="fa fa-caret-up"></i> 20%</span>
                        <h5 class="description-header">$24,813.53</h5>
                        <span class="description-text">TOTAL GANANCIA</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 col-6">
                      <div class="description-block">
                        <span class="description-percentage text-danger"><i class="fa fa-caret-down"></i> 18%</span>
                        <h5 class="description-header">1200</h5>
                        <span class="description-text">METAS COMPLETADAS</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
