<?php
session_start();
include "conexion.php";

$use = $_SESSION["Usuario"];
$_SESSION["Usuario"] = $use;

$limpiargastos = "DELETE FROM gastos WHERE Usuario = '$use'";

if ($conexion->query($limpiargastos) === TRUE) {
    header("Location: gastos.php");
} else {
    echo "Error: " . $sql . $conexion->error;
}

$limpiaringreso = "DELETE FROM ingresos WHERE Usuario = '$use'";

if ($conexion->query($limpiaringreso) === TRUE) {
    header("Location: gastos.php");
} else {
    echo "Error: " . $sql . $conexion->error;
}

$conexion->close();
?>