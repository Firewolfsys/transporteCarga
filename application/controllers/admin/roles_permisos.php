<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class roles_permisos extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('admin/roles_permisos_model');
        }        
    }


    public function index()
    {
    }

    public function PermisosByRol($rolid)
    {
        $parametros = array(
            "rolid" => $rolid
        );
        $this->datos['vistapadre'] = "admin/roles";
        $this->datos['vista'] = "admin/permisos_roles/permisos_roles_lista";
        $this->datos['datos'] =  $this->roles_permisos_model->obtener_todos($rolid);
        $this->datos['parametros'] = $parametros;
        $this->load->view('admin/permisos_roles/permisos_roles_lista',$this->datos);
    }

    public function guardar_post($rolid){
        if($this->input->post()){
            $this->roles_permisos_model->elimina_Permisos_porRol($rolid);
            foreach($this->input->post('checkPermisos') as $check) {
                $this->roles_permisos_model->guardar($rolid, $check);
            }
           redirect('admin/roles');
        }else{
           $this->PermisosByRol($rolid);
        } 
     }

}