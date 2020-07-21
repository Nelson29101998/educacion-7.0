<?php
session_start();
include "conexion.php";

$use = $_SESSION["Usuario"];
$_SESSION["Usuario"] = $use;

$mes = $_POST['meses'];
$ano = $_POST['anos'];
$radios = $_POST['precio'];

$f = $_POST['fecha'];
$c = $_POST['conc'];
$d = $_POST['det'];
$v = $_POST['val'];

if($radios == "ingreso"){

$insertaingreso = "INSERT INTO ingresos (Fecha, Concepto, Detalle, Valor, Usuario) 
VALUES ('".$f."', '".$c."', '".$d."', '".$v."', '".$use."')";

if ($conexion->query($insertaingreso) === TRUE) {
    header("Location: gastos.php");
} else {
    echo "Error: " . $sql . $conexion->error;
}

}else if($radios == "gasto"){

$insertagasto = "INSERT INTO gastos (Fecha, Concepto, Detalle, Valor, Usuario) 
VALUES ('".$f."', '".$c."', '".$d."', '".$v."', '".$use."')";

if ($conexion->query($insertagasto) === TRUE) {
    header("Location: gastos.php");
} else {
    echo "Error: " . $sql . $conexion->error;
}

}
$conexion->close();
?>