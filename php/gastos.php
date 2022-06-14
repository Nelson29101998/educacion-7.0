<?php
session_start();
include "conexion.php";
$use = $_SESSION["Usuario"];
$_SESSION["Usuario"] = $use;

$tablagastos = "SELECT * FROM gastos WHERE Usuario = '$use'";
$gast = mysqli_query($conexion, $tablagastos);

$tablaingresos = "SELECT * FROM ingresos WHERE Usuario = '$use'";
$ing = mysqli_query($conexion, $tablaingresos);

$sumargastos = "SELECT SUM(Valor) as Totalgastos FROM gastos WHERE Usuario = '$use'";
$totalgastos = mysqli_query($conexion, $sumargastos);
$revgas = mysqli_fetch_assoc($totalgastos);

$sumaringreso = "SELECT SUM(Valor) as Totalingreso FROM ingresos WHERE Usuario = '$use'";
$totalingresos = mysqli_query($conexion, $sumaringreso);
$reving = mysqli_fetch_assoc($totalingresos);

$calcgasto = $revgas['Totalgastos'];
$calcingreso = $reving['Totalingreso'];

$resultados = $calcingreso - $calcgasto;
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
    <title>App Control de Gastos</title>
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="menu.php"><button type="button" class="btn btn-primary"><i class="fas fa-home"></i> Inicio</button> </a>
        <a href="micuenta.php"><button type="button" class="btn btn-primary"><i class="fas fa-user">
            </i> Mi Cuenta: <span><?php echo $_SESSION['Nombre'] . " " . $_SESSION['Apellidos']; ?></button> </a>
        <a href="cursos.php"><button type="button" class="btn btn-primary"><i class="fas fa-book-reader"></i> Cursos de educación financiera</button></a>
        <a href="calculadorafinanzas.php"><button type="button" class="btn btn-primary"><i class="fas fa-calculator">
            </i> App Calculadora de finanzas personales</button></a>
        <a href="ayuda.php"><button type="button" class="btn btn-primary"><i class="fas fa-life-ring"></i> Ayuda</button></a>
        <a href="cerrar.php"><button type="button" class="btn btn-primary"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</button></a>
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Abrir</span>

    <h1 class="text-center">App Control de Gastos</h1>
    <main class="container">
        <form name="forml" id="forml" method="POST" onsubmit="return formulario()" action="gastossql.php">
            <div class="form-group">
                <label class="text-left">Mes:
                    <select class="form-control" name="meses" id="meses">
                        <option value="sele">Selección del mes</option>
                        <option value="01">Enero</option>
                        <option value="02">Febrero</option>
                        <option value="03">Marzo</option>
                        <option value="04">Abril</option>
                        <option value="05">Mayo</option>
                        <option value="06">Junio</option>
                        <option value="07">Julio</option>
                        <option value="08">Agosto</option>
                        <option value="09">Septiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>
                        <option value="12">Diciembre</option>
                    </select>
                </label>

                <label>Año:
                    <select class="form-control" name="anos" id="anos">
                        <option value="sele">Selección del año</option>
                        <?php
                        for ($anos = 1920; $anos <= 2020; $anos++) {
                        ?>
                            <option value="<?php echo $anos; ?>"><?php echo $anos; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </label>

                <div class="form-group">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="precio" id="precio1" value="ingreso">
                        <label class="custom-control-label" for="precio1">Ingreso</label>
                    </div>

                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="precio" id="precio2" value="gasto">
                        <label class="custom-control-label" for="precio2">Gasto</label>
                    </div>
                    <input type="submit" class="btn btn-primary" name="buscar" id="buscar" value="Ingresar apunte">
                    <div class="badge badge-danger text-wrap align-middle float-right" style="width: 10rem;">
                        <h5>Total = <?php
                                    if ($resultados == null) {
                                        echo "$0";
                                    } else {
                                        echo "$" . $resultados;
                                    }
                                    ?>
                        </h5>
                    </div>

                    <center>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="font-weight-bold" scope="col">
                                        Fecha
                                    </th>
                                    <th class="font-weight-bold" scope="col">
                                        Concepto
                                    </th>
                                    <th class="font-weight-bold" scope="col">
                                        Detalle
                                    </th>
                                    <th class="font-weight-bold" scope="col">
                                        Valor
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="date" class="form-control" name="fecha" id="fecha" min="1920-01-01" max="<?php echo date("Y-m-d");?>" required>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="conc" id="conc" placeholder="Concepto">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="det" id="det" placeholder="Detalle">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" name="val" id="val" placeholder="Valor">
                                    </td>
                                </tr>
                                <?php
                                while (($encongas = mysqli_fetch_array($gast)) || ($enconing = mysqli_fetch_array($ing))) {
                                ?>
                                    <tr>
                                        <?php
                                        if (isset($enconing)) {
                                        ?>
                                            <td>
                                                <?php echo $enconing['Fecha']; ?>
                                            </td>
                                            <td>
                                                <?php echo $enconing['Concepto']; ?>
                                            </td>
                                            <td>
                                                <?php echo $enconing['Detalle']; ?>
                                            </td>
                                            <td>
                                                <?php echo "Ingreso: $" . $enconing['Valor'];?>
                                            </td>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        if (isset($encongas)) {
                                        ?>
                                            <td>
                                                <?php echo $encongas['Fecha']; ?>
                                            </td>
                                            <td>
                                                <?php echo $encongas['Concepto']; ?>
                                            </td>
                                            <td>
                                                <?php echo $encongas['Detalle']; ?>
                                            </td>
                                            <td>
                                                <?php echo "Gasto: $-" . $encongas['Valor']; ?>
                                            </td>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </center>
                </div>
        </form>
        <a href="limpiar.php"><button type="button" class="btn btn-primary">Limpiar</button></a>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
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
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <script type="text/javascript">
        function formulario() {
            var mes = document.forms['forml']['meses'].value;
            var ano = document.forms['forml']['anos'].value;

            var radioprecio = document.forms['forml']['precio'].value;
            var conc = document.forms['forml']['conc'].value;
            var det = document.forms['forml']['det'].value;
            var val = document.forms['forml']['val'].value;

            if (mes == "sele") {
                alert("Indique el mes.");
                return false;
            }

            if (ano == "sele") {
                alert("Indique el año.");
                return false;
            }

            if(radioprecio == "" || radioprecio == null){
                alert("Indique si su apunte es ingreso o gasto a través de un check.");
                return false;
            }

            if (conc == null || conc == "") {
                alert("Ingrese el concepto, a qué ítem pertenece su ingreso o gasto.");
                return false;
            }

            if (det == null || det == "") {
                alert("Ingrese el detalle u observación de su ingreso o gasto.");
                return false;
            }

            if (val == null || val == "") {
                alert("Ingrese el valor.");
                return false;
            }
        }
    </script>
</body>

</html>
