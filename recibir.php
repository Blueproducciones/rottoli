<?php

echo "Gracias ".$_REQUEST["nombre"]." , tu mensaje se ha enviado con exito !.";

/* Datos de DB */
const DB_HOST = "127.0.0.1";
const DB_USER = "root";
const DB_PASS = "";
const DB_DB = "nombre de la base de datos de mysql";


$mailenvio = 'straticonahuel@gmail.com';
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$asunto = $nombre . ' '. 'quiere contactarse con vos.';

if ($nombre == ''){
    echo "ingrese Nombre";
    die();
}
if ($email==''){
    echo "ingrese Email";
    die();
}
if($mensaje==''){
    echo 'ingresa mensaje';
    die();
}

//conectando a la base de datos

$connect = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_DB) or die("Error de conexion con la base de datos");

$sql = "INSERT INTO contacto (nombre,email,telefono,mensaje) VALUES ('$nombre','$email','$telefono','$mensaje')";

$query = mysqli_query($connect,$sql) or die("Error al insertar en la base de datos");

// comprueba si al insertar surgio un error, sino, envia el mail, retorna al index.html

if(!$query){
    die("Error al insertar en la base de datos");
}
// mail($mailenvio,$asunto,$mensaje);

?>