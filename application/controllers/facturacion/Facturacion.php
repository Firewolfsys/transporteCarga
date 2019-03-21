<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Facturacion extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('facturacion/facturacion_model');
            $this->load->model('clientes/clientes_model');
            $this->load->model('facturacion/tipodoctos_model');
            $this->load->model('transporte/guias_model');
        }        
    }

    public function index()
    {

        $id_cliente = $this->input->post('id_cliente');
        $this->datos['id_cliente'] = $id_cliente;
        $this->datos['clientes'] = $this->clientes_model->obtener_todos();
        $this->datos['vista'] = "facturacion/facturacion/lista";
        $this->datos['datos'] = $this->facturacion_model->obtener_todos($id_cliente);
        $this->load->view('facturacion/facturacion/lista',$this->datos);
    }

    public function obtener_facturados()
    {
        $id_cliente = $this->input->post('id_cliente');
        $this->datos['id_cliente'] = $id_cliente;
        $this->datos['clientes'] = $this->clientes_model->obtener_todos();
        $this->datos['vista'] = "facturacion/facturacion/obtener_facturados/";
        $this->datos['datos'] = $this->facturacion_model->obtener_todos_facturados($id_cliente);
        $this->load->view('facturacion/facturacion/pendientes_pago',$this->datos);
    }

    public function factura_pagada($id_documento){
            $id = $this->facturacion_model->factura_pagada($id_documento);
            redirect('facturacion/facturacion/obtener_facturados/'.$id_documento);
     }


    public function ver($id,$autopupup=null,$resultado = ""){
        
        $claseresultado = "";
        if($resultado  == "error")
        {
            $resultado = "ERROR, Guia no se pudo facturar";
            $claseresultado = "danger";
        }
        if($resultado == "success")
        {
            $resultado = "GUIA, Facturada.";
            $claseresultado = "success";
        }
        $detalle = $this->facturacion_model->obtener_por_id($id);
        $this->datos['guiaspendientes'] = $this->facturacion_model->obtener_guias_pendientes($detalle->id_cliente,$detalle->fecha_inicio, $detalle->fecha_fin);
        $this->datos['clientes'] = $this->clientes_model->obtener_todos();
        $this->datos['tipo_doctos'] = $this->tipodoctos_model->obtener_todos();
        $this->datos['detalle_lista']= $this->facturacion_model->obtener_detalle($id);;
        $this->datos['autopopup']= $autopupup;
        $this->datos['claseresultado']= $claseresultado;
        $this->datos['resultado']= $resultado;
        $this->datos['disabled']= "disabled";
        $this->datos['vista'] = "facturacion/facturacion/ver";
        $this->datos['datos'] = $detalle;
        $this->load->view('facturacion/facturacion/ver',$this->datos);
    }

     public function editar($id){
         $detalle = $this->facturacion_model->obtener_por_id($id);
        $this->datos['guiaspendientes'] = $this->facturacion_model->obtener_guias_pendientes($detalle->id_cliente,$detalle->fecha_inicio, $detalle->fecha_fin);
        $this->datos['clientes'] = $this->clientes_model->obtener_todos();
        $this->datos['tipo_doctos'] = $this->tipodoctos_model->obtener_todos();
        $this->datos['detalle_lista']= $this->facturacion_model->obtener_detalle($id);
        $this->datos['autopopup']= "";
        $this->datos['claseresultado']= "";
        $this->datos['resultado']= "";
        $this->datos['disabled']= "";
        $this->datos['vista'] = "facturacion/facturacion/ver";
        $this->datos['datos'] = $detalle;
        $this->load->view('facturacion/facturacion/ver',$this->datos);
    }

    public function nuevo()
    {
        $data = array(
            "id_documento" => null,
            "id_cliente" => null,
            "fecha_creacion" => null,
            "fecha_inicio" => null,
            "fecha_fin" => null
        );
        $this->datos['clientes'] = $this->clientes_model->obtener_todos();
        $this->datos['tipo_doctos'] = $this->tipodoctos_model->obtener_todos();
        $this->datos['vista'] = "facturacion/facturacion/nuevo";
        $this->datos['datos'] = $data;
        $this->load->view('facturacion/facturacion/nuevo', $this->datos);

    }

     public function guardar_encabezado($id=null){
        if($this->input->post()){
            $id_cliente = $this->input->post('id_cliente');
            $tipo_docto = $this->input->post('tipo_docto');
            $fecha_inicio = $this->input->post('fecha_inicio');
            $fecha_fin = $this->input->post('fecha_fin');
            $user_id = $_SESSION['user_id'];

            $id = $this->facturacion_model->guardarencabezado($id_cliente, $tipo_docto, $fecha_inicio, $fecha_fin, $user_id,
            $id);
            redirect('facturacion/facturacion/ver/'.$id);
        }else{redirect('facturacion');}
     }

    public function guardar_detalle($id_documento, $id_guia, $total_facturar, $tipo_facturar)
     {
            $this->facturacion_model->guardar_detalle($id_documento, $id_guia, $total_facturar, $tipo_facturar);
            redirect('facturacion/facturacion/ver/'.$id_documento.'/true/success');
     }

       public function eliminar_detalle($id_documento, $id_guia, $total_facturar, $tipo_facturar, $id_detalle)
     {
            $this->facturacion_model->eliminar_detalle($id_documento, $id_guia, $total_facturar, $tipo_facturar, $id_detalle);
            redirect('facturacion/facturacion/ver/'.$id_documento);
     }

      public function facturar_todos($id_documento)
     {
      $detalle = $this->facturacion_model->obtener_por_id($id_documento);
            $this->facturacion_model->facturar_todos($id_documento, $detalle->id_cliente,$detalle->fecha_inicio, $detalle->fecha_fin);
            redirect('facturacion/facturacion/ver/'.$id_documento.'/true/success');
     }

     public function anular_factura($id_documento){
        $this->facturacion_model->anular_factura($id_documento);
        redirect('facturacion/facturacion');
    }


    public function imprimir_fatura($id_factura){
       // Se carga la libreria fpdf
        $this->load->library('Pdf_factura');

        $this->pdf = new Pdf_factura();
        // Agregamos una página
        $this->pdf->AddPage();

        // Define el alias para el número de página que se imprimirá en el pie
        $this->pdf->AliasNbPages();
        /* Se define el titulo, márgenes izquierdo, derecho y
         * el color de relleno predeterminado
         */
        $factura = $this->facturacion_model->obtener_encabezado_factura($id_factura);
        $facturadetalle = $this->facturacion_model->obtener_detalle_factura($id_factura);
        $this->pdf->SetTitle("Factura");
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
       $this->pdf->SetX(153);
       $this->pdf->Cell(20,10,utf8_decode('FACTURA No.'),0,0,'R');
       $this->pdf->Cell(20,10,$factura->correlativo,0,0,'R');
       $this->pdf->Ln(7);
       $this->pdf->SetX(150);
       $this->pdf->Cell(1,7,'','TBL',0,'L','0');
       $this->pdf->Cell(10,7,'GUATEMALA. ','TB',0,'D','0');
       $this->pdf->Cell(35,7,$factura->fecha_creacion,'TBR',0,'R','0');
       $this->pdf->Ln(7);
        $cliente = $factura->cliente;
        $telefono = $factura->telefono;
        $cuantoscliente = strlen($cliente);
        $cuantostelefono = strlen($telefono);
        $totalgeneral = 0;
        if($cuantoscliente > $cuantostelefono)
        {
          $telefono = str_pad($factura->telefono,$cuantoscliente);
        }
         if($cuantoscliente < $cuantostelefono)
        {
          $cliente = str_pad($factura->cliente,$cuantostelefono);
        }
        $this->pdf->MultiAlignCell(135,6,'CLIENTE: '.$cliente,1,0,'L',0);
        $this->pdf->MultiAlignCell(46,6,'TEL.: '.$telefono,1,1,'L',0);
        $this->pdf->MultiAlignCell(181,6,utf8_decode('DIRECCIÓN: ').$factura->direccion,1,0,'L',0);
        $this->pdf->Ln(6);
        $this->pdf->Cell(90,6,'CODIGO: '.$factura->id_cliente,1,0,'L',0);
        $this->pdf->Cell(91,6,'MES DE SERVICIO: '.$factura->mes,1,0,'L',0);
        $this->pdf->Ln(6);
        //impresion del detalle de la factura
        $this->pdf->Cell(110,7,utf8_decode('D E S C R I P C I Ó N'),'TBL',0,'C','0');
        $this->pdf->Cell(36,7,'PRECIO UNITARIO','TB',0,'R','0');
        $this->pdf->Cell(35,7,'V A L O R','TBR',0,'R','0');
        $this->pdf->Ln(7);
        foreach ($facturadetalle as $detalle) {
        $totalgeneral = $totalgeneral + $detalle->total;
        $guia = $this->guias_model->obtener_guia($detalle->id_guia);
        $descripcion = $guia->servicio;
        $cuantosdescripcion = strlen($descripcion);
        $preciounitario = str_pad($guia->precio_publico,$cuantosdescripcion);
        $valor = str_pad($detalle->total,$cuantosdescripcion);
        // Se imprimen los datos de cada guia
        $this->pdf->MultiAlignCell(110,5,$descripcion,1,0,'C',0);
        $this->pdf->MultiAlignCell(36,5,'Q. '.number_format((float)$preciounitario, 2),1,0,'R',0);
        $this->pdf->MultiAlignCell(35,5,'Q. '.number_format((float)$valor, 2),1,0,'R',0);
        $this->pdf->Ln(5);
        }
        $this->pdf->Cell(110,6,'','TBL',0,'C',0);
        $this->pdf->Cell(36,6,'TOTAL Q.','TBL',0,'C',0);
        $this->pdf->Cell(35,6,number_format($totalgeneral, 2),'TBLR',0,'R',0);
        $this->pdf->Ln(6);
        $this->pdf->Cell(181,6,'SUJETO A PAGOS TRIMESTRALES','TBLR',0,'C',0);
        $this->pdf->Ln(6);
        $this->pdf->SetFont('Arial', '', 6);
        $this->pdf->MultiAlignCell(181,3,'AL RECIBIR LAS MERCADERIAS DE TRANSPORTES DE CARGA EN GENERAL DE CONFORMIDAD Y ACEPTADA LIBRE DE PROTESTO, EL COMPRADOR SE COMPROMETE A CANCELAR EL VALOR DE ESTA FACTURA CAMBIARIA AL VENCIMIENTO AL NO HACERLO EFECTIVO EN LA FECHA ESTIPULADA SE CARGARA EL 2.5% DE INTERES MENSUAL SOBRE EL TOTAL O POR EL ULTIMO SALDO INSOLUTO QUE APAREZCA LA FIRMA DE CUALQUIER EMPLEADO O DEPENDIENTES DEL COMPRADOR AL ACEPTAR ESTA FACTURA, OBLIGARA A ESTE A CUMPLIR CON TODAS LAS CONDICIONES ESTIPULADAS EN LA MISMA. ACEPTO Y RECONOZCO COMO OBLIGACIONES LAS CONDICIONES ESPECIFICADAS EN ESTA FACTURA. POR CADA CHEQUE RECHAZADO SE COBRARA Q.75.00.',1,0,'J',0);
        $this->pdf->SetFont('Arial', 'B', 9);
       $this->pdf->Ln(20);
       //impresion del detalle de guias
       //$this->pdf->MultiAlignCell(ancho,alto,texto,borde,salto de linea,justificacion,0);
        /*
         * Se manda el pdf al navegador
         *
         * $this->pdf->Output(nombredelarchivo, destino);
         *
         * I = Muestra el pdf en el navegador
         * D = Envia el pdf para descarga
         *
         */
        $this->pdf->Output("Factura".$factura->correlativo.".pdf", 'D');
    }


    public function imprimir_factura_matricial($id_factura){
       // Se carga la libreria fpdf
        $this->load->library('Pdf_factura_matricial');

        $this->pdf = new Pdf_factura_matricial();
        // Agregamos una página
        $this->pdf->AddPage();

        // Define el alias para el número de página que se imprimirá en el pie
        $this->pdf->AliasNbPages();
        /* Se define el titulo, márgenes izquierdo, derecho y
         * el color de relleno predeterminado
         */
        $factura = $this->facturacion_model->obtener_encabezado_factura($id_factura);
        $facturadetalle = $this->facturacion_model->obtener_detalle_factura($id_factura);
        $this->pdf->SetTitle("Factura");
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
        $this->pdf->Ln(15);
       $this->pdf->SetX(150);
       $this->pdf->Cell(1,7,'','',0,'L','0');
       $this->pdf->Cell(35,7,$factura->fecha_creacion,'',0,'R','0');
       $this->pdf->Ln(7);
       $cliente = $factura->cliente;
       $telefono = $factura->telefono;
       $cuantoscliente = strlen($cliente);
       $cuantostelefono = strlen($telefono);
       $totalgeneral = 0;
        if($cuantoscliente > $cuantostelefono)
        {
          $telefono = str_pad($factura->telefono,$cuantoscliente);
        }
         if($cuantoscliente < $cuantostelefono)
        {
          $cliente = str_pad($factura->cliente,$cuantostelefono);
        }
        $this->pdf->MultiAlignCell(135,6,$cliente,0,0,'L',0);
        $this->pdf->MultiAlignCell(46,6,$telefono,0,1,'L',0);
        $this->pdf->MultiAlignCell(181,6,$factura->direccion,0,0,'L',0);
        $this->pdf->Ln(6);
        $this->pdf->Cell(90,6,$factura->id_cliente,0,0,'L',0);
        $this->pdf->Cell(91,6,$factura->mes,0,0,'L',0);
        $this->pdf->Ln(6);
        //impresion del detalle de la factura
        $this->pdf->Ln(14);
        foreach ($facturadetalle as $detalle) {
        $totalgeneral = $totalgeneral + $detalle->total;
        $guia = $this->guias_model->obtener_guia($detalle->id_guia);
        $descripcion = $guia->servicio;
        $cuantosdescripcion = strlen($descripcion);
        $preciounitario = str_pad($guia->precio_publico,$cuantosdescripcion);
        $valor = str_pad($detalle->total,$cuantosdescripcion);
        // Se imprimen los datos de cada guia
        $this->pdf->MultiAlignCell(110,5,$descripcion,0,0,'C',0);
        $this->pdf->MultiAlignCell(36,5,'Q. '.number_format((float)$preciounitario, 2),0,0,'R',0);
        $this->pdf->MultiAlignCell(35,5,'Q. '.number_format((float)$valor, 2),0,0,'R',0);
        $this->pdf->Ln(5);
        }
        $this->pdf->Cell(110,6,'','',0,'C',0);
        $this->pdf->Cell(36,6,'','',0,'C',0);
        $this->pdf->Cell(35,6,number_format($totalgeneral, 2),'',0,'R',0);
        $this->pdf->Ln(6);
        $this->pdf->SetFont('Arial', 'B', 9);
       $this->pdf->Ln(20);
       //impresion del detalle de guias
       //$this->pdf->MultiAlignCell(ancho,alto,texto,borde,salto de linea,justificacion,0);
        /*
         * Se manda el pdf al navegador
         *
         * $this->pdf->Output(nombredelarchivo, destino);
         *
         * I = Muestra el pdf en el navegador
         * D = Envia el pdf para descarga
         *
         */
        $this->pdf->Output("Factura".$factura->correlativo.".pdf", 'D');
    }
  
}