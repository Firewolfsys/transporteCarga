<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class manifiestos_reporte extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('transporte/manifiestos_model');
            $this->load->model('transporte/pilotos_model');
            $this->load->model('transporte/lugares_model');
        }        
    }

    public function index()
    {
        $id_piloto = $this->input->post('id_piloto');
        $parametros = array(
            "id_piloto" => $id_piloto,
            "pilotos" => $this->pilotos_model->obtener_todos()
        );
        $this->datos['parametros']= $parametros;
        $this->datos['vista'] = "transporte/manifiestos_reporte/manifiestos_lista";
        $this->datos['datos'] = $this->manifiestos_model->obtener_todos_traslado($id_piloto);
        $this->load->view('transporte/manifiestos_reporte/manifiestos_lista',$this->datos);
    }

    public function impirmir($id_piloto)
    {
        // Se carga la libreria fpdf
        $this->load->library('pdf');
        // Se obtienen los manifiestos de la BD
        $manifiestos = $this->manifiestos_model->obtener_todos_traslado($id_piloto);
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
        $this->pdf->SetTitle("Listado de Manifiestos");
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
         $this->pdf->Cell(15,7,' ID ','TBL',0,'C','1');
        $this->pdf->Cell(40,7,'PILOTO','TB',0,'L','1');
        $this->pdf->Cell(40,7,'FECHA CREACION','TB',0,'L','1');
        $this->pdf->Cell(25,7,'ORIGEN','TB',0,'L','1');
        $this->pdf->Cell(25,7,'DESTINO','TBR',0,'C','1');
        $this->pdf->Ln(7);
        // La variable $x se utiliza para mostrar un número consecutivo
        $x = 1;
        foreach ($manifiestos as $manifiesto) {
            // se imprime el numero actual y despues se incrementa el valor de $x en uno
            $this->pdf->Cell(15,5,$x++,'BL',0,'C',0);
            // Se imprimen los datos de cada cliente
            $this->pdf->Cell(40,5,$manifiesto->piloto,'B',0,'L',0);
            $this->pdf->Cell(40,5,$manifiesto->fecha_creacion,'B',0,'L',0);
            $this->pdf->Cell(25,5,$manifiesto->origen,'B',0,'L',0);
            $this->pdf->Cell(25,5,$manifiesto->destino,'BR',0,'C',0);
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