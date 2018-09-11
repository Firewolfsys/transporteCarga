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

    public function convierteFecha($formatoOrigen, $fecha, $formatoSalida)
    {
        $dateObj = \DateTime::createFromFormat($formatoOrigen, $fecha);
        if (!$dateObj)
        {
            throw new \UnexpectedValueException("Could not parse the date: $fecha");
        }
        $fechaSalida = $dateObj->format($formatoSalida);
        return $fechaSalida;
    }

    public function retorna_fechas($id_rango)
    {

        $id_rango = str_replace("%20", " ", $id_rango);

        $strfechaI = substr($id_rango,0,10);
        $strfechaF = substr($id_rango,13,10);

        $fechaI = $this->convierteFecha("j-m-Y", $strfechaI, "Y/m/d");
        $fechaF = $this->convierteFecha("j-m-Y", $strfechaF, "Y/m/d");

        $fechas = array(
            "fechaI" => $fechaI,
            "fechaF" => $fechaF
        );
        return $fechas;
    }

    public function index()
    {
        $id_piloto = $this->input->post('id_piloto');
        $id_estado = $this->input->post('estado');
        $id_rango  = $this->input->post('rangofecha');


        if ($id_rango !="") 
        {
            $fechas = $this->retorna_fechas($id_rango);
            $this->datos['datos'] = $this->manifiestos_model->obtener_manifiestos_reporte($id_piloto, $id_estado, $fechas['fechaI'], $fechas['fechaF']);

        }     
        else $this->datos['datos'] = null;     
        
        $parametros = array(
            "id_piloto" => $id_piloto,
            "id_estado" => $id_estado,
            "id_rango" => $id_rango,
            "pilotos" => $this->pilotos_model->obtener_todos()
        );
        $this->datos['parametros']= $parametros;
        $this->datos['vista'] = "transporte/manifiestos_reporte/manifiestos_lista";
        $this->load->view('transporte/manifiestos_reporte/manifiestos_lista',$this->datos);
    }

    public function imprimir()
    {
        $uri_str =  $this->uri->uri_string();


        $id_piloto = $this->uri->segment(4);
        $id_estado = $this->uri->segment(5);
        $rangoFecha = $this->uri->segment(6);
        
       // Se carga la libreria fpdf
        $this->load->library('pdf');

    
        //throw new \UnexpectedValueException("piloto: ".$id_piloto."  estado:".$id_estado."  rango:".$rangoFecha  );
        //$id_piloto = $this->input->post('id_piloto');
        //$id_estado = $this->input->post('estado');
        //$id_rango  = $this->input->post('rangofecha');
        if ($rangoFecha !="") 
        {
            $fechas = $this->retorna_fechas($rangoFecha);
            $manifiestos = $this->manifiestos_model->obtener_manifiestos_reporte($id_piloto, $id_estado, $fechas['fechaI'], $fechas['fechaF']);

        }
        
        


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
        $this->pdf->Cell(25,7,'ESTADO','TB',0,'L','1');
        $this->pdf->Cell(25,7,'ORIGEN','TB',0,'L','1');
        $this->pdf->Cell(25,7,'DESTINO','TBR',0,'C','1');
        $this->pdf->Ln(7);
        // La variable $x se utiliza para mostrar un número consecutivo
        $x = 1;
        foreach ($manifiestos as $manifiesto) {
            // se imprime el numero actual y despues se incrementa el valor de $x en uno

            switch($manifiesto->finalizado) {
                case 0: 
                    $estado ="Vigente";
                    break;
                case 1:
                    $estado = "Finalizado";
                    break;
              }
            
            $this->pdf->Cell(15,5,$x++,'BL',0,'C',0);
            // Se imprimen los datos de cada cliente
            $this->pdf->Cell(40,5,$manifiesto->nombres." ".$manifiesto->apellidos,'B',0,'L',0);
            $this->pdf->Cell(40,5,$manifiesto->fecha_creacion,'B',0,'L',0);
            $this->pdf->Cell(25,5,$estado,'B',0,'L',0);
            $this->pdf->Cell(25,5,$manifiesto->lugar_origen,'B',0,'L',0);
            $this->pdf->Cell(25,5,$manifiesto->lugar_destino,'BR',0,'C',0);
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