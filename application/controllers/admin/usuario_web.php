<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario_web extends CI_Controller {
  public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('login_model');
        }        
    }
    public function index()
    {
        $this->datos['vista'] = "admin/usuario_web/usuario_web_lista";
        $this->load->view('main/principal',$this->datos);
    }
}