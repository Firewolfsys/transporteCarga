<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class pilotos extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('transporte/pilotos_model');
            $this->load->model('transporte/estados_piloto_model');
        }        
    }

    public function index()
    {
        $this->datos['vista'] = "transporte/pilotos/pilotos_lista";
        $this->datos['parametros'] = $this->estados_piloto_model->obtener_todos();
        $this->datos['datos'] = $this->pilotos_model->obtener_todos();
        $this->load->view('transporte/pilotos/pilotos_lista',$this->datos);
    }

    public function ver($id){
        $this->datos['vista'] = "transporte/pilotos/ver";
        $this->datos['datos'] = $this->pilotos_model->obtener_por_id($id);
        $this->load->view('transporte/pilotos/ver',$this->datos);
    }

    public function nuevo()
    {
        $data = array(
            "id_piloto" => null,
            "nombres" => null,
            "apellidos" => null,
            "identificacion" => null,
            "licencia_tipo" => null,
            "licencia" => null,
            "fecha_ingreso" => null,
            "pago_mensual" => null,
            "bonificacion_ley" => null,
            "bonificacion_incentivo" => null,
            "id_piloto_estado" => null,
            "telefono" => null,
            "email" => null,
            "direccion" => null
        );
        $this->datos['vista'] = "transporte/pilotos/nuevo";
        $this->datos['parametros'] = $this->estados_piloto_model->obtener_todos();
        $this->datos['datos'] = $data;
        $this->load->view('transporte/pilotos/nuevo', $this->datos);

    }

    public function guardar($id){
        $this->datos['vista'] = "transporte/pilotos/guardar";
        $this->datos['parametros'] = $this->estados_piloto_model->obtener_todos();
        $this->datos['datos'] = $this->pilotos_model->obtener_por_id($id);
        $this->load->view('transporte/pilotos/guardar', $this->datos);
    }



     public function guardar_post($id=null){
        if($this->input->post()){
            $nombres = $this->input->post('nombres');
            $apellidos = $this->input->post('apellidos');
            $identificacion = $this->input->post('identificacion');
            $licencia_tipo = $this->input->post('licencia_tipo');
            $licencia = $this->input->post('licencia');
            $fecha_ingreso = $this->input->post('fecha_ingreso');
            $pago_mensual = $this->input->post('pago_mensual');
            $bonificacion_ley = $this->input->post('bonificacion_ley');
            $bonificacion_incentivo = $this->input->post('bonificacion_incentivo');
            $id_piloto_estado = $this->input->post('id_piloto_estado');
            $telefono = $this->input->post('telefono');
            $email = $this->input->post('email');
            $direccion = $this->input->post('direccion');
            $this->pilotos_model->guardar($nombres, $apellidos, $identificacion, $licencia_tipo,
            $licencia, $fecha_ingreso, $pago_mensual, $bonificacion_ley, $bonificacion_incentivo,
            $id_piloto_estado, $telefono, $email, $direccion, $id);
            redirect('transporte/pilotos');
        }else{
            $this->guardar();
        } 
     }

     public function darbaja($id){
        $this->pilotos_model->darbaja($id);
        redirect('transporte/pilotos');
    }

    public function recibo($id){
       // Se carga la libreria fpdf
        $this->load->library('pdf_recibo');

        $this->pdf = new Pdf_recibo();
        // Agregamos una página
        $this->pdf->AddPage();
        // Define el alias para el número de página que se imprimirá en el pie
        $this->pdf->AliasNbPages();
        /* Se define el titulo, márgenes izquierdo, derecho y
         * el color de relleno predeterminado
         */
        $piloto = $this->pilotos_model->obtener_por_id($id);

        $this->pdf->SetTitle("Recibo Para Pago");
        $this->pdf->SetLeftMargin(27);
        $this->pdf->SetRightMargin(15);
        $this->pdf->SetFillColor(200,200,200);
 
        // Se define el formato de fuente: Arial, negritas, tamaño 9
        $this->pdf->SetFont('Arial', 'B', 9);
        /*
         * TITULOS DE COLUMNAS
         *
         * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
         */

       $this->pdf->Cell(20,7,'Nombre','TBL',0,'L','1');
       $this->pdf->Cell(25,7,'','TBR',0,'L','1');
       $this->pdf->Cell(85,7,$piloto->nombres.' '.$piloto->apellidos,'TBL',0,'L',0);
       $this->pdf->Cell(25,7,'','TBR',0,'L',0);
       $this->pdf->Ln(7);
       $this->pdf->Cell(20,7,'Identificacion','TBL',0,'L','1');
       $this->pdf->Cell(25,7,'','TBR',0,'L','1');
       $this->pdf->Cell(85,7,$piloto->identificacion,'TBL',0,'L',0);
       $this->pdf->Cell(25,7,'','TBR',0,'L',0);
       $this->pdf->Ln(7);
       $this->pdf->Cell(20,7,'Direccion','TBL',0,'L','1');
       $this->pdf->Cell(25,7,'','TBR',0,'L','1');
       $this->pdf->Cell(85,7,$piloto->direccion,'TBL',0,'L',0);
       $this->pdf->Cell(25,7,'','TBR',0,'C',0);
       $this->pdf->Ln(7);
       $this->pdf->Cell(20,7,'Email','TBL',0,'L','1');
       $this->pdf->Cell(25,7,'','TBR',0,'L','1');
       $this->pdf->Cell(85,7,$piloto->email,'TBL',0,'L',0);
       $this->pdf->Cell(25,7,'','TBR',0,'L',0);
       $this->pdf->Ln(7);
       $this->pdf->Cell(20,7,'Telefono','TBL',0,'L','1');
       $this->pdf->Cell(25,7,'','TBR',0,'L','1');
       $this->pdf->Cell(85,7,$piloto->telefono,'TBL',0,'L',0);
       $this->pdf->Cell(25,7,'','TBR',0,'L',0);
        $this->pdf->Ln(7);
        $this->pdf->Ln(7);
        $this->pdf->Cell(15,5,'','',0,'',0);
        $this->pdf->Cell(15,5,'','',0,'',0);
        $this->pdf->Cell(15,5,'','',0,'',0);
        $this->pdf->Cell(40,7,' Descripcion ','TBL',0,'C','1');
        $this->pdf->Cell(25,7,'Monto','TBR',0,'C','1');
        $this->pdf->Ln(7);
        //$this->pdf->Cell(15,5,1,'BL',0,'C',0);
        $this->pdf->Cell(15,5,'','',0,'',0);
        $this->pdf->Cell(15,5,'','',0,'',0);
        $this->pdf->Cell(15,5,'','',0,'',0);
        $this->pdf->Cell(40,5,'Pago Mensual','BL',0,'C',0);
        //$this->pdf->Cell(40,5,$piloto->pago_mensual,'B',0,'L',0);
        $this->pdf->Cell(25,5,$piloto->pago_mensual,'BR',0,'C',0);
        //Se agrega un salto de linea
        $this->pdf->Ln(5);
        $this->pdf->Cell(15,5,'','',0,'',0);
        $this->pdf->Cell(15,5,'','',0,'',0);
        $this->pdf->Cell(15,5,'','',0,'',0);
        $this->pdf->Cell(40,5,'Bonificacion Ley','BL',0,'C',0);
        $this->pdf->Cell(25,5,$piloto->bonificacion_ley,'BR',0,'C',0);
        $this->pdf->Ln(5);
        $this->pdf->Cell(15,5,'','',0,'',0);
        $this->pdf->Cell(15,5,'','',0,'',0);
        $this->pdf->Cell(15,5,'','',0,'',0);
        $this->pdf->Cell(40,5,'Bonificacion Incentivo','BL',0,'C',0);
        $this->pdf->Cell(25,5,$piloto->bonificacion_incentivo,'BR',0,'C',0);
        $this->pdf->Ln(5);
        $this->pdf->Cell(15,5,'','',0,'',0);
        $this->pdf->Cell(15,5,'','',0,'',0);
        $this->pdf->Cell(15,5,'','',0,'',0);
        $this->pdf->Cell(40,5,'TOTAL','BL',0,'C',0);
        $this->pdf->Cell(25,5,$piloto->total_pago,'BR',0,'C',0);
        $this->pdf->Ln(5);
        /*
         * Se manda el pdf al navegador
         *
         * $this->pdf->Output(nombredelarchivo, destino);
         *
         * I = Muestra el pdf en el navegador
         * D = Envia el pdf para descarga
         *
         */
        $this->pdf->Output("Recibo Piloto.pdf", 'D');
    }
  
}