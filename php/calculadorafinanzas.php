<?php
include "conexion.php";
session_start();

$use = $_SESSION["Usuario"];
$_SESSION["Usuario"] = $use;
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/mdbootstrap/css/mdb.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/stylesidebar.css">
    <title>Calculadora Finanzas</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="menu.php"><button type="button" class="btn btn-primary"><i class="fas fa-home"></i> Inicio</button></a>
        <a href="micuenta.php"><button type="button" class="btn btn-primary"><i class="fas fa-user">
            </i> Mi Cuenta: <span><?php echo $_SESSION['Nombre'] . " " . $_SESSION['Apellidos']; ?></button> </a>
        <a href="cursos.php"><button type="button" class="btn btn-primary"><i class="fas fa-book-reader"></i> Cursos de educación financiera</button></a>
        <a href="gastos.php"><button type="button" class="btn btn-primary"><i class="fas fa-hand-holding-usd"></i> App Control de Gastos</button></a>
        <a href="ayuda.php"><button type="button" class="btn btn-primary"><i class="fas fa-life-ring"></i> Ayuda</button></a>
        <a href="cerrar.php"><button type="button" class="btn btn-primary"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</button></a>
    </div>

    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Abrir</span>

    <h1 class="text-center">Calculadora de Finanzas</h1>
    <main>
        <center>
            <div class="container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="font-weight-bold" scope="col">
                                Ingresos
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <form>
                                    <fieldset>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label h6">Salario:</label>
                                            <div class="col-sm-5">
                                                <input type="number" name="salario" id="salario" class="form-control ingresos">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label h6">Otros ingresos:</label>
                                            <div class="col-sm-5">
                                                <input type="number" name="otrosalario" id="otrosalario" class="form-control ingresos">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <button type="button" class="btn btn-primary" onclick="calcularingreso()">Resultado de ingresos</button>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label h6">Total Ingresos:</label>
                                            <div class="col-sm-5">
                                                <input type="text" id="totalingreso" class="form-control" disabled>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="font-weight-bold" scope="col">
                                Gastos
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <form>
                                    <fieldset>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label h6">Arriendo:</label>
                                            <div class="col-sm-5">
                                                <input type="number" name="arriendo" id="arriendo" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label h6">Créditos:</label>
                                            <div class="col-sm-5">
                                                <input type="number" name="creditos" id="creditos" class="form-control">

                                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#credito"
                                                        aria-expanded="false" aria-controls="credito">Detalle crédito</button>
                                                <div class="collapse" id="credito">
                                                    <div class="card card-body">
                                                        <label class="h6">Hípotecarios:</label>
                                                        <input type="number" name="hipotecario" id="hipotecario" class="form-control DetCred">
                                                        <br>
                                                        <label class="h6">Vehículo:</label>
                                                        <input type="number" name="vehiculo" id="vehiculo" class="form-control DetCred">
                                                        <br>
                                                        <label class="h6">Tarjetas de crédito:</label>
                                                        <input type="number" name="tarCred" id="tarCred" class="form-control DetCred">
                                                        <br>
                                                        <label class="h6">Otros créditos:</label>
                                                        <input type="number" name="otroCred" id="otroCred" class="form-control DetCred">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label h6">Alimentación:</label>
                                            <div class="col-sm-5">
                                                <input type="number" name="alimenta" id="alimenta" class="form-control">

                                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#alimentacion"
                                                        aria-expanded="false" aria-controls="alimentacion">Detalle alimentación</button>
                                                <div class="collapse" id="alimentacion">
                                                    <div class="card card-body">
                                                        <label class="h6">Mercado:</label>
                                                        <input type="number" name="mercado" id="mercado" class="form-control DetMerc">
                                                        <br>
                                                        <label class="h6">Comida fuera del hogar:</label>
                                                        <input type="number" name="comida" id="comida" class="form-control DetMerc">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label h6">Hijos:</label>
                                            <div class="col-sm-5">
                                                <input type="number" name="hijo" id="hijo" class="form-control">

                                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#hi" aria-expanded="false" aria-controls="hi">Detalle gasto hijos</button>
                                                <div class="collapse" id="hi">
                                                    <div class="card card-body">
                                                        <label class="h6">Matrícula y pensión:</label>
                                                        <input type="number" name="martpre" id="martpre" class="form-control DetHij">
                                                        <br>
                                                        <label class="h6">Mesada:</label>
                                                        <input type="number" name="mesada" id="mesada" class="form-control DetHij">
                                                        <br>
                                                        <label class="h6">Lonchera:</label>
                                                        <input type="number" name="lonchera" id="lonchera" class="form-control DetHij">
                                                        <br>
                                                        <label class="h6">Uniforme y materiales:</label>
                                                        <input type="number" name="unimat" id="unimat" class="form-control DetHij">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label h6">Cuidado personal y del hogar:</label>
                                            <div class="col-sm-5">
                                                <input type="number" name="perhog" id="perhog" class="form-control">

                                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#ph"
                                                        aria-expanded="false" aria-controls="ph">Detalle gasto cuidado personal y del hogar</button>
                                                <div class="collapse" id="ph">
                                                    <div class="card card-body">
                                                        <label class="h6">Artículo de aseo:</label>
                                                        <input type="number" name="aseo" id="aseo" class="form-control DetPh">
                                                        <br>
                                                        <label class="h6">Peluquería:</label>
                                                        <input type="number" name="peluq" id="peluq" class="form-control DetPh">
                                                        <br>
                                                        <label class="h6">Empleada doméstica:</label>
                                                        <input type="number" name="empdom" id="empdom" class="form-control DetPh">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label h6">Servicios Públicos:</label>
                                            <div class="col-sm-5">
                                                <input type="number" name="serpub" id="serpub" class="form-control">

                                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#pub"
                                                        aria-expanded="false" aria-controls="pub">Detalle gasto servicios públicos</button>
                                                <div class="collapse" id="pub">
                                                    <div class="card card-body">
                                                        <label class="h6">Agua:</label>
                                                        <input type="number" name="agua" id="agua" class="form-control DetPub">
                                                        <br>
                                                        <label class="h6">Gas:</label>
                                                        <input type="number" name="gas" id="gas" class="form-control DetPub">
                                                        <br>
                                                        <label class="h6">Luz:</label>
                                                        <input type="number" name="luz" id="luz" class="form-control DetPub">
                                                        <br>
                                                        <label class="h6">Teléfono:</label>
                                                        <input type="number" name="tf" id="tf" class="form-control DetPub">
                                                        <br>
                                                        <label class="h6">Televisión:</label>
                                                        <input type="number" name="tv" id="tv" class="form-control DetPub">
                                                        <br>
                                                        <label class="h6">Internet:</label>
                                                        <input type="number" name="wifi" id="wifi" class="form-control DetPub">
                                                        <br>
                                                        <label class="h6">Celular:</label>
                                                        <input type="number" name="phone" id="phone" class="form-control DetPub">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label h6">Seguros:</label>
                                            <div class="col-sm-5">
                                                <input type="number" name="seg" id="seg" class="form-control">

                                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#seguro"
                                                        aria-expanded="false" aria-controls="seguro">Detalle gasto seguros</button>
                                                <div class="collapse" id="seguro">
                                                    <div class="card card-body">
                                                        <label class="h6">Medicina prepagada:</label>
                                                        <input type="number" name="medpre" id="medpre" class="form-control DetSeg">
                                                        <br>
                                                        <label class="h6">Seguro de vehículo:</label>
                                                        <input type="number" name="segveh" id="segveh" class="form-control DetSeg">
                                                        <br>
                                                        <label class="h6">Seguro de vida:</label>
                                                        <input type="number" name="segvida" id="segvida" class="form-control DetSeg">
                                                        <br>
                                                        <label class="h6">Otros seguros:</label>
                                                        <input type="number" name="otroseg" id="otroseg" class="form-control DetSeg">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label h6">Transporte:</label>
                                            <div class="col-sm-5">
                                                <input type="number" name="trans" id="trans" class="form-control">

                                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#tra"
                                                        aria-expanded="false" aria-controls="tra">Detalle gasto transporte</button>
                                                <div class="collapse" id="tra">
                                                    <div class="card card-body">
                                                        <label class="h6">Buses:</label>
                                                        <input type="number" name="bus" id="bus" class="form-control DetTra">
                                                        <br>
                                                        <label class="h6">Taxi:</label>
                                                        <input type="number" name="taxi" id="taxi" class="form-control DetTra">
                                                        <br>
                                                        <label class="h6">Gasolina:</label>
                                                        <input type="number" name="gasolina" id="gasolina" class="form-control DetTra">
                                                        <br>
                                                        <label class="h6">Estacionamiento:</label>
                                                        <input type="number" name="parque" id="parque" class="form-control DetTra">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label h6">Otros Gastos:</label>
                                            <div class="col-sm-5">
                                                <input type="number" name="otrogastos" id="otrogastos" class="form-control">

                                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#otrosgastos"
                                                        aria-expanded="false" aria-controls="otrosgastos">Detalle gasto transporte</button>
                                                <div class="collapse" id="otrosgastos">
                                                    <div class="card card-body">
                                                        <label class="h6">Entretenamiento:</label>
                                                        <input type="number" name="Entretenamiento" id="Entretenamiento" class="form-control DetOtroGasto">
                                                        <br>
                                                        <label class="h6">Revistas y periódicos:</label>
                                                        <input type="number" name="revper" id="revper" class="form-control DetOtroGasto">
                                                        <br>
                                                        <label class="h6">Impuestos:</label>
                                                        <input type="number" name="impuestos" id="impuestos" class="form-control DetOtroGasto">
                                                        <br>
                                                        <label class="h6">Otros:</label>
                                                        <input type="number" name="otrosgas" id="otrosgas" class="form-control DetOtroGasto">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <button type="button" class="btn btn-primary" onclick="calculargastos()">Resultado de gastos</button>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label h6">Gastos:</label>
                                            <div class="col-sm-5">
                                                <input type="text" id="totalgastos" class="form-control" disabled>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="font-weight-bold" scope="col">
                                Ahorro
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <form>
                                    <fieldset>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label h6">Ahorro actual:</label>
                                            <div class="col-sm-5">
                                                <input type="number" name="ahorroactual" id="ahorroactual" class="form-control">

                                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#ahora" 
                                                        aria-expanded="false" aria-controls="ahora">Detalle ahorro actual</button>
                                                <div class="collapse" id="ahora">
                                                    <div class="card card-body">
                                                        <label class="h6">Cesantías:</label>
                                                        <input type="number" name="cesantias" id="cesantias" class="form-control DetAhora">
                                                        <br>
                                                        <label class="h6">Fondo de empleados:</label>
                                                        <input type="number" name="fonemp" id="fonemp" class="form-control DetAhora">
                                                        <br>
                                                        <label class="h6">Acciones:</label>
                                                        <input type="number" name="acciones" id="acciones" class="form-control DetAhora">
                                                        <br>
                                                        <label class="h6">Carteras colectivas:</label>
                                                        <input type="number" name="cartcol" id="cartcol" class="form-control DetAhora">
                                                        <br>
                                                        <label class="h6">Otros:</label>
                                                        <input type="number" name="otroahorro" id="otroahorro" class="form-control DetAhora">
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label h6">Ahorro mensual:</label>
                                            <div class="col-sm-5">
                                                <input type="number" name="mensual" id="mensual" class="form-control CalcularMensual">

                                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#mensuales" 
                                                        aria-expanded="false" aria-controls="mensuales">Detalle ahorro mensual</button>
                                                <div class="collapse" id="mensuales">
                                                    <div class="card card-body">
                                                        <label class="h6">Fondo de empleados:</label>
                                                        <input type="number" name="fon" id="fon" class="form-control DetMensual TotalMensuales">
                                                        <br>
                                                        <label class="h6">Aporte voluntario AFP:</label>
                                                        <input type="number" name="afp" id="afp" class="form-control DetMensual TotalMensuales">
                                                        <br>
                                                        <label class="h6">Carteras colectivas:</label>
                                                        <input type="number" name="cart" id="cart" class="form-control DetMensual TotalMensuales">
                                                        <br>
                                                        <label class="h6">Alcancía:</label>
                                                        <input type="number" name="alcancia" id="alcancia" class="form-control DetMensual TotalMensuales">
                                                        <br>
                                                        <label class="h6">Otros:</label>
                                                        <input type="number" name="otromen" id="otromen" class="form-control DetMensual TotalMensuales">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label h6">Meta de Ahorro:</label>
                                            <div class="col-sm-5">
                                                <input type="number" name="meta" id="meta" class="form-control">
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="font-weight-bold" scope="col">
                                Balance Financiero Final
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label h6">Total Ingresos:</label>
                                    <div class="col-sm-5">
                                        <input type="number" name="toting" id="toting" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label h6">Total Gastos:</label>
                                    <div class="col-sm-5">
                                        <input type="number" name="totgas" id="totgas" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label h6">Total Ahorro:</label>
                                    <div class="col-sm-5">
                                        <input type="number" name="totalmensualdetalle" id="totalmensualdetalle" class="form-control" disabled>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <button type="button" class="btn btn-primary" onclick="calcularBalance()">Resultado de balance</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th id="colorbalance">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label h6"><b>Balance:</b></label>
                                    <div class="col-sm-5">
                                        <input type="number" name="balance" id="balance" class="form-control" disabled>
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </thead>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="font-weight-bold" scope="col">
                                Balance Final Ahorros
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-group row">
                                    <button type="button" class="btn btn-primary" onclick="calcularAhorro()">Calculadora de ahorros</button>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label h6">Ahorro mínimo ideal:</label>
                                    <div class="col-sm-5">
                                        <input type="number" name="ami" id="ami" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label h6">Meta de ahorro:</label>
                                    <div class="col-sm-5">
                                        <input type="number" name="mda" id="mda" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label h6">Hasta ahora ha ahorrado:</label>
                                    <div class="col-sm-5">
                                        <input type="number" name="ha" id="ha" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label h6">Para alcanzar la meta falta ahorrar:</label>
                                    <div class="col-sm-5">
                                        <input type="number" name="palfa" id="palfa" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label h6"><b>Alcanzará la meta en (meses):</b></label>
                                    <div class="col-sm-5">
                                        <input type="number" name="mesesahorro" id="mesesahorro" class="form-control" disabled>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </center>
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
        function calcularingreso() {
            var salario = (document.getElementById("salario").value || 0);
            var otrosalario = (document.getElementById("otrosalario").value || 0);

            TotalIngreso = parseInt(salario) + parseInt(otrosalario);

            document.getElementById("totalingreso").value = TotalIngreso;
            document.getElementById("toting").value = TotalIngreso;
        }

        function calculargastos() {
            var arriendo = (document.getElementById("arriendo").value || 0);
            var creditos = (document.getElementById("creditos").value || 0);
            var alimento = (document.getElementById("alimenta").value || 0);
            var hijo = (document.getElementById("hijo").value || 0);
            var ph = (document.getElementById("perhog").value || 0);
            var serpub = (document.getElementById("serpub").value || 0);
            var seg = (document.getElementById("seg").value || 0);
            var trans = (document.getElementById("trans").value || 0);
            var otrogastos = (document.getElementById("otrogastos").value || 0);

            TotalGastos = parseInt(arriendo) + parseInt(creditos) + parseInt(alimento) + parseInt(hijo) +
                parseInt(ph) + parseInt(serpub) + parseInt(seg) + parseInt(trans) + parseInt(otrogastos);

            document.getElementById("totalgastos").value = TotalGastos;
            document.getElementById("totgas").value = TotalGastos;
        }

        function calcularBalance() {
            var totaling = (document.getElementById("toting").value || 0);
            var totalgas = (document.getElementById("totgas").value || 0);
            var totalahorro = (document.getElementById("totalmensualdetalle").value || 0);

            totalBalance = parseInt(totaling) - (parseInt(totalgas) + parseInt(totalahorro));

            if (totalBalance < 0) {
                document.getElementById("colorbalance").style.backgroundColor = "red";
            } else if (totalBalance > 0) {
                document.getElementById("colorbalance").style.backgroundColor = "lightgreen";
            } else {
                document.getElementById("colorbalance").style.backgroundColor = "yellow";
            }

            document.getElementById("balance").value = totalBalance;
        }

        function calcularAhorro() {
            var tg = (document.getElementById("totalgastos").value || 0);
            var meta = (document.getElementById("meta").value || 0);
            var actual = (document.getElementById("ahorroactual").value || 0);
            var ahorramen = (document.getElementById("mensual").value || 0);

            var tgs = tg * 6;
            var actuamensual = parseInt(actual) + parseInt(ahorramen);
            var falta = parseInt(meta) - parseInt(actuamensual);
            var meses = parseInt(falta) / parseInt(ahorramen);
            
            meses = Math.trunc(meses);

            document.getElementById("ami").value = tgs;
            document.getElementById("mda").value = meta;
            document.getElementById("ha").value = actuamensual;
            document.getElementById("palfa").value = falta;

            if (meses < 0) {
                document.getElementById("mesesahorro").value = 0;
            } else if (meses > 0) {
                document.getElementById("mesesahorro").value = meses;
            }
        }
    </script>

    <script>
        //Dettalle Creditos
        $('.form-group').on('input', '.DetCred', function() {
            var totalSumCred = 0;
            $('.form-group .DetCred').each(function() {
                var inputValCred = $(this).val();
                if ($.isNumeric(inputValCred)) {
                    totalSumCred += parseInt(inputValCred);
                }
            });
            $('#creditos').val(totalSumCred);
        });

        //Detalle Mercado
        $('.form-group').on('input', '.DetMerc', function() {
            var totalSumMerc = 0;
            $('.form-group .DetMerc').each(function() {
                var inputValMerc = $(this).val();
                if ($.isNumeric(inputValMerc)) {
                    totalSumMerc += parseInt(inputValMerc);
                }
            });
            $('#alimenta').val(totalSumMerc);
        });

        //Detalle hijos
        $('.form-group').on('input', '.DetHij', function() {
            var totalSumHij = 0;
            $('.form-group .DetHij').each(function() {
                var inputValHij = $(this).val();
                if ($.isNumeric(inputValHij)) {
                    totalSumHij += parseInt(inputValHij);
                }
            });
            $('#hijo').val(totalSumHij);
        });

        //Detalle Ciudado personal y del hogar
        $('.form-group').on('input', '.DetPh', function() {
            var totalSumPh = 0;
            $('.form-group .DetPh').each(function() {
                var inputValPh = $(this).val();
                if ($.isNumeric(inputValPh)) {
                    totalSumPh += parseInt(inputValPh);
                }
            });
            $('#perhog').val(totalSumPh);
        });

        //Detalle Servicios Públicos
        $('.form-group').on('input', '.DetPub', function() {
            var totalSumPub = 0;
            $('.form-group .DetPub').each(function() {
                var inputValPub = $(this).val();
                if ($.isNumeric(inputValPub)) {
                    totalSumPub += parseInt(inputValPub);
                }
            });
            $('#serpub').val(totalSumPub);
        });

        //Detalle Seguros
        $('.form-group').on('input', '.DetSeg', function() {
            var totalSumSeg = 0;
            $('.form-group .DetSeg').each(function() {
                var inputValSeg = $(this).val();
                if ($.isNumeric(inputValSeg)) {
                    totalSumSeg += parseInt(inputValSeg);
                }
            });
            $('#seg').val(totalSumSeg);
        });

        //Detalle transportes
        $('.form-group').on('input', '.DetTra', function() {
            var totalSumTra = 0;
            $('.form-group .DetTra').each(function() {
                var inputValTra = $(this).val();
                if ($.isNumeric(inputValTra)) {
                    totalSumTra += parseInt(inputValTra);
                }
            });
            $('#trans').val(totalSumTra);
        });

        //Detalle otros gastos
        $('.form-group').on('input', '.DetOtroGasto', function() {
            var totalSumOtroGas = 0;
            $('.form-group .DetOtroGasto').each(function() {
                var inputValOtroGas = $(this).val();
                if ($.isNumeric(inputValOtroGas)) {
                    totalSumOtroGas += parseInt(inputValOtroGas);
                }
            });
            $('#otrogastos').val(totalSumOtroGas);
        });

        //Detalle ahorro actual
        $('.form-group').on('input', '.DetAhora', function() {
            var totalSumAhorraActual = 0;
            $('.form-group .DetAhora').each(function() {
                var inputValAhorraActual = $(this).val();
                if ($.isNumeric(inputValAhorraActual)) {
                    totalSumAhorraActual += parseInt(inputValAhorraActual);
                }
            });
            $('#ahorroactual').val(totalSumAhorraActual);
        });

        //Detalle ahorro mensual
        $('.form-group').on('input', '.DetMensual', function() {
            var totalSumAM = 0;
            $('.form-group .DetMensual').each(function() {
                var inputValAM = $(this).val();
                if ($.isNumeric(inputValAM)) {
                    totalSumAM += parseInt(inputValAM);
                }
            });
            $('#mensual').val(totalSumAM);
        });


        $('.form-group').on('input', '.TotalMensuales', function() {
            var totalSumTM = 0;
            $('.form-group .TotalMensuales').each(function() {
                var inputValTM = $(this).val();
                if ($.isNumeric(inputValTM)) {
                    totalSumTM += parseInt(inputValTM);
                }
            });
            $('#totalmensualdetalle').val(totalSumTM);
        });


        $('.form-group').on('input', '.CalcularMensual', function() {
            var totalSumCM = 0;
            $('.form-group .CalcularMensual').each(function() {
                var inputValCM = $(this).val();
                if ($.isNumeric(inputValCM)) {
                    totalSumCM += parseInt(inputValCM);
                }
            });
            $('#totalmensualdetalle').val(totalSumCM);
        });
    </script>
</body>

</html>
