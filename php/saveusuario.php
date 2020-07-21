<?php
include "conexion.php";

$nom = $_POST['nom'];
$ape = $_POST['ape'];
$usar = $_POST['user'];
$dir = $_POST['dir'];
$com = $_POST['com'];
$phone = $_POST['tel'];
$civil = $_POST['estcivil'];
$rut = $_POST['rut'];
$correo = $_POST['correo'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

$sql = "INSERT INTO usuario (Rut, Nombre, Apellidos, Usuario, Direccion, Comuna, Telefono, Estado_Civil, Mail, Contrasena1, Contrasena2)
VALUE('" . $rut . "', '" . $nom . "', '" . $ape . "', '" . $usar . "', '" . $dir . "', '" . $com . "', '" . $phone . "', '" . $civil . "', '" . $correo . "', '" . $pass1 . "', '" . $pass2 . "')";

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
    if ($conexion->query($sql) === TRUE) {
        echo "
    <center>
    <h1 class='display-4'>Registro exitoso. Muchas gracias por preferirnos. ;)</h1>
    <a href='../inicio.html'>
    <button type='button' class='btn btn-primary'>Volver</button></a>
    </center>";
    } else {
        echo "Error: " . $sql . $conexion->error;
    }

    $conexion->close();
    ?>
</body>

</html>