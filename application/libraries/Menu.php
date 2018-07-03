<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu {

    protected $CI;

    // We'll use a constructor, as you can't directly call a function
    // from a property definition.
    public function __construct()
    {
            // Assign the CodeIgniter super-object
            $this->CI =& get_instance();
    }

    public function construir_menu($controlador)
    {
        $this->CI->load->model('admin/menus_model');
        $this->CI->load->model('admin/controladores_model');
        $arr_menu = $this->CI->menus_model->obtener_todos();

        $controladorArr = $this->CI->menus_model->get_menus_NavBar($controlador);

        $flag_Menu = false;
        $flag_Submenu = false;

        $ret_menu = "<nav class=\"mt-2\">";
        $ret_menu = "<ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">";


        foreach($arr_menu as $opcion)  {
            if ($opcion->menuID == $controladorArr->menuid)
                $flag_Menu = true;
            else 
                $flag_Menu = false;
            

            $ret_menu .= $this->contruye_menu($opcion->nombre,$opcion->icono,$flag_Menu);

            $arr_submenu = $this->CI->controladores_model->obtener_todos($opcion->menuID);

            foreach ($arr_submenu as $submenu) {
                if($submenu->controladorID == $controladorArr->controladorid)
                    $flag_Submenu = true;
                else 
                    $flag_Submenu = false;

                $ret_menu .= $this->contruye_submenu($submenu->nombre,$submenu->controlador,$flag_Submenu);
            }


            $ret_menu .= $this->cierra_menu();
        }
        $ret_menu .= "</ul></nav>";
        return $ret_menu;
    }


    private function contruye_menu($nombre, $icono,$activo)
    {
        $ret_menu = ""; 
        $ret_menu .= "<li class=\"nav-item has-treeview ";
        if ($activo) $ret_menu .= "menu-open ";
        $ret_menu .= "\">";
        $ret_menu .= "<a href=\"#\" class=\"nav-link ";
        if ($activo) $ret_menu .= "active";

        $ret_menu .= "\">";
        $ret_menu .= "<i class=\"nav-icon fa ".$icono."\"></i>";
        $ret_menu .= "<p>".$nombre."<i class=\"right fa fa-angle-left\"></i>";
        $ret_menu .= "</p>";
        $ret_menu .= "</a>";
        $ret_menu .= "<ul class=\"nav nav-treeview\">";
        return $ret_menu;
    }

    private function cierra_menu()
    {
        $ret_menu = ""; 
        $ret_menu .= "</ul>";
        $ret_menu .="</li>";
        return $ret_menu;        

    }

    private function contruye_submenu($nombre, $controlador,$activo)
    {
        $this->CI->load->helper('url');
        $ret_menu = "";
        $ret_menu .="<li class=\"nav-item\">";
        $ret_menu .="<a href=\"".base_url($controlador)."\" class=\"nav-link ";
        if ($activo) $ret_menu .= "active";
        $ret_menu .="\">";
        $ret_menu .="<i class=\"fa fa-circle-o nav-icon\"></i>";
        $ret_menu .="<p>".$nombre."</p>";
        $ret_menu .="</a>";
        $ret_menu .="</li>";
        return $ret_menu;
    }

    
}
