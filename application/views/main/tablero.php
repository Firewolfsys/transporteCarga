<!-- Encabezado -->
<?php $this->load->view('main/Encabezado')?> 
<!-- /.Encabezado -->


<style>
  
.chart_ul_x {
   list-style: none;

}
.chart_ul_li_x {
  text-align:center;
  display: block;
  padding-left: 30px;
   position: relative;
   margin-bottom: 4px;
   border-radius: 5px;
   padding: 2px 8px 2px 28px;
   font-size: 14px;
   cursor: default;
   height:20px;
   width: 140px;
   -webkit-transition: background-color 200ms ease-in-out;
   -moz-transition: background-color 200ms ease-in-out;
   -o-transition: background-color 200ms ease-in-out;
   transition: background-color 200ms ease-in-out; */
}

.chart_li_span_x
 {
   display: block;
   position: absolute;
   left: 0;
   top: 0;
   width: 20px;
   border-radius: 5px;
   height:20px
 }

 .chart_li_spanbar_x span.bar-legend-text
 {
   left:25px;
   width:120px;
 }
 /* #chart-area > *{
   float:left
     } */

</style>

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
      <!-- Custom tabs (Charts with tabs)-->
      <div class="card card-primary">
        <div class="card-header d-flex p-0">
          <h3 class="card-title p-3">
            <i class="fa fa-pie-chart mr-1"></i>
            Seguimiento a Guias
          </h3>
        </div><!-- /.card-header -->

        <div class="card-body">
          <div class="tab-content p-0">
            <!-- Info boxes -->
            <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fa fa-dropbox"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Guias Creadas</span>
              <span class="info-box-number">
                <?php echo $datos->creadas; ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-primary elevation-1"><i class="fa fa-home"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Guias en Bodega</span>
              <span class="info-box-number"><?php echo $datos->bodega; ?></span>
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
            <span class="info-box-icon bg-success elevation-1"><i class="fa fa-truck"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Guias en Ruta</span>
              <span class="info-box-number"><?php echo $datos->transito; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-thumbs-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Guias Entregadas</span>
              <span class="info-box-number"><?php echo $datos->entregadas; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>

    </div>
          </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
    <br>

<!-- Custom tabs (Charts with tabs)-->
        <div class="card card-primary">
          <div class="card-header d-flex p-0">
            <h3 class="card-title p-3">
              <i class="fa fa-pie-chart mr-1"></i>
              Seguimiento a pendientes
            </h3>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">

      <!-- Small boxes (Stat box) -->
    <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3><?php echo $manifiestos->ruta; ?></h3>

                  <p>Manifiestos en ruta</p>
                </div>
                <div class="icon">
                  <i class="fa fa-truck"></i>
                </div>
              </div>
            </div> <!-- ./col -->



            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3><?php echo $manifiestos->finalizado; ?></h3>

                  <p>Manifiestos finalizados</p>
                </div>
                <div class="icon">
                  <i class="fa fa-thumbs-up"></i>
                </div>
              </div>
            </div>  <!-- ./col -->



            <div class="col-lg-3 col-6"> <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?php echo $datos->transito; ?></h3>

                  <p>Guias pendientes de entrega</p>
                </div>
                <div class="icon">
                  <i class="fa fa-calendar-plus-o"></i>
                </div>
              </div>
            </div> <!-- ./col -->


            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3><?php echo $manifiestos->pendientes_cierre; ?></h3>
                  <p>Manifiestos pendientes de cierre</p>
                </div>
                <div class="icon">
                  <i class="fa fa-map"></i>
                </div>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
        </div>
      </div><!-- /.card-body -->
    </div><!-- /.card -->
    <br>



        <div class="row">
          <div class="col-md-6">
            <!-- AREA CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Guias Semanal</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <div id="legend"></div>
                  <canvas id="guiaSemanal" style="height: 250px;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- DONUT CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Facturas Semanal</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="pieChart" style="height:250px"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- AREA CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Guias Semestral</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="areaChart" style="height:250px"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col (Center) -->
          <div class="col-md-6">
            <!-- LINE CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Guias Semanal</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="lineChart" style="height:250px"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- BAR CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Facturas Mensual</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="height:250px"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col (Center) -->
          
          <!-- /.col (Rigth) -->
          <div class="col-md-4">




            <!-- DONUT CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Facturas Semestral</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="pieChart" style="height:250px"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


          </div>
          <!-- /.col (Right) -->
        </div>

  </div><!-- /.container-fluid -->
