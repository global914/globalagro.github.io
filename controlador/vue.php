<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include('conDB.php');

$data = json_decode(file_get_contents("php://input"));

$N1=$conDB->real_escape_string($data->usuario);
$N2=$conDB->real_escape_string($data->password);

//$N1 = "medinajose01@gmail.com";
//$N2 = "123";

//print json_encode($N1);

//exit();

$sql = "SELECT indicador,nombre,cedula,nivel,cargo from users where indicador='$N1' and contraseNa='$N2'";
$resultado = mysqli_query($conDB,$sql);
while($r = mysqli_fetch_assoc($resultado)) // lee cada fila
		{
			$rows[] = $r;
		}
//print json_encode($rows);
$N_1 = "NEGADO";

if (!empty($rows)) {
	print json_encode($rows);
}else{
	print json_encode($N_1);
}

mysqli_close($conDB);
   
?>