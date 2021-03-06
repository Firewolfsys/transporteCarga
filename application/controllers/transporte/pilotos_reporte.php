<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class pilotos_reporte extends CI_Controller {
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
        $id_estado = $this->input->post('estado');

        $this->datos['datos'] = $this->pilotos_model->obtener_todos_estado($id_estado);

        
        $parametros = array(
            "id_estado" => $id_estado,
            "estados" => $this->estados_piloto_model->obtener_todos()
        );
        $this->datos['parametros']= $parametros;
        $this->datos['vista'] = "transporte/pilotos_reporte/pilotos_reporte";
        $this->load->view('transporte/pilotos_reporte/pilotos_reporte',$this->datos);
    }

    public function imprimir()
    {
        $uri_str =  $this->uri->uri_string();


        $id_estado = $this->uri->segment(4);
        
       // Se carga la libreria fpdf
        $this->load->library('pdf');

        //echo($id_estado);
    
        //throw new \UnexpectedValueException("piloto: ".$id_piloto."  estado:".$id_estado."  rango:".$rangoFecha  );
        //$id_piloto = $this->input->post('id_piloto');
        //$id_estado = $this->input->post('estado');
        //$id_rango  = $this->input->post('rangofecha');
        $pilotos = $this->pilotos_model->obtener_todos_estado($id_estado);


        // Se obtienen los manifiestos de la BD
        //$manifiestos = $this->manifiestos_model->obtener_todos_traslado($id_piloto);
        // Creacion del PDF
        /*
         * Se crea un objeto de la clase Pdf, recuerda que la clase Pdf
         * heredó todos las variables y métodos de fpdf
         */
        $this->pdf = new Pdf();
        // Agregamos una página
        $this->pdf->AddPage();
        // Define el alias para el número de página que se imprimirá en el pie
        $this->pdf->AliasNbPages();
        /* Se define el titulo, márgenes izquierdo, derecho y
         * el color de relleno predeterminado
         */
        $this->pdf->SetTitle("Listado de Pilotos");
        $this->pdf->SetLeftMargin(15);
        $this->pdf->SetRightMargin(15);
        $this->pdf->SetFillColor(200,200,200);
 
        // Se define el formato de fuente: Arial, negritas, tamaño 9
        $this->pdf->SetFont('Arial', 'B', 8);
        /*
         * TITULOS DE COLUMNAS
         *
         * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
         */
        $this->pdf->Cell(15,7,' ID ','TBL',0,'C','1');
        $this->pdf->Cell(30,7,' PILOTO ','TBL',0,'C','1');
        
        $this->pdf->Cell(30,7,'IDENTIFICACION','TBL',0,'L','1');
        $this->pdf->Cell(30,7,'FECHA INGRESO','TBL',0,'L','1');
        $this->pdf->Cell(25,7,'PAGO MENSUAL','TBL',0,'L','1');
        $this->pdf->Cell(25,7,'BONIFICACION','TBL',0,'L','1');
        $this->pdf->Cell(20,7,'TELEFONO','TBL',0,'L','1');
        $this->pdf->Cell(15,7,'ESTADO','TBLR',0,'C','1');
        $this->pdf->Ln(7);
        // La variable $x se utiliza para mostrar un número consecutivo
        $x = 1;
        foreach ($pilotos as $piloto) {
            // se imprime el numero actual y despues se incrementa el valor de $x en uno

            
            $this->pdf->Cell(15,5,$x++,'BL',0,'C',0);
            $this->pdf->Cell(30,5,$piloto->nombres.' '.$piloto->apellidos ,'BL',0,'C',0);
            // Se imprimen los datos de cada cliente
            $this->pdf->Cell(30,5,$piloto->identificacion,'BL',0,'L',0);
            $this->pdf->Cell(30,5,date_format(date_create($piloto->fecha_ingreso), 'd-m-Y'),'BL',0,'L',0);
            $this->pdf->Cell(25,5,$piloto->pago_mensual,'BL',0,'R',0);
            $this->pdf->Cell(25,5,$piloto->bonificacion_ley,'BL',0,'R',0);
            $this->pdf->Cell(20,5,$piloto->telefono,'BL',0,'L',0);
            $this->pdf->Cell(15,5,$piloto->estado,'BRL',0,'L',0);
            //Se agrega un salto de linea
            $this->pdf->Ln(5);
        }
        /*
         * Se manda el pdf al navegador
         *
         * $this->pdf->Output(nombredelarchivo, destino);
         *
         * I = Muestra el pdf en el navegador
         * D = Envia el pdf para descarga
         *
         */
        $this->pdf->Output("Listado de Manifiestos.pdf", 'I');
    }

}