</div><!-- /.content -->


<!-- Control pie de pagina -->
<?php $this->load->view('main/pie_pagina')?> 
<!-- /.control-pie de pagina -->

<!-- REQUIRED SCRIPTS -->
<?php $this->load->view('main/scripts')?> 

<script>
  $(function () {
    $.ajax({
      type: "GET",
      url: "<?=site_url('main/getEstaditicas');?>",
      success: function (resp) {
        var obj = jQuery.parseJSON(resp);
        setGuiaSemanal(obj);
      },
      error: function (request, status, error) {
        alert(request.responseText);
    }

    })

    function setBarData(obj)
    {
      var colorData        = [
      {
        color    : '#f56954',
        highlight: '#f56954',
      },
      {
        color    : '#00a65a',
        highlight: '#00a65a',
      },
      {
        color    : '#f39c12',
        highlight: '#f39c12',
      },
      {
        color    : '#00c0ef',
        highlight: '#00c0ef',
      },
      {
        color    : '#3c8dbc',
        highlight: '#3c8dbc',
      },
      {
        color    : '#d2d6de',
        highlight: '#d2d6de',
      }
    ]

      var color = Math.floor(Math.random() * 6);

      var datos    =     {
          label               : obj.guia_descripcion,
          fillColor           : colorData[color].color,
          strokeColor         : colorData[color].color,
          pointColor          : colorData[color].color,
          pointStrokeColor    : colorData[color].color,
          pointHighlightFill  : colorData[color].highlight,
          pointHighlightStroke: colorData[color].highlight,
          data                : obj.data
        }
        //alert(datos.label);
        return datos;
    }

    function setChartOptions()
    {
      var barChartOptions  = 
      {
        //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
        scaleBeginAtZero        : true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines      : true,
        //String - Colour of the grid lines
        scaleGridLineColor      : 'rgba(0,0,0,.05)',
        //Number - Width of the grid lines
        scaleGridLineWidth      : 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines  : true,
        //Boolean - If there is a stroke on each bar
        barShowStroke           : true,
        //Number - Pixel width of the bar stroke
        barStrokeWidth          : 2,
        //Number - Spacing between each of the X value sets
        barValueSpacing         : 5,
        //Number - Spacing between data sets within X values
        barDatasetSpacing       : 1,
        //String - A legend template
        legendTemplate          : '<ul class="list-inline"><% for (var i=0; i<datasets.length; i++){%><li class="list-inline-item"><span class="badge " style="background-color:<%=datasets[i].fillColor%>"><%if(datasets[i].label){%><%=datasets[i].label%><%}%></span></li><%}%></ul>',
        //Boolean - whether to make the chart responsive
        responsive              : true,
        maintainAspectRatio     : true,
        animation: false
      }
      barChartOptions.datasetFill = false;
      return barChartOptions;

    }

    function setGuiaSemanal(obj){
      var Labels = [];
      var datos = [];
      
      //Obtener los nombres de las columnas
      $.each(obj.guia_semanal.dias, function(key, data) {
        Labels.push(data.diaNombre);
      });

      //Creo la variable de los datos
      var areaChartData = {
      labels  : Labels,
      datasets: [ ]
      }

      //Asigno cada una de las barras al dataset.
      $.each(obj.guia_semanal.estados, function (key, data){
        areaChartData.datasets.push(setBarData(data));
      });



    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#guiaSemanal').get(0).getContext('2d')
    var barChartData                     = areaChartData
    var barChartOptions                  = setChartOptions();

    var barChart  = new Chart(barChartCanvas).Bar(barChartData, barChartOptions);
    var legendHolder = document.createElement('div');
    legendHolder.innerHTML = barChart.generateLegend();
    alert(legendHolder.innerHTML );
    document.getElementById('legend').appendChild(legendHolder.firstChild);
    }


  
  })
  
</script>


</body>
</html>