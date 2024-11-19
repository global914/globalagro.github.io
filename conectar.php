<?php

include('./controlador/conDB.php');

date_default_timezone_set('America/Caracas');

$action = $_GET["act"];

switch ($action) {

    case 'Save':
        $Nom2 = $_GET["Nom"];
        $Nci2 = $_GET["Nci"];
        
        $sql = "INSERT INTO alumnos (nombre, cedula) VALUES ('$Nom2', '$Nci2')";
        if (mysqli_query($conDB, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conDB);
        }
        
    break;

    case 'Delete':
        $Nci2 = $_GET["Nci"];
        
        $sql = "DELETE From alumnos where cedula='$Nci2'";
        if (mysqli_query($conDB, $sql)) {
            echo "Delete record successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conDB);
        }
        
    break;

    case 'User': //Buscamos si el usuario es valido (LOGIN)
    
        $N1 = $_GET["Nom"];
        $N2 = $_GET["Cla"];
        $N1=$conDB->real_escape_string($N1);
        $N2=$conDB->real_escape_string($N2);

        $sql = "SELECT indicador,nombre,cedula,nivel,cargo from users where indicador='$N1' and contraseNa='$N2'";
        $q =$conDB->query($sql); // ejecuta peticion
		$rows = array();
		while($r = mysqli_fetch_assoc($q)) // lee cada fila
		{
			$rows[] = $r;
		}
		print json_encode($rows); // envia datos devuelta

        
    break;

    case 'BuscarL2': //Buscamos si el usuario es valido (LOGIN)
    
        $N1 = $_GET["Campo"];

        $sql = "SELECT * from ordenes where placa1='$N1' ORDER BY id ASC";
        $q =$conDB->query($sql); // ejecuta peticion
		$rows = array();
		while($r = mysqli_fetch_assoc($q)) // lee cada fila
		{
			$rows[] = $r;
		}
		print json_encode($rows); // envia datos devuelta

        
    break;

    case 'ActL2': //LOGISTICA 2
    
        $Esta  = $_GET["Esta"];
        $fecha = $_GET["Fecha"];
        $hora  = $_GET["Hora"];
        $id    = $_GET["Id"];
        $diaA   = date("d");
        $mesA   = date("m");
        $anoA   = date("Y");

        $sqlModificar = mysqli_query($conDB, "UPDATE ordenes SET estacionamiento2='$Esta', fechab='$fecha', horab='$hora',diab='$diaA', mesb='$mesA', anob='$anoA' WHERE id='$id'");
            echo json_encode(["success" => 1]);
            exit();

        
    break;

    case 'ActL3': //LOGISTICA 3
    
        $Esta  = $_GET["Esta"];
        $fecha = $_GET["Fecha"];
        $hora  = $_GET["Hora"];
        $id    = $_GET["Id"];
        $diaA   = date("d");
        $mesA   = date("m");
        $anoA   = date("Y");

        $sqlModificar = mysqli_query($conDB, "UPDATE ordenes SET estacionamiento3='$Esta', fechae2='$fecha', horae2='$hora',diae2='$diaA', mese2='$mesA', anoe2='$anoA' WHERE id='$id'");
            echo json_encode(["success" => 1]);
            exit();

        
    break;

    case 'BuscarB':

        $sql = "SELECT * from buques order by descripcion";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();

    break;

    case 'BuscarE':

        $sql = "SELECT * from empresas order by empresa";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();

    break;

    case 'BuscarBo':

        $Buque  = $_GET["Buque"];

        $sql = "SELECT * from bodega where buque='$Buque' ORDER BY id ASC";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();

    break;

    case 'ActCh': //CHEKEADOR CARGA
    
        $Esta  = $_GET["Esta"];
        $fecha = $_GET["Fecha"];
        $hora  = $_GET["Hora"];
        $id    = $_GET["Id"];
        $Buque = $_GET["Buque"];
        $B1    = $_GET["B1"];
        $B2    = $_GET["B2"];
        $B3    = $_GET["B3"];
        $diaA   = date("d");
        $mesA   = date("m");
        $anoA   = date("Y");

        $sqlModificar = mysqli_query($conDB, "UPDATE ordenes SET estacionamiento4='$Esta', fechaem='$fecha', horaem='$hora',diam='$diaA', mesm='$mesA', anom='$anoA',buque='$Buque',bodega1='$B1',bodega2='$B2',bodega3='$B3' WHERE id='$id'");
            echo json_encode(["success" => 1]);
            exit();

        
    break;

    case 'ActDe': //SALIDA Puerto
    
        $Esta     = $_GET["Esta"];
        $fecha    = $_GET["Fecha"];
        $hora     = $_GET["Hora"];
        $id       = $_GET["Id"];
        $Peso     = $_GET["Peso"];
        $Presinto = $_GET["Presinto"];
        $diaA     = date("d");
        $mesA     = date("m");
        $anoA     = date("Y");

        $sqlModificar = mysqli_query($conDB, "UPDATE ordenes SET estacionamiento5='$Esta', fechad='$fecha', horad='$hora',diad='$diaA', mesd='$mesA', anod='$anoA',peso_tara='$Peso',presintos='$Presinto' WHERE id='$id'");
            echo json_encode(["success" => 1]);
            exit();

        
    break;

    case 'Llegada':
        $d    = date("d");
        $m    = date("m");
        $a    = date("Y");
        $sql = "SELECT * from ordenes where diae='$d' and mese='$m' and anoe='$a' order by id";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        $a = 0;
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
                $a = $a + 1;
        }
        if ($a == 0) {
                $a = 1;
                print json_encode($a); // envia datos devuelta
        } else {
                $a = $a + 1;
                print json_encode($a); // envia datos devuelta
        }
    break;

    case 'EscogerB':   //Escoger Buque Orden de Carga

        $Buque  = $_GET["Buque"];

        $sql = "SELECT * from buques where descripcion='$Buque' ORDER BY id ASC";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();

    break;

    case 'EscogerE':   //Escoger Empresa Orden de Carga

        $Empresa  = $_GET["Empresa"];

        $sql = "SELECT * from empresas where empresa='$Empresa' ORDER BY id ASC";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();

    break;

    case 'ActDe': //SALIDA PUERTO
    
        $fecha    = $_GET["Fecha"];
        $hora     = $_GET["Hora"];
        $id       = $_GET["Id"];
        $Foto1    = $_GET["Foto1"];
        $Foto2    = $_GET["Foto2"];
        $Foto3    = $_GET["Foto3"];
        $diaA     = date("d");
        $mesA     = date("m");
        $anoA     = date("Y");
        $Esta     = "SALIDA DE PUERTO";

        $sqlModificar = mysqli_query($conDB, "UPDATE ordenes SET estacionamiento6='$Esta', fecha_salida='$fecha', hora_salida='$hora',dias='$diaA', mess='$mesA', anos='$anoA',foto1='$Foto1',foto2='$Foto2',foto3='$Foto3' WHERE id='$id'");
            echo json_encode(["success" => 1]);
            exit();

        
    break;

    case 'EsperaP':
        $d    = date("d");
        $m    = date("m");
        $a    = date("Y");
        $Esta = "ESPERA PATIO";
        $sql = "SELECT * from ordenes where diae='$d' and mese='$m' and anoe='$a' and estacionamiento1='$Esta' order by id";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        $a = 0;
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
                $a = $a + 1;
        }
        if ($a == 0) {
                $a = 0;
                print json_encode($a); // envia datos devuelta
        } else {
                print json_encode($a); // envia datos devuelta
        }
    break;

    case 'EsperaM':
        $d    = date("d");
        $m    = date("m");
        $a    = date("Y");
        $Esta = "ESPERA MUELLE";
        $sql = "SELECT * from ordenes where diae='$d' and mese='$m' and anoe='$a' and estacionamiento2='$Esta' order by id";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        $a = 0;
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
                $a = $a + 1;
        }
        if ($a == 0) {
                $a = 0;
                print json_encode($a); // envia datos devuelta
        } else {
                print json_encode($a); // envia datos devuelta
        }
    break;

    case 'CargaP':
        $d    = date("d");
        $m    = date("m");
        $a    = date("Y");
        $Esta = "CARGA DE PRODUCTO";
        $sql = "SELECT * from ordenes where diae='$d' and mese='$m' and anoe='$a' and estacionamiento3='$Esta' order by id";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        $a = 0;
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
                $a = $a + 1;
        }
        if ($a == 0) {
                $a = 0;
                print json_encode($a); // envia datos devuelta
        } else {
                print json_encode($a); // envia datos devuelta
        }
    break;

    case 'DespachoP':
        $d    = date("d");
        $m    = date("m");
        $a    = date("Y");
        $Esta = "DESPACHO";
        $sql = "SELECT * from ordenes where diae='$d' and mese='$m' and anoe='$a' and estacionamiento4='$Esta' order by id";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        $a = 0;
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
                $a = $a + 1;
        }
        if ($a == 0) {
                $a = 0;
                print json_encode($a); // envia datos devuelta
        } else {
                print json_encode($a); // envia datos devuelta
        }
    break;

    case 'Pesaje':
        $d    = date("d");
        $m    = date("m");
        $a    = date("Y");
        $Esta = "PESAJE DE SALIDA";
        $sql = "SELECT * from ordenes where diae='$d' and mese='$m' and anoe='$a' and estacionamiento5='$Esta' order by id";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        $a = 0;
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
                $a = $a + 1;
        }
        if ($a == 0) {
                $a = 0;
                print json_encode($a); // envia datos devuelta
        } else {
                print json_encode($a); // envia datos devuelta
        }
    break;

    case 'BuscarL':

        $N1  = $_GET["Campo"];

        $sql = "SELECT * from ordenes where placa1='$N1' order by id";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();

    break;

    case 'BuscarL':

        $N1  = $_GET["Dia1"];
        $N2  = $_GET["Mes1"];
        $N3  = $_GET["Ano1"];
        $N4  = $_GET["Dia2"];
        $N5  = $_GET["Mes2"];
        $N6  = $_GET["Ano2"];

        $sql = "SELECT * from ordenes where diae>='$N1' and mese='$Mes1' and anoe='$Ano1' diae<='$N2' and mese='$Mes2' and anoe='$Ano2' order by id";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();

    break;

//
}


mysqli_close($conDB);
   
?>