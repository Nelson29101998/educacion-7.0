<?php
session_start();
include "conexion.php";

$use = $_SESSION["Usuario"];
$_SESSION["Usuario"] = $use;

$nom = $_POST['nom'];
$ape = $_POST['ape'];
$dir = $_POST['dir'];
$com = $_POST['com'];
$phone = $_POST['tel'];
$civil = $_POST['estcivil'];
$rut = $_POST['rut'];
$correo = $_POST['correo'];

$cambiar = "UPDATE usuario SET
Rut='$rut', 
Nombre='$nom', 
Apellidos='$ape', 
Direccion='$dir', 
Comuna='$com', 
Telefono='$phone', 
Estado_Civil='$civil', 
Mail='$correo' 
WHERE Usuario='$use'";

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
    <center>
        <?php
        if ($conexion->query($cambiar) === TRUE) {
        ?>
        <h1>Has cambiar tu cuenta con exito</h1>
        <a href="micuenta.php"><button type="button" class="btn btn-primary">Volver</button></a>
        <?php
        } else {
        ?>
        <h1>No pudo cambiar paraece que algo cayo mal</h1>
        <a href="micuenta.php"><button type="button" class="btn btn-primary">Volver</button></a>
        <?php
        }
        ?>
    </center>
</body>

</html>