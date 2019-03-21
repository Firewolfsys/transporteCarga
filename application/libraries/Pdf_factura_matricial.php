<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    // Incluimos el archivo fpdf
    //require_once APPPATH."third_party/fpdf/fpdf.php";
    require_once('fpdf/fpdf.php');
 
    //Extendemos la clase Pdf de la clase fpdf para que herede todas sus variables y funciones
    class Pdf_factura_matricial extends FPDF {
        public function __construct() {
            parent::__construct();
        }

        // El encabezado del PDF
        public function Header(){
       }
       // El pie del pdf
       public function Footer(){
      }

      public function MultiAlignCell($w,$h,$text,$border=0,$ln=0,$align='L',$fill=false)
      {
          // Store reset values for (x,y) positions
          $x = $this->GetX() + $w;
          $y = $this->GetY();

          // Make a call to FPDF's MultiCell
          $this->MultiCell($w,$h,$text,$border,$align,$fill);

          // Reset the line position to the right, like in Cell
          if( $ln==0 )
          {
              $this->SetXY($x,$y);
          }
      }


    }
?>