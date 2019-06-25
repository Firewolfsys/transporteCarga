<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    // Incluimos el archivo fpdf
    //require_once APPPATH."third_party/fpdf/fpdf.php";
    require_once('fpdf/fpdf.php');
 
    //Extendemos la clase Pdf de la clase fpdf para que herede todas sus variables y funciones
    class Pdf_guia_sticker extends FPDF {
        public function __construct() {
            parent::__construct();
        }

        // El encabezado del PDF
        public function Header(){
            $this->Image('logo.png',2,1,30);
            $this->SetFont('Arial','B',10);
            $this->Cell(25);
            $this->Cell(90,2,'GUATEMALA',0,0,'C');
            $this->Ln('3');
            $this->SetFont('Arial','B',6);
            $this->Cell(25);
            $this->Cell(90,2,'16 Avenida 23-33, Zona 12, Reformita',0,0,'C');
            $this->Ln('2');
            $this->SetFont('Arial','B',6);
            $this->Cell(25);
            $this->Cell(90,2,'PBX: 2209-4242',0,0,'C');
            $this->Ln('2');
            $this->SetFont('Arial','B',6);
            $this->Cell(25);
            $this->Cell(90,2,'www.tracgt.com',0,0,'C');
            //$this->Ln(2);
       }
       // El pie del pdf
       public function Footer(){
           setlocale(LC_ALL,"es_ES");
           $this->SetY(-15);
           $this->SetFont('Arial','I',8);
           $this->Cell(60,25,strftime("%A %d de %B del %Y")." ".date('h:i:s A'),0,0,'C');
          if (!isset($_SESSION['user_id'])) {
          $this->Cell(135,25, 'no hay usuario',0,0,'C');}
          else
          {
            $this->Cell(135,25, 'usuario: '.$_SESSION['username'],0,0,'C');
          }
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