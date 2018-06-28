<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class acciones extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('acciones_model');
        }        
    }

    public function index()
    {
    }

    public function accionesBycontrolador($controladorid, $menuid)
    {
        $parametros = array(
            "controladorid" => $controladorid,
            "menuid" => $menuid

        );
        $this->load->model('acciones_model');
        $this->datos['vista'] = "acciones/acciones_lista";
        $this->datos['datos'] = $this->acciones_model->obtener_todos($controladorid);
        $this->datos['parametros'] = $parametros;
        $this->load->view('main/principal',$this->datos);
    }

    public function ver($id){
        $this->load->model('acciones_model');
        $this->datos['vista'] = "acciones/ver";
        $this->datos['datos'] = $this->acciones_model->obtener_por_id($id);
        $this->load->view('main/principal',$this->datos);
    }


    public function nuevo($controladorid,$menuid)
    {
        $data = array(
            "controladorid" => $controladorid,
            "nombre" => null,
            "accionid" => null,
            "menuid" => $menuid
        );
        $this->datos['vista'] = "acciones/nuevo";
        $this->datos['datos'] = $data;
        $this->load->view('main/principal', $this->datos);

    }

    public function guardar($id){
        $this->load->model('acciones_model');
        $this->datos['vista'] = "acciones/guardar";
        $this->datos['datos'] = $this->acciones_model->obtener_por_id($id);
        $this->load->view('main/principal', $this->datos);
    }

    public function guardar_post($id=null){
        if($this->input->post()){
           $nombre = $this->input->post('nombre');
           $controladorid = $this->input->post('controladorid');
           $menuid = $this->input->post('menuid');
           $this->load->model('acciones_model');
           $this->acciones_model->guardar($nombre, $controladorid, $id);
           redirect('acciones/accionesBycontrolador'."/".$controladorid."/".$menuid);
        }else{
           $this->guardar();
        } 
     }

     public function eliminar($id,$menuid){
        $this->load->model('acciones_model');
        $this->acciones_model->eliminar($id);
        redirect('acciones/accionesBycontrolador'."/".$controladorid."/".$menuid);
    }


}