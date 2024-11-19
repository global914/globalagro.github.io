<?php

//error_reporting(0);
ini_set('memory_limit', '512M'); // estable un limite de 512 megas
ini_set('max_execution_time', '300');//Establece el maximo de ejecucion de un servidor

        $N1 = $_GET["fecha1"];
        $N2 = $_GET["fecha2"];


        //Sacar la Fecha Desde
        $fechav1 = substr($N1, 0, 10); //Agarra los diez primeros de la fecha es decir la fecha en formato gringo
        $Ano1 = substr($fechav1, 0, 4); //Agarra los cuatro primeros de la fecha es decir el Año
        $Dia1 = substr($fechav1, -2); // Agrra los 2 ultimos el Dia
        $fechav3 = substr($fechav1, 0, 7); //Agarra los diez primeros de la fecha es decir la fecha en formato gringo
        $Mes1 = substr($fechav3, -2); // Agarra los 2 ultimos el Mes

        $N1 = $Dia1 ."-" .$Mes1 ."-" .$Ano1;

        //Sacar la Fecha Desde
        $fechav2 = substr($N2, 0, 10); //Agarra los diez primeros de la fecha es decir la fecha en formato gringo
        $Ano2 = substr($fechav2, 0, 4); //Agarra los cuatro primeros de la fecha es decir el Año
        $Dia2 = substr($fechav2, -2); // Agrra los 2 ultimos el Dia
        $fechav3 = substr($fechav2, 0, 7); //Agarra los diez primeros de la fecha es decir la fecha en formato gringo
        $Mes2 = substr($fechav3, -2); // Agarra los 2 ultimos el Mes

        $N2 = $Dia2 ."-" .$Mes2 ."-" .$Ano2;


include("../controlador/conDB.php");

require('fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header(){

        $N1 = $_GET["fecha1"];
        $N2 = $_GET["fecha2"];


        //Sacar la Fecha Desde
        $fechav1 = substr($N1, 0, 10); //Agarra los diez primeros de la fecha es decir la fecha en formato gringo
        $Ano1 = substr($fechav1, 0, 4); //Agarra los cuatro primeros de la fecha es decir el Año
        $Dia1 = substr($fechav1, -2); // Agrra los 2 ultimos el Dia
        $fechav3 = substr($fechav1, 0, 7); //Agarra los diez primeros de la fecha es decir la fecha en formato gringo
        $Mes1 = substr($fechav3, -2); // Agarra los 2 ultimos el Mes

        $N1 = $Dia1 ."-" .$Mes1 ."-" .$Ano1;

        //Sacar la Fecha Desde
        $fechav2 = substr($N2, 0, 10); //Agarra los diez primeros de la fecha es decir la fecha en formato gringo
        $Ano2 = substr($fechav2, 0, 4); //Agarra los cuatro primeros de la fecha es decir el Año
        $Dia2 = substr($fechav2, -2); // Agrra los 2 ultimos el Dia
        $fechav3 = substr($fechav2, 0, 7); //Agarra los diez primeros de la fecha es decir la fecha en formato gringo
        $Mes2 = substr($fechav3, -2); // Agarra los 2 ultimos el Mes

        $N2 = $Dia2 ."-" .$Mes2 ."-" .$Ano2;


        $DiaE = date('d');
        $MesE = date('m');
        $AnoE = date('Y');

        $EMISION = $DiaE ."/" .$MesE ."/" .$AnoE;

        // Logo
        //$this->Image('pequiven.png',10,8,33);
        // Arial bold 15
        $this->SetFont('Arial','B',10);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->SetXY(90,6);
        $this->Cell(30,5,'EMPRESA DEMO',0,1,'C');
        $this->SetXY(90,10);
        $this->Cell(30,5,'DEPARTAMENTO DEMO',0,1,'C');
        $this->SetXY(90,15);
        $this->Cell(30,5,'ZONA INDUSTRIAL',0,1,'C');
        $this->SetXY(90,19);
        $this->Cell(30,5,'INFORME DE UNIDADES DESPACHADAS POR MES',0,1,'C');
        $this->SetFont('Arial','',10);
        $this->SetXY(170,8);
        $this->Cell(13,5,"Desde: ", 0, 0);
        $this->Cell(5,5,$N1, 0, 0);
        $this->SetXY(170,12);
        $this->Cell(13,5,"Hasta: ", 0, 0);
        $this->Cell(5,5,$N2, 0, 0);
        $this->SetXY(170,16);
        $this->Cell(26,6,"Emision: " .$EMISION, 0, 1);
        $this->Cell(26,6,"", 0, 1);
        $this->SetFont('Arial','B',8);
        $this->Cell(35,5,"CHOFER", 0, 0);
        $this->Cell(15,5,"PLACA", 0, 0);
        $this->Cell(22,5,"EMPRESA", 0, 0);
        $this->Cell(31,5,"CARGA", 0, 0);
        $this->Cell(12,5,"PESO", 0, 0);
        $this->Cell(23,5,"FECHA CARGA", 0, 0);
        $this->Cell(40,5,"DESTINO", 0, 1);

    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

$pdf = new PDF('P'); 
//$pdf = new FPDF('P','mm','letter'); //Vertical
$pdf->AliasNbPages();
$pdf->AddPage();   

      //COLOCAR LOS DATOS EN EL INFORME

      $query = "SELECT * FROM ordenes WHERE diae>='$Dia1' and mese='$Mes1' and anoe='$Ano1' and diae<='$Dia2' and mese='$Mes2' and anoe='$Ano2'";
      $result = mysqli_query($conDB, $query);    
      if (!$result) {
          die('Query Error: ' .mysqli_error($conDB));
      }
                                  
      while($row = mysqli_fetch_array($result)) {
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(36,5,$row['chofer'], 0, 0);
        $pdf->Cell(16,5,$row['placa1'], 0, 0);
        $pdf->Cell(22,5,$row['empresa'], 0, 0);
        $pdf->Cell(31,5,$row['carga'], 0, 0);
        $pdf->Cell(12,5,$row['peso_salida'], 0, 0);
        $pdf->Cell(23,5,$row['fecha_entrada'], 0, 0);
        $pdf->Cell(40,5,$row['destino_carga'], 0, 1);
      }


$pdf->Output();

?>