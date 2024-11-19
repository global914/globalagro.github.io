<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


      $archivo = $_FILES['archivo'];


    $resultado = move_uploaded_file($archivo["tmp_name"], "archivos/" .$archivo["name"]);
    $nombre = $archivo["name"];
    rename($archivo["name"], $nombre);
    $nombre2 = $action1 .".jpg`";


    echo json_encode(["success" => $archivo]);
?>