<?php
include "conexion.php";
session_start();

$use = $_SESSION["Usuario"];
$_SESSION["Usuario"] = $use;

$sql = "SELECT * FROM usuario WHERE Usuario = '$use'";
$resp = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/stylesidebar.css">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/mdbootstrap/css/mdb.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <title>Mi Cuenta</title>
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="menu.php"><button type="button" class="btn btn-primary"><i class="fas fa-home"></i> Inicio</button> </a>
        <a href="cursos.php"><button type="button" class="btn btn-primary"><i class="fas fa-book-reader"></i> Cursos de educación financiera</button></a>
        <a href="calculadorafinanzas.php"><button type="button" class="btn btn-primary"><i class="fas fa-calculator"></i> App Calculadora de finanzas personales</button></a>
        <a href="gastos.php"><button type="button" class="btn btn-primary"><i class="fas fa-hand-holding-usd"></i> App Control de Gastos</button></a>
        <a href="ayuda.php"><button type="button" class="btn btn-primary"><i class="fas fa-life-ring"></i> Ayuda</button></a>
        <a href="cerrar.php"><button type="button" class="btn btn-primary"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</button></a>
    </div>

    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Abrir</span>
    <center>
        <h1 class="displa-4">Mi Cuenta</h1>
        <?php
        while ($buscar = mysqli_fetch_array($resp)) {
        ?>
            <div class="container">
                <table class="table table-sm table-bordered">
                    <tbody>
                        <tr>
                            <td>
                                <label class="font-weight-bold">Nombre: </label><?php echo " " . $buscar['Nombre']; ?>
                            </td>
                            <td>
                                <label class="font-weight-bold">Apellidos: </label><?php echo " " . $buscar['Apellidos']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="font-weight-bold">Rut: </label><?php echo " " . $buscar['Rut']; ?>
                            </td>
                            <td>
                                <label class="font-weight-bold">Dirección: </label><?php echo " " . $buscar['Direccion']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="font-weight-bold">Comuna: </label><?php echo " " . $buscar['Comuna']; ?>
                            </td>
                            <td>
                                <label class="font-weight-bold">Télefono: </label><?php echo " " . $buscar['Telefono']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="font-weight-bold">Estado Civil: </label><?php echo " " . $buscar['Estado_Civil']; ?>
                            </td>
                            <td>
                                <label class="font-weight-bold">Correo: </label><?php echo " " . $buscar['Mail']; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php
        }
        ?>
        <div class="container">
            <table>
                <tbody>
                    <tr>
                        <td>
                            <a href="cambiarcuenta.php"><button type="button" class="btn btn-primary"><i class="fas fa-user-cog"></i> Cambiar</button></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </center>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>

</html>