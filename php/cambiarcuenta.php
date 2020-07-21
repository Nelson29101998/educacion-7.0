<?php
include "conexion.php";
session_start();

$use = $_SESSION["Usuario"];
$_SESSION["Usuario"] = $use;

$sql = "SELECT * FROM usuario WHERE Usuario = '$use'";
$resp = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/stylesidebar.css">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/mdbootstrap/css/mdb.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <title>Cambiar Cuenta</title>
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
        <h1 class="displa-4">Cambiar su cuenta</h1>

        <?php
        while ($buscar = mysqli_fetch_array($resp)) {
        ?>
            <div class="container">
                <form name="forml" id="forml" method="POST" onsubmit="return formulario()" action="cambiar.php">
                    <div class="form-group">
                        <table class="table table-sm table-bordered">
                            <tbody>
                                <tr>

                                    <td>
                                        <label class="font-weight-bold">Nombre:</label>
                                        <input type="text" class="form-control" name="nom" id="nom" value="<?php echo $buscar['Nombre']; ?>" maxlength="20">
                                    </td>
                                    <td>
                                        <label class="font-weight-bold">Apellidos:</label>
                                        <input type="text" class="form-control" name="ape" id="ape" value="<?php echo $buscar['Apellidos']; ?>" maxlength="40">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="font-weight-bold">Rut:</label>
                                        <input type="text" class="form-control" name="rut" id="rut" value="<?php echo $buscar['Rut']; ?>" maxlength="12">
                                    </td>
                                    <td>
                                        <label class="font-weight-bold">Dirección:</label>
                                        <textarea class="form-control" name="dir" id="dir" cols="30" rows="1" maxlength="500"><?php echo $buscar['Direccion']; ?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="font-weight-bold">Comuna:</label>
                                        <input type="text" class="form-control" name="com" id="com" value="<?php echo $buscar['Comuna']; ?>" maxlength="100">
                                    </td>
                                    <td>
                                        <label class="font-weight-bold">Télefono:</label>
                                        <input type="number" class="form-control" name="tel" id="tel" value="<?php echo $buscar['Telefono']; ?>" maxlength="11">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="font-weight-bold">Estado Civil:</label>
                                        <select class="form-control" name="estcivil" id="estcivil">
                                            <?php
                                            $est = $buscar['Estado_Civil'];
                                            if ($est === "Soltero") {
                                            ?>
                                                <option value="Soltero">Soltero</option>
                                                <option value="Casado">Casado</option>
                                                <option value="Otro">Otro</option>
                                            <?php
                                            } elseif ($est === "Casado") {
                                            ?>
                                                <option value="Casado">Casado</option>
                                                <option value="Soltero">Soltero</option>
                                                <option value="Otro">Otro</option>
                                            <?php
                                            } elseif ($est === "Otro") {
                                            ?>
                                                <option value="Otro">Otro</option>
                                                <option value="Casado">Casado</option>
                                                <option value="Soltero">Soltero</option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td>
                                        <label class="font-weight-bold">Correo:</label>
                                        <input type="email" class="form-control" name="correo" id="correo" value="<?php echo $buscar['Mail'] ?>" maxlength="100">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <button type="submit" class="btn btn-primary" name="cam" id="cam"><i class="fas fa-sync-alt"></i> Cambiar</button>
                                    </td>
                                    <td>
                                        <a href="micuenta.php"><button type="button" class="btn btn-primary" name="canl" id="canl"><i class="fas fa-times-circle"></i> Cancelar</button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        <?php
        }
        ?>
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
    <script type="text/javascript">
        function formulario() {
            var nom = document.forms['forml']['nom'].value;
            var ape = document.forms['forml']['ape'].value;
            var dir = document.forms['forml']['dir'].value;
            var com = document.forms['forml']['com'].value;
            var tel = document.forms['forml']['tel'].value;
            var estc = document.forms['forml']['estcivil'].value;
            var rut = document.forms['forml']['rut'].value;
            var correo = document.forms['forml']['correo'].value;

            if (nom == "" || nom == null) {
                alert("Introduzca su nombre");
                return false;
            }

            if (ape == "" || ape == null) {
                alert("Introduzca su apellido");
                return false;
            }

            if (dir == "" || dir == null) {
                alert("Introduzca su dirección");
                return false;
            }

            if (com == "" || com == null) {
                alert("Introduzca su comuna");
                return false;
            }


            var cadtel = tel.length;
            if (tel == "" || tel == null) {
                alert("Introduzca su télefono");
                return false;
            }

            if (cadtel < 11) {
                alert("Pon su número por ejemplo: xx x xxxx xxxx");
                return false;
            }

            if (estc == "sele") {
                alert("Introduzca su Estado Civil");
                return false;
            }

            var cadenarut = rut.length;
            if (rut == "" || rut == null) {
                alert("Introduzca su RUT");
                return false;
            }

            if (cadenarut < 12) {
                alert("Se escribe por ejemplo: xx.xxx.xxx-x");
                return false;
            }

            if (correo == "" || correo == null) {
                alert("Introduzca su Mail");
                return false;
            }

        }
    </script>
</body>

</html>