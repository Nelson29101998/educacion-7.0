<?php
session_start();
include "conexion.php";

$usuario = $_POST["user"];
$contrasena = $_POST["pass"];

$sql = "SELECT * FROM usuario WHERE Usuario = '$usuario'";
$resp = mysqli_query($conexion, $sql);
$encotntrar = mysqli_fetch_array($resp, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/mdbootstrap/css/mdb.min.css">
    <title>Bucando</title>
</head>

<body>
    <?php
    if (isset($encotntrar["Usuario"])) {
        if ($contrasena == $encotntrar["Contrasena1"]) {
            $_SESSION["Nombre"] = $encotntrar['Nombre'];
            $_SESSION["Apellidos"] = $encotntrar['Apellidos'];
            $_SESSION["Usuario"] = $encotntrar['Usuario'];

            header("Location: menu.php");
        } else {
            echo "<center>
            <h1 class='display-4'>Contraseña estan incorrecto!!</h1>
            <a href='../html/usuario.html'><button type='button' class='btn btn-primary'>Volver</button></a>
            </center>";
        }
    } else {
        echo "<center>
        <h1 class='display-4'>Correo estan incorrecto o no esta registrado!!</h1>
        <a href='../html/usuario.html'><button type='button' class='btn btn-primary'>Volver</button></a>
        </center>";
    }
    ?>
</body>

</html>