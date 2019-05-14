<?php
include 'Conexion.php';

$conexion = new Conexion();
$cnn = $conexion->getConexion();
$sql = "SELECT * FROM usuario";
$statement = $cnn->prepare($sql);
$valor = $statement -> execute();


//Recorre toda la data
if ($valor){
    while($resultado = $statement->fetch (PDO::FETCH_ASSOC)) {
    //Se almacena todo lo que haya recorrido en el arreglo
    $data["data"][] = $resultado;
    }

    //Codifica en formato Json 
    echo json_encode($data);
}else {
    echo "error";
}

//Liberar memoria
$statement -> closeCursor();
$conexion = null; 