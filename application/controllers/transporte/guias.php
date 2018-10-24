<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guias extends CI_Controller {
  public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('main');
        } else {
            $this->load->model('transporte/guias_model');
            $this->load->model('clientes/clientes_model');
            $this->load->model('transporte/lugares_model');
            $this->load->model('transporte/servicios_model');
            $this->load->model('facturacion/tipos_pago_model');
            $this->load->model('transporte/guias_estado_model');
        }    
    }

    public function index()
    {
         $this->datos['vista'] = "transporte/guias/guias_lista";
        $this->datos['guias_lista'] = $this->guias_model->obtener_todos();
        $this->load->view('transporte/guias/guias_lista',$this->datos);
    }

    public function ver($id){
        $this->datos['vista'] = "facturacion/tipo_doctos/ver";
        $this->datos['datos'] = $this->tipodoctos_model->obtener_por_id($id);
        $this->load->view('main/principal',$this->datos);
    }

    public function nuevo($resultado = "")
    {
              $claseresultado = "";
        if($resultado  == "error")
        {
            $resultado = "Guia ya esta ingresada!";
            $claseresultado = "danger";
        }
        if($resultado == "success")
        {
            $resultado = "Guia ingresada con exito.!";
            $claseresultado = "success";
        }
        $this->datos['claseresultado'] = $claseresultado;
        $this->datos['resultado'] = $resultado;
        $this->datos['vista'] = "transporte/guias/nuevo";
        $this->datos['clientes_lista'] = $this->clientes_model->obtener_todos();
        $this->datos['lugares_lista'] = $this->lugares_model->obtener_todos();
        $this->datos['servicios_lista'] = $this->servicios_model->obtener_todos();
        $this->datos['tipos_pago_lista'] = $this->tipos_pago_model->obtener_todos();
        $this->load->view('transporte/guias/nuevo',$this->datos);

    }

    public function editar($id){
        $this->datos['vista'] = "transporte/guias/ver";
        $this->datos['clientes_lista'] = $this->clientes_model->obtener_todos();
        $this->datos['lugares_lista'] = $this->lugares_model->obtener_todos();
        $this->datos['servicios_lista'] = $this->servicios_model->obtener_todos();
        $this->datos['tipos_pago_lista'] = $this->tipos_pago_model->obtener_todos();
        $this->datos['guias_estado_lista'] = $this->guias_estado_model->obtener_todos();
        $this->datos['datos'] = $this->guias_model->obtener_por_id($id);
        $this->datos['disabledheader'] = "disabled";
        $this->datos['disabled'] = "";
        $this->datos['titulo'] = "Modificar Guia";
        $this->load->view('transporte/guias/ver',$this->datos);
    }

     public function cancelar($id){
        $this->guias_model->cancelar($id);
        redirect('transporte/guias');
    }


    public function visualizar($id){
        $this->datos['vista'] = "transporte/guias/ver";
        $this->datos['clientes_lista'] = $this->clientes_model->obtener_todos();
        $this->datos['lugares_lista'] = $this->lugares_model->obtener_todos();
        $this->datos['servicios_lista'] = $this->servicios_model->obtener_todos();
        $this->datos['tipos_pago_lista'] = $this->tipos_pago_model->obtener_todos();
        $this->datos['guias_estado_lista'] = $this->guias_estado_model->obtener_todos();
        $this->datos['datos'] = $this->guias_model->obtener_por_id($id);
        $this->datos['disabledheader'] = "disabled";
        $this->datos['disabled'] = "disabled";
        $this->datos['titulo'] = "Ver Guia";
        $this->load->view('transporte/guias/ver',$this->datos);
    }

     public function guardar_post($id=null){
        if($this->input->post()){
           $codigo_guia_se = preg_replace('/\s+/', '', $this->input->post('codigo_guia'));
           $validacionguia = $this->guias_model->validar_guia_existe($codigo_guia_se);
           if($validacionguia == null )
            {
           $codigo_guia = $codigo_guia_se;
           $direccion_envia = $this->input->post('direccion_envia');
           $direccion_recibe = $this->input->post('direccion_recibe');
           $responsable_envia = $this->input->post('responsable_envia');
           $responsable_recibe = $this->input->post('responsable_recibe');
           $responsable_envia_telefono = $this->input->post('telefono_envia');
           $responsable_recibe_telefono = $this->input->post('telefono_recibe');
           $id_tipo_pago = $this->input->post('id_tipo_pago');
           $porcentaje_pago_envia = $this->input->post('porcentaje_pago_envia');
           $porcentaje_pago_recibe = $this->input->post('porcentaje_pago_recibe');
           $id_servicio = $this->input->post('id_servicio');
           $peso = $this->input->post('peso');
           $total_pago_envia = $this->input->post('total_pago_envia');
           $total_pago_recibe = $this->input->post('total_pago_recibe');
           $id_cliente_envia = $this->input->post('id_cliente_envia');
           $id_cliente_recibe = $this->input->post('id_cliente_recibe');
           $id_lugar_origen = $this->input->post('id_lugar_origen');
           $id_lugar_destino = $this->input->post('id_lugar_destino');
           $precio_especial = $this->input->post('precio_especial');
           $id_usuario_crea = $_SESSION['user_id'];
           $precio = $this->input->post('precio');
           $peso_maximo = $this->input->post('peso_maximo');
           $precio_peso_adicional = $this->input->post('precio_peso_adicional');
           $id = $this->guias_model->guardar($codigo_guia,$direccion_envia,$direccion_recibe,$responsable_envia,$responsable_recibe,$responsable_envia_telefono,$responsable_recibe_telefono,$id_tipo_pago,$porcentaje_pago_envia,$porcentaje_pago_recibe,$id_servicio,$peso,$total_pago_envia,$total_pago_recibe,$id_cliente_envia,$id_cliente_recibe, $id_lugar_origen, $id_lugar_destino,$id_usuario_crea, $id, $precio, $peso_maximo, $precio_peso_adicional, $precio_especial);
           //redirect('transporte/guias/nuevo/success');
           redirect('transporte/guias/ver_guias_hija/'.$id.'/true');
         }else{
          redirect('transporte/guias/nuevo/error');
         }
           
        }else
        {

        }
         }

       public function editar_guardar_post($id=null){
        if($this->input->post()){
           $codigo_guia = $this->input->post('codigo_guia');
           $direccion_envia = $this->input->post('direccion_envia');
           $direccion_recibe = $this->input->post('direccion_recibe');
           $responsable_envia = $this->input->post('responsable_envia');
           $responsable_recibe = $this->input->post('responsable_recibe');
           $responsable_envia_telefono = $this->input->post('telefono_envia');
           $responsable_recibe_telefono = $this->input->post('telefono_recibe');
           $id_tipo_pago = $this->input->post('id_tipo_pago');
           $porcentaje_pago_envia = $this->input->post('porcentaje_pago_envia');
           $porcentaje_pago_recibe = $this->input->post('porcentaje_pago_recibe');
           $id_servicio = $this->input->post('id_servicio');
           $peso = $this->input->post('peso');
           $total_pago_envia = $this->input->post('total_pago_envia');
           $total_pago_recibe = $this->input->post('total_pago_recibe');
           $id_cliente_envia = $this->input->post('id_cliente_envia');
           $id_cliente_recibe = $this->input->post('id_cliente_recibe');
           $id_lugar_origen = $this->input->post('id_lugar_origen');
           $id_lugar_destino = $this->input->post('id_lugar_destino');
           $precio_especial = $this->input->post('precio_especial');
           $id_usuario_crea = $_SESSION['user_id'];
           $precio = $this->input->post('precio');
           $peso_maximo = $this->input->post('peso_maximo');
           $precio_peso_adicional = $this->input->post('precio_peso_adicional');
           $this->guias_model->guardar($codigo_guia,$direccion_envia,$direccion_recibe,$responsable_envia,$responsable_recibe,$responsable_envia_telefono,$responsable_recibe_telefono,$id_tipo_pago,$porcentaje_pago_envia,$porcentaje_pago_recibe,$id_servicio,$peso,$total_pago_envia,$total_pago_recibe,$id_cliente_envia,$id_cliente_recibe, $id_lugar_origen, $id_lugar_destino,$id_usuario_crea, $id, $precio, $peso_maximo, $precio_peso_adicional, $precio_especial);
           redirect('transporte/guias');
           
        }else
        {

        }
     }

    public function ver_guias_hija($id,$autopupup=null,$resultado = ""){
        
        $claseresultado = "";
        if($resultado  == "error")
        {
            $resultado = "ERROR, Guia hija cargada ya en una madre.!";
            $claseresultado = "danger";
        }
        if($resultado == "success")
        {
            $resultado = "GUIA Hija, Agregada a Madre.";
            $claseresultado = "success";
        }
        $this->datos['datos'] = $this->guias_model->obtener_por_id($id);
        $this->datos['clientes_lista'] = $this->clientes_model->obtener_todos();
        $this->datos['servicios_lista'] = $this->servicios_model->obtener_todos();
        $this->datos['detalle_lista'] = $this->guias_model->obtener_guias_hija($id);
        $this->datos['autopupup'] = $autopupup;
        $this->datos['claseresultado'] = $claseresultado;
        $this->datos['resultado'] = $resultado;
        $this->datos['vista'] = "transporte/guias/guias_lista";
        $this->load->view('transporte/guias/guias_hija',$this->datos);
    }

     public function guardar_guia_hija($id_guia){
        if($this->input->post()){
               $porcentaje_pago_envia = $this->input->post('porcentaje_pago_envia');
               $porcentaje_pago_recibe = $this->input->post('porcentaje_pago_recibe');
               $id_servicio = $this->input->post('id_servicio');
               $peso = $this->input->post('peso');
               $precio_especial = $this->input->post('precio_especial');
               $precio = $this->input->post('precio');
            $id_cliente_envia = $this->input->post('id_cliente_envia');
            $codigo_guia_hija = $this->input->post('codigo_guia_hija');
            $codigo_guia_hija_se = preg_replace('/\s+/', '', $codigo_guia_hija);
            $validacionguia = $this->guias_model->validar_guia_hija_cargada($codigo_guia_hija_se);
            if($validacionguia == null )
            {
            $this->guias_model->guardar_guia_hija($id_guia,$codigo_guia_hija_se,$id_servicio, $peso, $porcentaje_pago_envia, $porcentaje_pago_recibe, $precio_especial, $id_cliente_envia );
            redirect('transporte/guias/ver_guias_hija/'.$id_guia.'/true/success');
            }
            else
            {
            redirect('transporte/guias/ver_guias_hija/'.$id_guia.'/true/error');   
            }
            }
     }

      public function eliminar_guia_hija($id_guia_hija,$id_guia){
        $this->guias_model->eliminar_guia_hija($id_guia_hija);
        redirect('transporte/guias/ver_guias_hija/'.$id_guia);
    }

    public function validaguia($codigo_guia)
    {
       $validacionguia = $this->guias_model->validar_guia_existe($codigo_guia);
        if($validacionguia == null )
            {
        echo json_encode("false");
      }else{
       echo json_encode("true"); 
      }
    }



  

    public function imprimir_guia($id_guia){
       // Se carga la libreria fpdf
        $this->load->library('Pdf_guia');
        $this->load->library('Barcode');

        $this->pdf = new Pdf_guia();
        // Agregamos una página
        $this->pdf->AddPage();

      //                  PROPERTIES
      // -------------------------------------------------- //
  
      $x        = 140;  // barcode center
      $y        = 45;  // barcode center
      $height   = 10;   // barcode height in 1D ; module size in 2D
      $width    = 0.51;    // barcode height in 1D ; not use in 2D
      $angle    = 0;   // rotation in degrees : nb : non horizontable barcode might not be usable because of pixelisation
      $code     = '3000001'; // barcode, of course ;)
      $type     = 'code39';
      $color    = '000000'; // color in hexa
  
      $this->barcode = new Barcode();
      $this->barcode->fpdf($this->pdf, $color, $x, $y, $angle, $type, array('code'=>$code), $width , $height);


        // Define el alias para el número de página que se imprimirá en el pie
        $this->pdf->AliasNbPages();
        /* Se define el titulo, márgenes izquierdo, derecho y
         * el color de relleno predeterminado
         */
        $guia = $this->guias_model->obtener_guia($id_guia);
        $this->pdf->SetTitle("Guia");
        $this->pdf->SetLeftMargin(15);
        $this->pdf->SetRightMargin(15);
        $this->pdf->SetFillColor(200,200,200);
        // Se define el formato de fuente: Arial, negritas, tamaño 9
        $this->pdf->SetFont('Arial', 'B', 9);
        /*
         * TITULOS DE COLUMNAS
         *
         * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
         */
       //impresion informacion del encabezado
        $this->pdf->SetX(150);
       $this->pdf->Cell(20,10,'GUIA No.',0,0,'R');
       $this->pdf->Cell(20,10,$guia->codigo_guia,0,0,'R');
       $this->pdf->Ln(5);
       //$this->pdf->Image('codigo_barra.png',160,40,30);
       $this->pdf->Ln(20);
      
      //impresion del detalle de guias
        $this->pdf->Cell(30,7,'DIA: '.$guia->dia,'TBL',0,'L','0');
        $this->pdf->Cell(30,7,'MES: '.$guia->mes,'TB',0,'L','0');
        $this->pdf->Cell(30,7,'ANIO: '.$guia->anio,'TB',0,'L','0');
        $this->pdf->Cell(45,7,' ORIGEN: '.$guia->lugar_origen,'TBL',0,'L','0');
        $this->pdf->Cell(45,7,' DESTINO: '.$guia->lugar_destino,'TBR',0,'L','0');
        $this->pdf->Ln(7);
        $this->pdf->Cell(90,7,'REMITENTE: '.$guia->responsable_envia,'TBL',0,'L','0');
        $this->pdf->Cell(1,7,'','TBL',0,'L','0');
        $this->pdf->Cell(89,7,'DESTINATARIO: '.$guia->responsable_recibe,'TBR',0,'L','0');
        $this->pdf->Ln(7);
        $this->pdf->Cell(90,7,'COMPANIA ENVIA: '.$guia->cliente_envia,'TBL',0,'L','0');
        $this->pdf->Cell(1,7,'','TBL',0,'L','0');
        $this->pdf->Cell(89,7,'COMPANIA RECIBE: '.$guia->cliente_recibe,'TBR',0,'L','0');
        $this->pdf->Ln(7);
        $this->pdf->Cell(90,7,'DIRECCION: '.$guia->direccion_envia,'TBL',0,'L','0');
        $this->pdf->Cell(1,7,'','TBL',0,'L','0');
        $this->pdf->Cell(89,7,'DIRECCION: '.$guia->direccion_recibe,'TBR',0,'L','0');
        $this->pdf->Ln(7);
        $this->pdf->Cell(90,7,'NOMBRE DE QUIEN ENVIA: '.$guia->responsable_envia,'TBL',0,'L','0');
        $this->pdf->Cell(45,7,'PIEZAS:','TBL',0,'L','0');
        $this->pdf->Cell(45,7,'PESO: '.$guia->peso,'TBR',0,'L','0');
        $this->pdf->Ln(7);
        $this->pdf->Cell(90,7,'FIRMA:','TBL',0,'L','0');
        $this->pdf->Cell(1,7,'','TBL',0,'L','0');
        $this->pdf->Cell(89,7,'DESCRIPCION:','TBR',0,'L','0');
        $this->pdf->Ln(7);
        $this->pdf->Cell(30,7,'SEGURO:','TBL',0,'L','0');
        $this->pdf->Cell(1,7,'','TBL',0,'L','0');
        $this->pdf->SetFont('Arial', 'B', 6);
        $this->pdf->Cell(149,7,'POR ESTE MEDIO EL CLIENTE DECLARA QUE ESTE ENVIO NO CONTIENE DINERO EN EFECTIVO SI NO QUE:','TBR',0,'L','0');
        $this->pdf->Ln(7);
        $this->pdf->SetFont('Arial', 'B', 9);
        $this->pdf->Cell(100,7,'RECIBIDO POR TRANSPORTES DE CARGA:','TBL',0,'L','0');
        $this->pdf->Cell(30,7,'FECHA:','TBL',0,'L','0');
        $this->pdf->Cell(1,7,'','TBL',0,'L','0');
        $this->pdf->Cell(49,7,'TIPO DE PAGO: '.$guia->tipo_pago,'TBR',0,'L','0');
        $this->pdf->Ln(7);

        /*
         * Se manda el pdf al navegador
         *
         * $this->pdf->Output(nombredelarchivo, destino);
         *
         * I = Muestra el pdf en el navegador
         * D = Envia el pdf para descarga
         *
         */
        $this->pdf->Output("Guia.pdf", 'D');
    }
  
}
     
