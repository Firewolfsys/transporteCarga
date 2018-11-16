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
            $this->load->model('transporte/guias_model');
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
        if($resultado  == "error2")
        {
            $resultado = "ERROR, Guia no existe.!";
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
                redirect('transporte/manifiestos/ver/'.$id_manifiesto.'/true/error2'); 
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
        $this->pdf->Cell(95,7,utf8_decode('GUÍAS EN MANIFIESTO NO. ').$manifiesto->id_manifiesto,'TBL',0,'L','1');
        $this->pdf->Cell(5,7,'','TB',0,'L','1');
        $this->pdf->Cell(5,7,'','TB',0,'L','1');
        $this->pdf->Cell(5,7,'','TB',0,'L','1');
        $this->pdf->Cell(5,7,'','TB',0,'L','1');
        $this->pdf->Cell(25,7,'','TB',0,'L','1');
        $this->pdf->Cell(25,7,'','TB',0,'L','1');
        $this->pdf->Cell(25,7,'','TBR',0,'C','1');
        $this->pdf->Ln(7);
        foreach ($manifiestodetalle as $detalle) {
            //obtenemos las guias hijas de la guia madre
            $guiashijas = $this->guias_model->obtener_guias_hija($detalle->id_guia);
            //declaramos las variables de los totales generales
            $total_pago_envia = 0;
            $total_pago_recibe = 0;
            //ENCABEZADO GUIA
            $this->pdf->SetFont('Arial', 'B', 9);
            $this->pdf->Cell(95,7,utf8_decode('INFORMACIÓN DE LA GUIA MADRE NO. ').$detalle->codigo_guia,'TBL',0,'L','1');
            $this->pdf->Cell(5,7,'','TB',0,'L','1');
            $this->pdf->Cell(5,7,'','TB',0,'L','1');
            $this->pdf->Cell(5,7,'','TB',0,'L','1');
            $this->pdf->Cell(5,7,'','TB',0,'L','1');
            $this->pdf->Cell(25,7,'','TB',0,'L','1');
            $this->pdf->Cell(25,7,'','TB',0,'L','1');
            $this->pdf->Cell(25,7,'','TBR',0,'C','1');
            $this->pdf->Ln(7);
            $this->pdf->Cell(15,7,utf8_decode('GUÍA'),'TBL',0,'L','1');
            $this->pdf->Cell(35,7,utf8_decode('ENVÍA'),'TBL',0,'L','1');
            $this->pdf->Cell(35,7,'RECIBE','TBL',0,'L','1');
            $this->pdf->Cell(20,7,'SERVICIO','TBL',0,'L','1');
            $this->pdf->Cell(10,7,'PESO','TBL',0,'L','1');
            $this->pdf->Cell(25,7,'TIPO PAGO','TBL',0,'L','1');
            $this->pdf->Cell(25,7,utf8_decode('PAGA ENVÍA'),'TBL',0,'L','1');
            $this->pdf->Cell(25,7,'PAGA RECIBE','TBLR',0,'C','1');
            $this->pdf->Ln(7);
            $this->pdf->SetFont('Arial', '', 8);
            $cliente_envia = $detalle->cliente_envia;
            $cliente_recibe = $detalle->cliente_recibe;
            $cuantosclienteenvia = strlen($cliente_envia);
            $cuantosclienterecibe = strlen($cliente_recibe);
            if($cuantosclienteenvia > $cuantosclienterecibe)
            {
              $cliente_recibe = str_pad($detalle->cliente_recibe,$cuantosclienteenvia);
            }
             if($cuantosclienteenvia < $cuantosclienterecibe)
            {
              $cliente_envia = str_pad($detalle->cliente_envia,$cuantosclienterecibe);
            }
            // Se imprimen los datos de cada cliente
            $this->pdf->Cell(15,5,$detalle->codigo_guia,'BL',0,'L',0);
            $this->pdf->MultiAlignCell(35,5,$cliente_envia,1,0,'L',0);
            $this->pdf->MultiAlignCell(35,5,$cliente_recibe,1,0,'L',0);
            //$this->pdf->Cell(35,5,$detalle->cliente_envia,'B',0,'L',0);
            //$this->pdf->Cell(35,5,$detalle->cliente_recibe,'B',0,'L',0);
            $this->pdf->Cell(20,5,$detalle->servicio,'BR',0,'L',0);
            $this->pdf->Cell(10,5,$detalle->peso,'BR',0,'L',0);
            $this->pdf->Cell(25,5,$detalle->tipo_pago,'BR',0,'L',0);
            $this->pdf->Cell(25,5,"Q. ".$detalle->total_pago_envia,'BR',0,'D',0);
            $this->pdf->Cell(25,5,"Q. ".$detalle->total_pago_recibe,'BR',0,'D',0);
            $this->pdf->Ln(5);
            if($guiashijas != null )
            {
            //AGREGADO GUIA HIJA 
            $this->pdf->SetFont('Arial', 'B', 9);
            $this->pdf->Cell(95,7,utf8_decode('INFORMACIÓN GUIAS HIJAS'),'TBL',0,'L','1');
            $this->pdf->Cell(5,7,'','TB',0,'L','1');
            $this->pdf->Cell(5,7,'','TB',0,'L','1');
            $this->pdf->Cell(5,7,'','TB',0,'L','1');
            $this->pdf->Cell(5,7,'','TB',0,'L','1');
            $this->pdf->Cell(25,7,'','TB',0,'L','1');
            $this->pdf->Cell(25,7,'','TB',0,'L','1');
            $this->pdf->Cell(25,7,'','TBR',0,'C','1');
            $this->pdf->Ln(7);
            $this->pdf->Cell(15,7,utf8_decode(''),'TBL',0,'L','1');
            $this->pdf->Cell(35,7,utf8_decode(''),'TB',0,'L','1');
            $this->pdf->Cell(35,7,'GUIA HIJA NO.','TBL',0,'L','1');
            $this->pdf->Cell(20,7,'SERVICIO','TBL',0,'L','1');
            $this->pdf->Cell(10,7,'PESO','TBL',0,'L','1');
            $this->pdf->Cell(25,7,'TIPO PAGO','TBL',0,'L','1');
            $this->pdf->Cell(25,7,utf8_decode('PAGA ENVÍA'),'TBL',0,'L','1');
            $this->pdf->Cell(25,7,'PAGA RECIBE','TBLR',0,'C','1');
            $this->pdf->Ln(7);
            $total_pago_envia = $detalle->total_pago_envia;
            $total_pago_recibe = $detalle->total_pago_recibe;
            foreach ($guiashijas as $detallehija) {
                $this->pdf->SetFont('Arial', '', 8);
                // Se imprimen los datos de cada cliente
                $this->pdf->Cell(15,7,utf8_decode(''),'TBL',0,'L','1');
                $this->pdf->Cell(35,7,utf8_decode(''),'TR',0,'L','1');
                $this->pdf->Cell(35,5,$detallehija->codigo_guia_hija,'BR',0,'L',0);
                $this->pdf->Cell(20,5,$detallehija->servicio,'BR',0,'L',0);
                $this->pdf->Cell(10,5,$detallehija->peso,'BR',0,'L',0);
                $this->pdf->Cell(25,5,$detalle->tipo_pago,'BR',0,'L',0);
                $this->pdf->Cell(25,5,"Q. ".$detallehija->total_pago_envia,'BR',0,'D',0);
                $this->pdf->Cell(25,5,"Q. ".$detallehija->total_pago_recibe,'BR',0,'D',0);
                $this->pdf->Ln(5);
                $total_pago_envia = $total_pago_envia + $detallehija->total_pago_envia;
                $total_pago_recibe = $total_pago_recibe + $detallehija->total_pago_recibe;
                }
            //$this->pdf->Ln(2);
            $this->pdf->SetFont('Arial', 'B', 9);
            $this->pdf->Cell(15,7,utf8_decode(''),'TBL',0,'L','1');
            $this->pdf->Cell(35,7,utf8_decode(''),'TB',0,'L','1');
            $this->pdf->Cell(35,7,'','TB',0,'L','1');
            $this->pdf->Cell(20,7,'','TB',0,'L','1');
            $this->pdf->Cell(10,7,'','TB',0,'L','1');
            $this->pdf->Cell(25,7,'TOTAL','TB',0,'D','1');
            $this->pdf->Cell(25,7,"Q. ".$total_pago_envia,'TBL',0,'L',0);
            $this->pdf->Cell(25,7,"Q. ".$total_pago_recibe,'TBLR',0,'L',0);
            $this->pdf->Ln(7);
            $this->pdf->Cell(5,7,'','T',0,'L','');
            $this->pdf->Ln(7);
            $this->pdf->SetFont('Arial', 'B', 8);
        }
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