<?php
session_start();
include "conexion.php";

$sol = $_POST['ayuda'];
$preg = $_POST['pregunta'];
$correo = $_POST['correo'];

$ayuda = "INSERT INTO ayuda (Solucion, Pregunta, Correo) 
Value ('" . $sol . "', '" . $preg . "', '" . $correo . "')";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/mdbootstrap/css/mdb.min.css">
    <title>Exito</title>
</head>

<body>
    <?php
    if ($conexion->query($ayuda) === TRUE) {
        echo "
    <center>
    <p>
    <h1 class='display-4'>Mensaje enviado</h1>
    <a href='ayuda.php'>
    <button type='button' class='btn btn-primary'>Volver</button></a>
    </p>
    </center>";
    } else {
        echo "<center>
        <p>
        <h1>Algo se le cayo</h1>
        <a href='ayuda.php'><button type='button' class='btn btn-primary'>Volver</button></a>
        </p>
        </center>";
    }

    $conexion->close();
    ?>
</body>

</html>