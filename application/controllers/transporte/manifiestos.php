<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class manifiestos extends CI_Controller {
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
        $this->datos['vista'] = "transporte/manifiestos/manifiestos_lista";
        $this->datos['datos'] = $this->manifiestos_model->obtener_todos();
        $this->load->view('transporte/manifiestos/manifiestos_lista',$this->datos);
    }

    public function ver($id,$autopupup=null,$resultado = ""){
        
        $claseresultado = "";
        if($resultado  == "error")
        {
            $resultado = "ERROR, Guia cargada ya en un Manifiesto.!";
            $claseresultado = "danger";
        }
        if($resultado == "success")
        {
            $resultado = "GUIA, Agregada a Manifiesto.";
            $claseresultado = "success";
        }
        
         $parametros = array(
            "pilotos" => $this->pilotos_model->obtener_todos(),
            "lugares" => $this->lugares_model->obtener_todos(),
            "detalle_lista" => $this->manifiestos_model->obtener_detalle($id),
            "autopopup" => $autopupup,
            "claseresultado" => $claseresultado,
            "resultado" => $resultado
        );
        $this->datos['parametros']= $parametros;
        $this->datos['disabled']= "disabled";
        $this->datos['vista'] = "transporte/manifiestos/ver";
        $this->datos['datos'] = $this->manifiestos_model->obtener_por_id($id);
        $this->load->view('transporte/manifiestos/ver',$this->datos);
    }

     public function editar($id){
         $parametros = array(
            "pilotos" => $this->pilotos_model->obtener_todos(),
            "lugares" => $this->lugares_model->obtener_todos(),
            "detalle_lista" => $this->manifiestos_model->obtener_detalle($id),
            "autopopup" => "",
            "claseresultado" => "",
            "resultado" => ""
        );
        $this->datos['parametros']= $parametros;
        $this->datos['disabled']= "";
        $this->datos['vista'] = "transporte/manifiestos/ver";
        $this->datos['datos'] = $this->manifiestos_model->obtener_por_id($id);
        $this->load->view('transporte/manifiestos/ver',$this->datos);
    }

    public function nuevo()
    {
        $parametros = array(
            "pilotos" => $this->pilotos_model->obtener_todos(),
            "lugares" => $this->lugares_model->obtener_todos()
        );

        $data = array(
            "id_manifiesto" => null,
            "id_piloto" => null,
            "fecha_creacion" => null,
            "finalizado" => null,
            "id_lugar_origen" => null,
            "id_lugar_destino" => null
        );
        $this->datos['vista'] = "transporte/manifiestos/nuevo";
        $this->datos['parametros']= $parametros;
        $this->datos['datos'] = $data;
        $this->load->view('transporte/manifiestos/nuevo', $this->datos);

    }

     public function guardar_encabezado($id=null){
        if($this->input->post()){
            $id_piloto = $this->input->post('id_piloto');
            $id_lugar_origen = $this->input->post('id_lugar_origen');
            $id_lugar_destino = $this->input->post('id_lugar_destino');
            
            $id = $this->manifiestos_model->guardarencabezado($id_piloto, $id_lugar_origen, $id_lugar_destino, 
            $id);
            redirect('transporte/manifiestos/ver/'.$id);
        }else{redirect('transporte');}
     }

    public function guardar_detalle($id_manifiesto){
        if($this->input->post()){
            $codigo_guia = $this->input->post('codigo_guia');
            $codigo_guia_se = preg_replace('/\s+/', '', $codigo_guia);
            $existe = $this->manifiestos_model->existe_guia($codigo_guia_se);
            if($existe!=null){
            $guia = $this->manifiestos_model->obtener_guia_codigo($codigo_guia_se);
            $validacionguia = $this->manifiestos_model->validar_guia_en_manifiesto($codigo_guia_se);
            if($validacionguia == null )
            {
            $this->manifiestos_model->guardar_detalle($guia->id_guia,$id_manifiesto);
            redirect('transporte/manifiestos/ver/'.$id_manifiesto.'/true/success');
            }
            else
            {
            redirect('transporte/manifiestos/ver/'.$id_manifiesto.'/true/error');   
            }
            }else
            {
                redirect('transporte/manifiestos/ver/'.$id_manifiesto.'/true/error'); 
            }
            }
     }

     public function eliminar_manifiesto($id_manifiesto){
        $this->manifiestos_model->eliminar_manifiesto($id_manifiesto);
        redirect('transporte/manifiestos');
    }


    public function imprimir_manifiesto($id_manifiesto){
       // Se carga la libreria fpdf
        $this->load->library('pdf_manifiesto');

        $this->pdf = new Pdf_manifiesto();
        // Agregamos una página
        $this->pdf->AddPage();
        // Define el alias para el número de página que se imprimirá en el pie
        $this->pdf->AliasNbPages();
        /* Se define el titulo, márgenes izquierdo, derecho y
         * el color de relleno predeterminado
         */
        $manifiesto = $this->manifiestos_model->obtener_por_id($id_manifiesto);
        $manifiestodetalle = $this->manifiestos_model->obtener_detalle($id_manifiesto);

        $this->pdf->SetTitle("Manifiesto");
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
       $this->pdf->Cell(10,10,'MANIFIESTO NO.',0,0,'R');
       $this->pdf->Cell(10,10,$manifiesto->id_manifiesto,0,0,'R');
       $this->pdf->Ln(7);
       $this->pdf->Cell(10,10,'FECHA:',0,0,'L');
       $this->pdf->SetX(50);
       $this->pdf->Cell(10,10,$manifiesto->fecha_creacion,0,0,'L');
       $this->pdf->SetX(120);
       $this->pdf->Cell(10,10,'PILOTO:',0,0,'R');
       $this->pdf->SetX(160);
       $this->pdf->Cell(10,10,$manifiesto->piloto,0,0,'R');
       $this->pdf->Ln(7);
       $this->pdf->Cell(10,10,'ORIGEN:',0,0,'L');
       $this->pdf->SetX(50);
       $this->pdf->Cell(10,10,$manifiesto->origen,0,0,'L');
       $this->pdf->SetX(120);
       $this->pdf->Cell(10,10,'DESTINO:',0,0,'R');
       $this->pdf->SetX(160);
       $this->pdf->Cell(10,10,$manifiesto->destino,0,0,'R');
       $this->pdf->Ln(20);
      
      //impresion del detalle de guias
        $this->pdf->Cell(95,7,'GUIAS EN MANIFIESTO NO. '.$manifiesto->id_manifiesto,'TBL',0,'L','1');
        $this->pdf->Cell(5,7,'','TB',0,'L','1');
        $this->pdf->Cell(5,7,'','TB',0,'L','1');
        $this->pdf->Cell(5,7,'','TB',0,'L','1');
        $this->pdf->Cell(5,7,'','TB',0,'L','1');
        $this->pdf->Cell(25,7,'','TB',0,'L','1');
        $this->pdf->Cell(25,7,'','TB',0,'L','1');
        $this->pdf->Cell(25,7,'','TBR',0,'C','1');
        $this->pdf->Ln(7);
        $this->pdf->Cell(15,7,'GUIA','TBL',0,'L','1');
        $this->pdf->Cell(35,7,'ENVIA','TB',0,'L','1');
        $this->pdf->Cell(35,7,'RECIBE','TB',0,'L','1');
        $this->pdf->Cell(20,7,'SERVICIO','TB',0,'L','1');
        $this->pdf->Cell(10,7,'PESO','TB',0,'L','1');
        $this->pdf->Cell(25,7,'TIPO PAGO','TB',0,'L','1');
        $this->pdf->Cell(25,7,'PAGA ENVIA','TB',0,'L','1');
        $this->pdf->Cell(25,7,'PAGA RECIBE','TBR',0,'C','1');
        $this->pdf->Ln(7);
        $this->pdf->SetFont('Arial', 'B', 8);
        foreach ($manifiestodetalle as $detalle) {
            // Se imprimen los datos de cada cliente
            $this->pdf->Cell(15,5,$detalle->codigo_guia,'BL',0,'L',0);
            $this->pdf->Cell(35,5,$detalle->cliente_envia,'B',0,'L',0);
            $this->pdf->Cell(35,5,$detalle->cliente_recibe,'B',0,'L',0);
            $this->pdf->Cell(20,5,$detalle->servicio,'B',0,'L',0);
            $this->pdf->Cell(10,5,$detalle->peso,'B',0,'L',0);
            $this->pdf->Cell(25,5,$detalle->tipo_pago,'B',0,'L',0);
            $this->pdf->Cell(25,5,"Q. ".$detalle->total_pago_envia,'B',0,'D',0);
            $this->pdf->Cell(25,5,"Q. ".$detalle->total_pago_recibe,'BR',0,'D',0);
            $this->pdf->Ln(5);
        }

       
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
        $this->pdf->Output("Manifiesto.pdf", 'D');
    }
  
}