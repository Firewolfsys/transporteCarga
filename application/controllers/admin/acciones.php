<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class acciones extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('admin/acciones_model');
            $this->load->library('menu');
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
        $this->datos['menu'] = $this->menu->construir_menu();
        $this->datos['vista'] = "admin/acciones/acciones_lista";
        $this->datos['datos'] = $this->acciones_model->obtener_todos($controladorid);
        $this->datos['parametros'] = $parametros;
        $this->load->view('main/principal',$this->datos);
    }

    public function ver($id){
        $this->datos['menu'] = $this->menu->construir_menu();
        $this->datos['vista'] = "admin/acciones/ver";
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
        $this->datos['menu'] = $this->menu->construir_menu();
        $this->datos['vista'] = "admin/acciones/nuevo";
        $this->datos['datos'] = $data;
        $this->load->view('main/principal', $this->datos);

    }

    public function guardar($id){
        $this->datos['menu'] = $this->menu->construir_menu();
        $this->datos['vista'] = "admin/acciones/guardar";
        $this->datos['datos'] = $this->acciones_model->obtener_por_id($id);
        $this->load->view('main/principal', $this->datos);
    }

    public function guardar_post($id=null){
        if($this->input->post()){
           $nombre = $this->input->post('nombre');
           $controladorid = $this->input->post('controladorid');
           $menuid = $this->input->post('menuid');
           $this->acciones_model->guardar($nombre, $controladorid, $id);
           redirect('admin/acciones/accionesBycontrolador'."/".$controladorid."/".$menuid);
        }else{
           $this->guardar();
        } 
     }

     public function eliminar($id,$menuid){
        $this->acciones_model->eliminar($id);
        redirect('admin/acciones/accionesBycontrolador'."/".$controladorid."/".$menuid);
    }


}