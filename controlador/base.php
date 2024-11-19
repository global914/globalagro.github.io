<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include("conDB.php");

date_default_timezone_set('America/Caracas');

$action1 = $_GET["accion1"]; //Recibe la peticion

switch ($action1) {


        //USUARIOS

    case 'ListarU':  // USUARIOS EN GENERAL
        $sql = "SELECT * from users order by cedula";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'ListarUM':  // USUARIOS EN GENERAL POR CEDULA
        $Ced = $_GET["e"];
        $sql = "SELECT * from users where cedula LIKE '%$Ced%'";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;
    
    case 'InsertarU':   // Seleccionamos un solo registro
        $data = json_decode(file_get_contents("php://input"));
        $indicador = $data->indicador;
        $nombre = $data->nombre;
        $cedula = $data->cedula;
        $cargo = $data->cargo;
        $clave = $data->clave;
        $nivel = $data->nivel;

        $indicador = strtoupper($indicador);
        $nombre = strtoupper($nombre);
        $cargo = strtoupper($cargo);


        $sql = "SELECT * from users where cedula ='$cedula'";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows = $r;
        }

        if (count($rows) == 0) {

            $sqlEmpleaados = mysqli_query($conDB, "INSERT INTO users(indicador,contraseNa,nombre,cedula,nivel,cargo) VALUES('$indicador','$clave','$nombre','$cedula','$nivel','$cargo') ");
            echo json_encode(["success" => 1]); //No hay Duplicados
        }else{
            echo json_encode(["success" => 2]); // Hay Duplicados
        }
    break;

    case 'ModificarU':   // Modificamos todos los usuarios
        $data = json_decode(file_get_contents("php://input"));
        $id = (isset($data->id)) ? $data->id : $_GET["e"];
        $indicador = $data->indicador;
        $nombre = $data->nombre;
        $cedula = $data->cedula;
        $cargo = $data->cargo;
        $clave = $data->clave;
        $nivel = $data->nivel;

        $indicador = strtoupper($indicador);
        $nombre = strtoupper($nombre);
        $cedula = strtoupper($cedula);
        $cargo = strtoupper($cargo);
        $clave = strtoupper($clave);
        $nivel = strtoupper($nivel);

        $sqlEmpleaados = mysqli_query($conDB, "UPDATE users SET indicador='$indicador', nombre='$nombre', cedula='$cedula', cargo='$cargo', contraseNa='$clave', nivel='$nivel' WHERE cedula='$cedula'");
        //
        echo json_encode(["success" => 1]);
        exit();
    break;

    case 'EliminarU':   // Eliminar Usuario
        $Var = $_GET['e'];
        $sqlEmpleaados = mysqli_query($conDB, "DELETE FROM users WHERE cedula='$Var'");
        if ($sqlEmpleaados) {
            echo json_encode(["success" => 1]);
            exit();
        } else {
            echo json_encode(["success" => 0]);
        }
    break;

    //TORRES DE CARGA

    case 'ListarT':  // USUARIOS EN GENERAL
        $sql = "SELECT * from torre order by descripcion";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'ListarTM':  // USUARIOS EN GENERAL POR CEDULA
        $Ced = $_GET["e"];
        $sql = "SELECT * from torre where descripcion LIKE '%$Ced%'";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'ListarTM2':  // USUARIOS EN GENERAL POR CEDULA
        $Ced = $_GET["e"];
        $sql = "SELECT * from torre where id = '$Ced'";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'InsertarT':   // Seleccionamos un solo registro
        $data = json_decode(file_get_contents("php://input"));
        $descripcion = $data->descripcion;
        $mecanismo = $data->mecanismo;
        $carga = $data->carga;

        $descripcion = strtoupper($descripcion);
        $mecanismo = strtoupper($mecanismo);
        $carga = strtoupper($carga);


        $sql = "SELECT * from torre where descripcion='$descripcion'";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows = $r;
        }

        if (count($rows) == 0) {

            $sqlEmpleaados = mysqli_query($conDB, "INSERT INTO torre(descripcion,tipo_distribucion,tipo_carga) VALUES('$descripcion','$mecanismo','$carga') ");
            echo json_encode(["success" => 1]); //No hay Duplicados
        }else{
            echo json_encode(["success" => 2]); // Hay Duplicados
        }
    break;

    case 'ModificarT':   // Modificamos todos los usuarios
        $data = json_decode(file_get_contents("php://input"));
        $id = (isset($data->id)) ? $data->id : $_GET["e"];
        $descripcion = $data->descripcion;
        $mecanismo = $data->mecanismo;
        $carga = $data->carga;

        $descripcion = strtoupper($descripcion);
        $mecanismo = strtoupper($mecanismo);
        $carga = strtoupper($carga);

        $sqlEmpleaados = mysqli_query($conDB, "UPDATE torre SET descripcion='$descripcion', tipo_distribucion='$mecanismo', tipo_carga='$carga' WHERE id='$id'");
        //
        echo json_encode(["success" => 1]);
        exit();
    break;

    case 'EliminarT':   // Eliminar Usuario
        $Var = $_GET['e'];
        $sqlEmpleaados = mysqli_query($conDB, "DELETE FROM torre WHERE id='$Var'");
        if ($sqlEmpleaados) {
            echo json_encode(["success" => 1]);
            exit();
        } else {
            echo json_encode(["success" => 0]);
        }
    break;

    //APARCAMIENTO
    case 'ListarA':  // REGISTROS EN GENERAL
        $sql = "SELECT * from aparcamientos order by orden";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'ListarAM':  // BUSQUEDA GENERAL
        $Ced = $_GET["e"];
        $sql = "SELECT * from aparcamientos where descripcion LIKE '%$Ced%'";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'ListarAM2':  // REGISTRO EN GENERAL POR ID
        $Ced = $_GET["e"];
        $sql = "SELECT * from aparcamientos where id = '$Ced'";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'InsertarA':   // Seleccionamos un solo registro
        $data = json_decode(file_get_contents("php://input"));
        $descripcion = $data->descripcion;
        $orden = $data->orden;

        $descripcion = strtoupper($descripcion);

        $sql = "SELECT * from aparcamientos where orden='$orden'";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows = $r;
        }

        if (count($rows) == 0) {

            $sqlEmpleaados = mysqli_query($conDB, "INSERT INTO aparcamientos(descripcion,orden) VALUES('$descripcion','$orden') ");
            echo json_encode(["success" => 1]); //No hay Duplicados
        }else{
            echo json_encode(["success" => 2]); // Hay Duplicados
        }
    break;

    case 'ModificarA':   // Modificamos todos los Registro
        $data = json_decode(file_get_contents("php://input"));
        $id = (isset($data->id)) ? $data->id : $_GET["e"];
        $descripcion = $data->descripcion;
        $orden = $data->orden;

        $descripcion = strtoupper($descripcion);

        $sqlEmpleaados = mysqli_query($conDB, "UPDATE aparcamientos SET descripcion='$descripcion', orden='$orden' WHERE id='$id'");
        //
        echo json_encode(["success" => 1]);
        exit();
    break;

    case 'EliminarA':   // Eliminar Registro
        $Var = $_GET['e'];
        $sqlEmpleaados = mysqli_query($conDB, "DELETE FROM aparcamientos WHERE id='$Var'");
        if ($sqlEmpleaados) {
            echo json_encode(["success" => 1]);
            exit();
        } else {
            echo json_encode(["success" => 0]);
        }
    break;

    //BUQUES
    case 'ListarB':  // REGISTROS EN GENERAL
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

    case 'ListarBM':  // REGISTRO EN GENERAL POR DESCRIPCION O ID
        $Ced = $_GET["e"];
        $sql = "SELECT * from buques where descripcion LIKE '%$Ced%'";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'ListarBM2':  // DATOS PARA MODIFICAR UN REGISTRO
        $Ced = $_GET["e"];
        $sql = "SELECT * from buques where id = '$Ced'";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'ListarBM3':  // DATOS PARA MODIFICAR UN REGISTRO
        $Ced = $_GET["e"];
        $sql = "SELECT * from buques where descripcion = '$Ced'";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'CboTorreC':  // LLENAR COMBO TORRES DE CARGA EN BUQUES
        $sql = "SELECT * from torre order by descripcion";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'ListarTE':  // REGISTRO EN GENERAL POR CEDULA
        $Ced = $_GET["e"];
        $sql = "SELECT * from torre where descripcion = '$Ced'";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'InsertarM':   // Seleccionamos un solo registro
        $data = json_decode(file_get_contents("php://input"));
        $descripcion = $data->descripcion;
        $carga = $data->carga;
        $torre = $data->torre;
        $muelle = $data->muelle;

        $descripcion = strtoupper($descripcion);
        $torre = strtoupper($torre);
        $muelle = strtoupper($muelle);
        $carga = strtoupper($carga);


        $sql = "SELECT * from buques where descripcion='$descripcion'";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows = $r;
        }

        if (count($rows) == 0) {

            $sqlInsertar = mysqli_query($conDB, "INSERT INTO buques(descripcion,carga,torre,muelle) VALUES('$descripcion','$carga','$torre','$muelle') ");
            echo json_encode(["success" => 1]); //No hay Duplicados
        }else{
            echo json_encode(["success" => 2]); // Hay Duplicados
        }
    break;

    case 'ModificarTB':   // Modificamos todos los Registro
        $data = json_decode(file_get_contents("php://input"));
        $id = (isset($data->id)) ? $data->id : $_GET["e"];
        $descripcion = $data->descripcion;
        $carga = $data->carga;
        $torre = $data->torre;
        $muelle = $data->muelle;

        $descripcion = strtoupper($descripcion);
        $torre = strtoupper($torre);
        $muelle = strtoupper($muelle);
        $carga = strtoupper($carga);

        $sqlModificar = mysqli_query($conDB, "UPDATE buques SET descripcion='$descripcion', carga='$carga', torre='$torre', muelle='$muelle' WHERE id='$id'");
        //
        echo json_encode(["success" => 1]);
        exit();
    break;

    case 'EliminarTB':   // Eliminar Registro
        $Var = $_GET['e'];
        $sqlEmpleaados = mysqli_query($conDB, "DELETE FROM buques WHERE id='$Var'");
        if ($sqlEmpleaados) {
            echo json_encode(["success" => 1]);
            exit();
        } else {
            echo json_encode(["success" => 0]);
        }
    break;

    //ORDENES DE CARGA
    case 'ListarO':  // REGISTROS EN GENERAL
        $sql = "SELECT * FROM ordenes ORDER BY id DESC";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break; 

    case 'ListarOM':  // REGISTRO EN GENERAL POR DESCRIPCION O ID
        $Ced = $_GET["e"];
        $sql = "SELECT * from ordenes where orden_carga LIKE '%$Ced%' ORDER BY id DESC";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'ListarBM5':  // REGISTRO EN GENERAL POR DESCRIPCION O ID
        $Ced = $_GET["e"];
        $sql = "SELECT * from ordenes where placa1 LIKE '%$Ced%' ORDER BY id DESC";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'ListarBM7':  // REGISTRO EN GENERAL POR DESCRIPCION O ID
        $Ced = $_GET["e"];
        $sql = "SELECT * from ordenes where placa1 = '$Ced' ORDER BY id DESC";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'NroOrden':

        srand(time());
        //generamos un número aleatorio
        $numero_aleatorio = rand(1, 1000000);
        
        if ($numero_aleatorio < 1) {
            $numero_aleatorio = rand(1, 1000000); 
        }
        
        $sql = "SELECT * from ordenes where orden_carga='$numero_aleatorio' order by id";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        $a = 0;
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
                $a = $a + 1;
        }
        if ($a == 0) {
                $a = $numero_aleatorio;
                print json_encode($a); // envia datos devuelta
        } else {
                $a = ($numero_aleatorio * 2) / 100;
                print json_encode($a); // envia datos devuelta
        }
        
    break;

    case 'OrdenLL':
        $d = $_GET["d"];
        $m = $_GET["m"];
        $a = $_GET["a"];

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

    case 'ListarBM3':  // REGISTRO EN GENERAL POR DESCRIPCION O ID
        $Ced = $_GET["e"];
        $sql = "SELECT * from buques where descripcion='$Ced'";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'ListarBM4':  // REGISTRO EN GENERAL POR DESCRIPCION O ID
        $Ced = $_GET["e"];
        $sql = "SELECT * from ordenes where placa1='$Ced' ORDER BY id DESC";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'InsertarOC':   // Seleccionamos un solo registro
        $data = json_decode(file_get_contents("php://input"));
        $chofer          = $data->chofer;
        $cedulac         = $data->cedulac;
        $empresa         = $data->empresa;
        $rif             = $data->rif;
        $ayudante        = $data->ayudante;
        $cedulaa         = $data->cedulaa;
        $buque           = $data->buque;
        $muelle          = $data->muelle;
        $torre           = $data->torre;
        $carga           = $data->carga;
        $destino         = $data->destino;
        $placau          = $data->placau;
        $placac          = $data->placac;
        $estacionamiento = $data->estacionamiento;
        $llegada         = $data->llegada;
        $orden           = $data->orden;
        $fechae          = $data->fechae;
        $horae           = $data->horae;
        $pesoo           = $data->pesoo; 
        $diaA            = date("d");
        $mesA            = date("m");
        $anoA            = date("Y");

        $chofer          = strtoupper($chofer);
        $empresa         = strtoupper($empresa);
        $ayudante        = strtoupper($ayudante);
        $buque           = strtoupper($buque);
        $rif             = strtoupper($rif);
        $muelle          = strtoupper($muelle);
        $torre           = strtoupper($torre);
        $carga           = strtoupper($carga);
        $destino         = strtoupper($destino);
        $placau          = strtoupper($placau);
        $placac          = strtoupper($placac);
        $estacionamiento = strtoupper($estacionamiento);

        $sql = "SELECT * from ordenes where placa1='$placau' and diae='$diaA' and mese='$mesA' and anoe='$anoA'";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows = $r;
        }

        if (count($rows) == 0) {

            $sqlInsertar = mysqli_query($conDB, "INSERT INTO ordenes(chofer,ci,empresa,rif,ayudante,ci_ayudante,buque,muelle,torre,carga,destino_carga,placa1,placa2,estacionamiento1,nro_llegada,orden_carga,fecha_entrada,hora_entrada,diae,mese,anoe,peso_orden) VALUES ('$chofer','$cedulac','$empresa','$rif','$ayudante','$cedulaa','$buque','$muelle','$torre','$carga','$destino','$placau','$placac','$estacionamiento','$llegada','$orden','$fechae','$horae','$diaA','$mesA','$anoA','$pesoo') ");
            echo json_encode(["success" => 1]); //No hay Duplicados
        }else{
            echo json_encode(["success" => 2]); // Hay Duplicados
        }
    break;

    case 'ListarBM6':  // REGISTRO EN GENERAL POR DESCRIPCION O ID
        $Ced = $_GET["e"];
        $sql = "SELECT * from ordenes where id='$Ced' ORDER BY id DESC";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'ModificarOC':   // Modificamos todos los Registro
        $data = json_decode(file_get_contents("php://input"));
        $id = (isset($data->id)) ? $data->id : $_GET["e"];
        $chofer          = $data->chofer;
        $cedulac         = $data->cedulac;
        $empresa         = $data->empresa;
        $rif             = $data->rif;
        $ayudante        = $data->ayudante;
        $cedulaa         = $data->cedulaa;
        $buque           = $data->buque;
        $muelle          = $data->muelle;
        $torre           = $data->torre;
        $carga           = $data->carga;
        $destino         = $data->destino;
        $placau          = $data->placau;
        $placac          = $data->placac;
        $estacionamiento = $data->estacionamiento;
        $llegada         = $data->llegada;
        
        $chofer          = strtoupper($chofer);
        $empresa         = strtoupper($empresa);
        $ayudante        = strtoupper($ayudante);
        $buque           = strtoupper($buque);
        $rif             = strtoupper($rif);
        $muelle          = strtoupper($muelle);
        $torre           = strtoupper($torre);
        $carga           = strtoupper($carga);
        $destino         = strtoupper($destino);
        $placau          = strtoupper($placau);
        $placac          = strtoupper($placac);
        $estacionamiento = strtoupper($estacionamiento);

        $sqlModificar = mysqli_query($conDB, "UPDATE ordenes SET chofer='$chofer', ci='$cedulac', empresa='$empresa', rif='$rif', ayudante='$ayudante', ci_ayudante='$cedulaa', buque='$buque', muelle='$muelle', torre='$torre', carga='$carga', destino_carga='$destino', placa1='$placau', placa2='$placac', estacionamiento1='$estacionamiento', nro_llegada='$llegada' WHERE id='$id'");
        
        echo json_encode(["success" => 1]);
        exit();
    break;

    case 'EliminarOC':   // Eliminar Registro
        $Var = $_GET['e'];
        $sqlEmpleaados = mysqli_query($conDB, "DELETE FROM ordenes WHERE id='$Var'");
        if ($sqlEmpleaados) {
            echo json_encode(["success" => 1]);
            exit();
        } else {
            echo json_encode(["success" => 0]);
        }
    break;

    //BASUCLA

    case 'ModificarBC':   // Modificamos todos los Registro
        $data = json_decode(file_get_contents("php://input"));
        $id = (isset($data->id)) ? $data->id : $_GET["e"];
        $estacionamiento = $data->estacionamiento;
        $fechae          = $data->fechae;
        $horae           = $data->horae;
        $peso1           = $data->peso1;
        $peso2           = $data->peso2;
        $diaA = date("d");
        $mesA = date("m");
        $anoA = date("Y");

        $estacionamiento = strtoupper($estacionamiento);

        $sqlModificar = mysqli_query($conDB, "UPDATE ordenes SET estacionamiento2='$estacionamiento', peso_entrada='$peso1', peso_orden='$peso2', bascula_entrada='$fechae', horab_entrada='$horae', diab='$diaA', mesb='$mesA', anob='$anoA' WHERE id='$id'");
        
        echo json_encode(["success" => 1]);
        exit();
    break;

    //CARGA

    case 'ModificarCC1':   // Modificamos todos los Registro
        $data = json_decode(file_get_contents("php://input"));
        $id = (isset($data->id)) ? $data->id : $_GET["e"];
        $fechae  = $data->fechae;
        $horae   = $data->horae;
        $diaA = date("d");
        $mesA = date("m");
        $anoA = date("Y");


        $sqlModificar = mysqli_query($conDB, "UPDATE ordenes SET fecham_entrada='$fechae', horam_entrada='$horae', diam='$diaA', mesm='$mesA', anom='$anoA' WHERE id='$id'");
        
        echo json_encode(["success" => 1]);
        exit();
    break;

    case 'ModificarCC2':   // Modificamos todos los Registro
        $data = json_decode(file_get_contents("php://input"));
        $id = (isset($data->id)) ? $data->id : $_GET["e"];
        $fechae          = $data->fechae;
        $horae           = $data->horae;
        $estacionamiento = $data->estacionamiento;
        $diaA = date("d");
        $mesA = date("m");
        $anoA = date("Y");


        $sqlModificar = mysqli_query($conDB, "UPDATE ordenes SET estacionamiento3='$estacionamiento', fecham_salida='$fechae', horam_salida='$horae', diam='$diaA', mesm='$mesA', anom='$anoA' WHERE id='$id'");
        
        echo json_encode(["success" => 1]);
        exit();
    break;

    //BASCULA FINAL
    case 'ModificarCC3':   // Modificamos todos los Registro
        $data = json_decode(file_get_contents("php://input"));
        $id = (isset($data->id)) ? $data->id : $_GET["e"];
        $fechae          = $data->fechae;
        $horae           = $data->horae;
        $estacionamiento = $data->estacionamiento;
        $peso            = $data->pesof;
        $diaA = date("d");
        $mesA = date("m");
        $anoA = date("Y");

        if ($estacionamiento == "Trasegado") {

        }else {

            $sqlModificar = mysqli_query($conDB, "UPDATE ordenes SET peso_salida='$peso', estacionamiento4='$estacionamiento', bascula_salida='$fechae', horab_salida='$horae', diam='$diaA', mesm='$mesA', anom='$anoA' WHERE id='$id'");
            
            echo json_encode(["success" => 1]);
            exit();
        }
    break;

    //TRASEGADO
    case 'ModificarCC4':   // Modificamos todos los Registro
        $data = json_decode(file_get_contents("php://input"));
        $id = (isset($data->id)) ? $data->id : $_GET["e"];
        $placa    = $data->placa;
        $orden    = $data->orden;
        $chofer   = $data->chofer;
        $empresa  = $data->empresa;
        $carga    = $data->carga;
        $peso     = $data->peso;
        $pesoo     = $data->pesoo;
        $hora     = $data->hora;
        $diaA = date("d");
        $mesA = date("m");
        $anoA = date("Y");
        $fechaT = $diaA ."/" .$mesA ."/" .$anoA;
        
        
        $sqlInsertar = mysqli_query($conDB, "INSERT INTO trasegado(placa,orden,chofer,empresa,carga,pesoo,peso1,fechat,horat,diat,mest,anot)
         VALUES ('$placa','$orden','$chofer','$empresa','$carga','$pesoo','$peso','$fechaT','$hora','$diaA','$mesA','$anoA') ");     
            echo json_encode(["success" => 1]);
            exit();
        
    break;

    case 'ListarTT1':  // REGISTRO EN GENERAL POR DESCRIPCION O ID
        $Ced  = $_GET["e"];
        $diaA = date("d");
        $mesA = date("m");
        $anoA = date("Y");
       

        //Selecciono o Busco un registro previo para no grabar duplicados
        $query = "SELECT * FROM ordenes WHERE id='$Ced' ORDER BY id DESC";
        $result = mysqli_query($conDB, $query);    
        if (!$result) {
            die('Query Error: ' .mysqli_error($conDB));
        }
                                    
        while($row = mysqli_fetch_array($result)) {
            
                $Codigo = $row['placa1'];
        }

        $sql = "SELECT * from trasegado where placa='$Codigo' and diat='$diaA' and mest='$mesA' and anot='$anoA' ORDER BY id DESC";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        if (empty($rows)) {
            print json_encode("1"); // envia datos devuelta
        }else{
            print json_encode($rows); // envia datos devuelta
            exit();
        }
    break;

     //ACTUALIZAR TRASEGADO
    case 'TrasegadoC2':   // Modificamos todos los Registro
        $data = json_decode(file_get_contents("php://input"));
        $id = (isset($data->id)) ? $data->id : $_GET["e"];
        $placa = $data->placa;
        $peso  = $data->peso;
        $diaA  = date("d");
        $mesA  = date("m");
        $anoA  = date("Y");
        $FechaS = $diaA ."-" .$mesA ."-" .$anoA;
        $HoraS = date('H:m:s');

            $sqlModificar = mysqli_query($conDB, "UPDATE trasegado SET peso2='$peso' WHERE placa='$placa' and diat='$diaA' and mest='$mesA' and anot='$anoA'");
            $sqlModificar = mysqli_query($conDB, "UPDATE ordenes SET peso_salida='$peso', bascula_salida='$FechaS', horab_salida='$HoraS', dias='$diaA', mess='$mesA', anos='$anoA' WHERE id='$id'");
            
            echo json_encode(["success" => 1]);
            exit();
       
    break;

     //SALIDA DE VEHICULOS GRABAR
    case 'SalidaU':   // Modificamos todos los Registro
        $data = json_decode(file_get_contents("php://input"));
        $id = (isset($data->id)) ? $data->id : $_GET["e"];
        $fechas = $data->fechas;
        $horas  = $data->horas;
        $foto1  = $data->foto1;
        $foto2  = $data->foto2;
        $foto3  = $data->foto3;
        $foto4  = $data->foto4;
        $diaA   = date("d");
        $mesA   = date("m");
        $anoA   = date("Y");
        
        $sqlModificar = mysqli_query($conDB, "UPDATE ordenes SET fecha_salida='$fechas', hora_salida='$horas', foto1='$foto1', foto2='$foto2', foto3='$foto3', foto4='$foto4' WHERE id='$id'");
            
            echo json_encode(["success" => 1]);
            exit();
       
    break;
    
    case 'Datos1':   // Modificamos todos los Registro
        $data = json_decode(file_get_contents("php://input"));
        $diaA  = date("d");
        $mesA  = date("m");
        $anoA  = date("Y");

        $query  = "SELECT * FROM ordenes where diae='$diaA' and mese='$mesA' and anoe='$anoA' and estacionamiento1='ESPERA PATIO'";
        $result = mysqli_query($conDB, $query);    
        $rows   = mysqli_num_rows($result);

        echo json_encode($rows);
        exit();
       
    break;

    case 'Datos2':   // Modificamos todos los Registro
        $data = json_decode(file_get_contents("php://input"));
        $diaA  = date("d");
        $mesA  = date("m");
        $anoA  = date("Y");

        $query  = "SELECT * FROM ordenes where diae='$diaA' and mese='$mesA' and anoe='$anoA' and estacionamiento2='ESPERA MUELLE'";
        $result = mysqli_query($conDB, $query);    
        $rows   = mysqli_num_rows($result);

        echo json_encode($rows);
        exit();
       
    break;
 
    case 'Datos3':   // Modificamos todos los Registro
        $data = json_decode(file_get_contents("php://input"));
        $diaA  = date("d");
        $mesA  = date("m");
        $anoA  = date("Y");

        $query  = "SELECT * FROM ordenes where diae='$diaA' and mese='$mesA' and anoe='$anoA' and estacionamiento3='CARGA DE PRODUCTO'";
        $result = mysqli_query($conDB, $query);    
        $rows   = mysqli_num_rows($result);

        echo json_encode($rows);
        exit();
       
    break;

    case 'Datos4':   // Modificamos todos los Registro
        $data = json_decode(file_get_contents("php://input"));
        $diaA  = date("d");
        $mesA  = date("m");
        $anoA  = date("Y");

        $query  = "SELECT * FROM ordenes where diae='$diaA' and mese='$mesA' and anoe='$anoA' and estacionamiento4='DESPACHO'";
        $result = mysqli_query($conDB, $query);    
        $rows   = mysqli_num_rows($result);

        echo json_encode($rows);
        exit();
       
    break;

    case 'Datos5':   // Modificamos todos los Registro
        $data = json_decode(file_get_contents("php://input"));
        $diaA  = date("d");
        $mesA  = date("m");
        $anoA  = date("Y");

        $query  = "SELECT * FROM ordenes where diae='$diaA' and mese='$mesA' and anoe='$anoA' and estacionamiento5='PESAJE DE SALIDA'";
        $result = mysqli_query($conDB, $query);    
        $rows   = mysqli_num_rows($result);

        echo json_encode($rows);
        exit();
       
    break;

    case 'ListarCI':  // REGISTRO EN GENERAL POR DESCRIPCION O ID
        $Ced = $_GET["e"];
        $sql = "SELECT * from ordenes where ci LIKE '%$Ced%' ORDER BY id DESC";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'Salvar1':   // Seleccionamos un solo registro
        $data = json_decode(file_get_contents("php://input"));
        $placa = $data->placa;
        $Codigo = "";
        $Chofer = "";
        $Empresa= "";
        $Carga = "";
        $Orden = "";

        $query2 = "SELECT * FROM ordenes WHERE placa1='$placa' order by id ASC";
        $result2 = mysqli_query($conDB, $query2);    
        if (!$result2) {
            die('Query Error: ' .mysqli_error($conDB));
        }
                                    
        while($row2 = mysqli_fetch_array($result2)) {
            
                $Chofer  = $row2['chofer'];
                $Empresa = $row2['empresa'];
                $Carga   = $row2['carga'];
                $Orden   = $row2['orden_carga'];


        }

        //Selecciono o Busco un registro previo para no grabar duplicados
        $query = "SELECT * FROM temp_placa WHERE placa='$placa'";
        $result = mysqli_query($conDB, $query);    
        if (!$result) {
            die('Query Error: ' .mysqli_error($conDB));
        }
                                    
        while($row = mysqli_fetch_array($result)) {
            
                $Codigo = $row['placa'];
        }

        if ($Codigo !== "") {
            echo json_encode(["success" => "NO"]); //No hay Duplicados
            exit();
        }else {

            //CANTIDAD DE REGISTRO
            $query1  = "SELECT * FROM temp_placa";
            $result1 = mysqli_query($conDB, $query1);    
            $rows1   = mysqli_num_rows($result1) + 1;

            if ($rows1 < 12) {
                $sqlInsertar = mysqli_query($conDB, "INSERT INTO temp_placa(placa,chofer,empresa,carga,orden) VALUES ('$placa','$Chofer','$Empresa','$Carga','$Orden') ");
            }else{

            }

            echo json_encode(["success" => $rows1]); //No hay Duplicados

        }

        
    break;

    case 'Notificacion':  //Sacar el nummero de notificacion

        //CANTIDAD DE REGISTRO
        $query1  = "SELECT * FROM temp_placa";
        $result1 = mysqli_query($conDB, $query1);    
        $rows1   = mysqli_num_rows($result1);

        echo json_encode(["success" => $rows1]); //No hay Duplicados
    
    break;

    case 'ListarTemp': //Listar Temp Registros
        
        $sql = "SELECT * FROM temp_placa ORDER BY id ASC";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();

    break;

    case 'EliminarTemp':   // Eliminar Registro
        $Var = $_GET['e'];
        $sqlEmpleaados = mysqli_query($conDB, "DELETE FROM temp_placa WHERE placa='$Var'");
        if ($sqlEmpleaados) {
            echo json_encode(["success" => 1]);
            exit();
        } else {
            echo json_encode(["success" => 0]);
        }
    break;

    case 'EliminarTemp2':   // Eliminar Registro
        
        $sqlEmpleaados = mysqli_query($conDB, "DELETE FROM temp_placa");
        if ($sqlEmpleaados) {
            echo json_encode(["success" => 1]);
            exit();
        } else {
            echo json_encode(["success" => 0]);
        }
    break;

    case 'ListarSAL':  // REGISTRO EN GENERAL POR DESCRIPCION O ID
        $Ced = $_GET["e"];
        $diaA  = date("d");
        $mesA  = date("m");
        $anoA  = date("Y");

        $FechaE = $diaA ."-" .$mesA ."-" .$anoA;

        $query = "SELECT * from ordenes where id='$Ced'";
        //Selecciono o Busco un registro previo para no grabar duplicados
        $result = mysqli_query($conDB, $query);    
        if (!$result) {
            die('Query Error: ' .mysqli_error($conDB));
        }
                                    
        while($row = mysqli_fetch_array($result)) {
            
                $Codigo = $row['fecham_entrada'];
        }

        if ($Codigo == "") {
            echo json_encode(["success" => 2]); //SI hay Duplicados
            exit();
        }else {
            echo json_encode(["success" => 1]); //NO hay Duplicados
        }
        exit();
    break;

    case 'ListarTRAS':  // REGISTRO EN GENERAL POR DESCRIPCION O ID
        $Ced = $_GET["e1"];
        $diaA  = date("d");
        $mesA  = date("m");
        $anoA  = date("Y");
        $Codigo = "";

        $FechaE = $diaA ."/" .$mesA ."/" .$anoA;

        $query    = "SELECT * from trasegado where placa='$Ced' and fechat='$FechaE'";
        //$query  = "SELECT * FROM trasegado where diat='$diaA' and mest='$mesA' and anot='$anoA'";
        //Selecciono o Busco un registro previo para no grabar duplicados
        $result = mysqli_query($conDB, $query);    
        if (!$result) {
            die('Query Error: ' .mysqli_error($conDB));
        }
                                    
        while($row = mysqli_fetch_array($result)) {
            
                $Codigo = $row['placa'];
        }

        if ($Codigo == "") {
            echo json_encode(["success" => 1]); //SI hay Duplicados
            exit();
        }else {
            echo json_encode(["success" => 2]); //NO hay Duplicados
        }
        exit();
    break;

    case 'ListarBill':  // REGISTRO EN GENERAL POR DESCRIPCION O ID
        $Ced = $_GET["e"];
        $sql = "SELECT * from bol where id_buque='$Ced' ORDER BY id DESC";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'ListarBill2':  // REGISTRO EN GENERAL POR DESCRIPCION O ID
        $Ced = $_GET["e"];
        $sql = "SELECT * from bol where id='$Ced' ORDER BY id DESC";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'SalvarBill':  // SALVAR IMO

        $data = json_decode(file_get_contents("php://input"));
        $buque  = $data->buque;
        $numero = $data->numero;
        $rubro  = $data->rubro;
        $consig = $data->consig;
        $peso   = $data->peso;
        $pais   = $data->pais;
        $imo    = $data->imo;
        $id_buq = $data->id_buq;
        $fechaa = $data->fechaa;

        $rubro  = strtoupper($rubro);
        $consig = strtoupper($consig);
        $pais   = strtoupper($pais);


        $sql = "SELECT * from bol where fecha_atraque ='$fechaa' and buque='$buque'";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows = $r;
        }

        if (count($rows) == 0) {

            $sqlEmpleaados = mysqli_query($conDB, "INSERT INTO bol(buque,numero,rubro,consignatario,peso_asignado,pais_origen,imo,id_buque,fecha_atraque) VALUES('$buque','$numero','$rubro','$consig','$peso','$pais','$imo','$id_buq','$fechaa') ");
            echo json_encode(["success" => 1]); //No hay Duplicados
        }else{
            echo json_encode(["success" => 2]); // Hay Duplicados
        }
        
    break;

    case 'EliminarBill':  // SALVAR IMO
        $Var = $_GET['e'];
        $sqlEmpleaados = mysqli_query($conDB, "DELETE FROM bol WHERE id='$Var'");
        if ($sqlEmpleaados) {
            echo json_encode(["success" => 1]);
            exit();
        } else {
            echo json_encode(["success" => 0]);
        }
    break;

    case 'ActualizarBill':  // SALVAR IMO
        $data = json_decode(file_get_contents("php://input"));
        $id = (isset($data->id)) ? $data->id : $_GET["e"];
        $buque  = $data->buque;
        $numero = $data->numero;
        $rubro  = $data->rubro;
        $consig = $data->consig;
        $peso   = $data->peso;
        $pais   = $data->pais;
        $imo    = $data->imo;
        $id_buq = $data->id_buq;
        $fechaa = $data->fechaa;
        $fechaz = $data->fechaz;

        $rubro  = strtoupper($rubro);
        $consig = strtoupper($consig);
        $pais   = strtoupper($pais);

        $sqlModificar = mysqli_query($conDB, "UPDATE bol SET buque='$buque', numero='$numero', consignatario='$consig', rubro='$rubro', peso_asignado='$peso', pais_origen='$pais', imo='$imo', fecha_atraque='$fechaa', fecha_zarpe='$fechaz' WHERE id='$id'");
        //
            
            echo json_encode(["success" => 1]);
            exit();
    break;

    case 'ListarBodega':  // REGISTRO EN GENERAL POR DESCRIPCION O ID
        $Ced = $_GET["e"];
        $sql = "SELECT * from bodega where id_buque='$Ced' ORDER BY id DESC";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'ListarBodega2':  // REGISTRO EN GENERAL POR DESCRIPCION O ID
        $Ced = $_GET["e"];
        $sql = "SELECT * from bol where id_buque='$Ced' ORDER BY id DESC";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'ListarBodega3':  // REGISTRO EN GENERAL POR DESCRIPCION O ID
        $Ced = $_GET["e"];
        $sql = "SELECT * from bodega where id='$Ced' ORDER BY id DESC";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'Salvar_Bodega':  // SALVAR BODEGA

        $data = json_decode(file_get_contents("php://input"));
        $buque     = $data->buque;
        $peso      = $data->peso;
        $bodega    = $data->bodega;
        $producto  = $data->producto;
        $empresa   = $data->empresa;
        $cantidad  = $data->cantidad;
        $id_buque  = $data->id_buque;
        $diaA   = date("d");
        $mesA   = date("m");
        $anoA   = date("Y");
        $FechaS = $diaA ."-" .$mesA ."-" .$anoA;

        $bodega    = strtoupper($bodega);
        $producto  = strtoupper($producto);
        $empresa   = strtoupper($empresa);


        $sql = "SELECT * from bodega where empresa ='$empresa' and fecha='$FechaS' and producto='$producto'";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows = $r;
        }

        if (count($rows) == 0) {

            $sqlEmpleaados = mysqli_query($conDB, "INSERT INTO bodega(id_buque,buque,bodega,producto,empresa,cantidad,peso_neto,fecha,dia,mes,ano) VALUES('$id_buque','$buque','$bodega','$producto','$empresa','$cantidad','$peso','$FechaS','$diaA','$mesA','$anoA') ");
            echo json_encode(["success" => 1]); //No hay Duplicados
        }else{
            echo json_encode(["success" => 2]); // Hay Duplicados
        }

        
    break;

    case 'EliminarBodega':  // SALVAR IMO
        $Var = $_GET['e'];
        $sqlEmpleaados = mysqli_query($conDB, "DELETE FROM bodega WHERE id='$Var'");
        if ($sqlEmpleaados) {
            echo json_encode(["success" => 1]);
            exit();
        } else {
            echo json_encode(["success" => 0]);
        }
    break;

    case 'ActualizarBodega':  // SALVAR IMO
        $data = json_decode(file_get_contents("php://input"));
        $id = (isset($data->id)) ? $data->id : $_GET["e"];;
        $buque     = $data->buque;
        $peso      = $data->peso;
        $bodega    = $data->bodega;
        $producto  = $data->producto;
        $empresa   = $data->empresa;
        $cantidad  = $data->cantidad;
        $id_buque  = $data->id_buque;

        $bodega    = strtoupper($bodega);
        $producto  = strtoupper($producto);
        $empresa   = strtoupper($empresa);


        $sqlModificar = mysqli_query($conDB, "UPDATE bodega SET buque='$buque', id_buque='$id_buque', bodega='$bodega', producto='$producto', empresa='$empresa', cantidad='$cantidad', peso_neto='$peso' WHERE id='$id'");
            echo json_encode(["success" => 1]);
            exit();
    break;

    //EMPRESAS
    case 'ListarEmpresas':  // REGISTRO EN GENERAL POR DESCRIPCION O ID
        $sql = "SELECT * from empresas ORDER BY empresa";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'ListarEmpresas2':  // REGISTRO EN GENERAL POR DESCRIPCION O ID
        $Ced = $_GET["e"];
        $sql = "SELECT * from empresas where rif='$Ced' ORDER BY empresa ASC";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'ListarEmpresas3':  // REGISTRO EN GENERAL POR DESCRIPCION O ID
        $Ced = $_GET["e"];
        $sql = "SELECT * from empresas where id='$Ced' ORDER BY empresa ASC";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'ListarEmpresas4':  // REGISTRO EN GENERAL POR DESCRIPCION O ID
        $Ced = $_GET["e"];
        $sql = "SELECT * from empresas where empresa='$Ced'";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

    case 'InsertarEmpresa':  // SALVAR EMPRESA

        $data = json_decode(file_get_contents("php://input"));
        $empresa        = $data->empresa;
        $rif            = $data->rif;
        $direccion      = $data->direccion;
        $representante  = $data->representante;
        $ci             = $data->ci;

        $empresa       = strtoupper($empresa);
        $rif           = strtoupper($rif);
        $direccion     = strtoupper($direccion);
        $representante = strtoupper($representante);


        $sql = "SELECT * from empresas where rif ='$rif'";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows = $r;
        }

        if (count($rows) == 0) {

            $sqlEmpleaados = mysqli_query($conDB, "INSERT INTO empresas(empresa,rif,direccion,representante,ci) VALUES('$empresa','$rif','$direccion','$representante','$ci') ");
            echo json_encode(["success" => 1]); //No hay Duplicados
        }else{
            echo json_encode(["success" => 2]); // Hay Duplicados
        }

        
    break;

    case 'EliminarEmpresa':  // ELIMINAR EMPRESA
        $Var = $_GET['e'];
        $sqlEmpleaados = mysqli_query($conDB, "DELETE FROM empresas WHERE id='$Var'");
        if ($sqlEmpleaados) {
            echo json_encode(["success" => 1]);
            exit();
        } else {
            echo json_encode(["success" => 0]);
        }
    break;

    case 'ActualizarEmpresa':  // SALVAR IMO
        $data = json_decode(file_get_contents("php://input"));
        $empresa        = $data->empresa;
        $rif            = $data->rif;
        $direccion      = $data->direccion;
        $representante  = $data->representante;
        $ci             = $data->ci;

        $empresa       = strtoupper($empresa);
        $rif           = strtoupper($rif);
        $direccion     = strtoupper($direccion);
        $representante = strtoupper($representante);

        $sqlModificar = mysqli_query($conDB, "UPDATE empresas SET empresa='$empresa', direccion='$direccion', representante='$representante', ci='$ci' WHERE rif='$rif'");
            echo json_encode(["success" => 1]);
            exit();
    break;

    //ESTACIONAMIENTO 1
    case 'ActualizarEsta1':  // MODIFICAR ESTACIONAMIENTO
        $data = json_decode(file_get_contents("php://input"));
        $Esta  = $data->estacionamiento;
        $id    = $data->id;
        $fecha = $data->fecha;
        $hora  = $data->hora;
        $diaA  = $data->diaA;
        $mesA  = $data->mesA;
        $anoA  = $data->anoA;            

        $Esta    = strtoupper($Esta);

        $sqlModificar = mysqli_query($conDB, "UPDATE ordenes SET estacionamiento2='$Esta', fechab='$fecha', horab='$hora',diab='$diaA', mesb='$mesA', anob='$anoA' WHERE id='$id'");
            echo json_encode(["success" => 1]);
            exit();
    break;

    //ESTACIONAMIENTO 3
    case 'ActualizarEsta2':  // ESPERA MUELLE
        $data = json_decode(file_get_contents("php://input"));
        $Esta  = $data->estacionamiento;
        $id    = $data->id;
        $fecha = $data->fecha;
        $hora  = $data->hora;
        $diaA  = $data->diaA;
        $mesA  = $data->mesA;
        $anoA  = $data->anoA;        

        $Esta    = strtoupper($Esta);

        $sqlModificar = mysqli_query($conDB, "UPDATE ordenes SET estacionamiento3='$Esta', fechaE2='$fecha', horaE2='$hora',diaE2='$diaA', mesE2='$mesA', anoE2='$anoA'  WHERE id='$id'");
            echo json_encode(["success" => 1]);
            exit();
    break;

    //ESTACIONAMIENTO 3 / CARGA DE PRODUCTO
    case 'ActualizarEsta3':  // MODIFICAR ESTACIONAMIENTO5
        $data = json_decode(file_get_contents("php://input"));
        $Esta  = $data->estacionamiento;
        $id    = $data->id;
        $fecha = $data->fecha;
        $hora  = $data->hora;
        $diaA  = $data->diaA;
        $mesA  = $data->mesA;
        $anoA  = $data->anoA;
        $bod1  = $data->bodega1;  
        $bod2  = $data->bodega2;  
        $bod3  = $data->bodega3;          

        $Esta    = strtoupper($Esta);

        $sqlModificar = mysqli_query($conDB, "UPDATE ordenes SET estacionamiento4='$Esta', fecham='$fecha', horam='$hora',diam='$diaA', mesm='$mesA', anom='$anoA', bodega1='$bod1', bodega2='$bod2', bodega3='$bod3'  WHERE id='$id'");
            echo json_encode(["success" => 1]);
            exit();
    break;

    //ESTACIONAMIENTO 3 / CARGA DE PRODUCTO
    case 'ActualizarEsta4':  // MODIFICAR ESTACIONAMIENTO5
        $data = json_decode(file_get_contents("php://input"));
        $Esta  = $data->estacionamiento;
        $id    = $data->id;
        $fecha = $data->fecha;
        $hora  = $data->hora;
        $diaA  = $data->diaA;
        $mesA  = $data->mesA;
        $anoA  = $data->anoA;
        $peso  = $data->peso;  
        $presinto  = $data->presinto;           

        $Esta    = strtoupper($Esta);

        $sqlModificar = mysqli_query($conDB, "UPDATE ordenes SET estacionamiento5='$Esta', fechad='$fecha', horad='$hora', diad='$diaA', mesd='$mesA', anod='$anoA', peso_tara='$peso', presintos='$presinto'  WHERE id='$id'");
            echo json_encode(["success" => 1]);
            exit();
    break;

    case 'Buscar':  // ELIMINAR EMPRESA
        $Ced = $_GET["e"];
        $sql = "SELECT * from ordenes where placa1='$Ced' ORDER BY id DESC";
        $q = $conDB->query($sql); // ejecuta peticion
        $rows = array();
        while ($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta
        exit();
    break;

}

mysqli_close($conDB);


?>