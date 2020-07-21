<?php
session_start();
include "conexion.php";

$use = $_SESSION["Usuario"];
$_SESSION["Usuario"] = $use;
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
    <title>Cursos</title>
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="menu.php"><button type="button" class="btn btn-primary"><i class="fas fa-home"></i> Inicio</button></a>
        <a href="micuenta.php"><button type="button" class="btn btn-primary"><i class="fas fa-user"></i> Mi Cuenta: <span><?php echo $_SESSION['Nombre'] . " " . $_SESSION['Apellidos']; ?></button> </a>
        <a href="calculadorafinanzas.php"><button type="button" class="btn btn-primary"><i class="fas fa-calculator"></i> App Calculadora de finanzas personales</button></a>
        <a href="gastos.php"><button type="button" class="btn btn-primary"><i class="fas fa-hand-holding-usd"></i> App Control de Gastos</button></a>
        <a href="ayuda.php"><button type="button" class="btn btn-primary"><i class="fas fa-life-ring"></i> Ayuda</button></a>
        <a href="cerrar.php"><button type="button" class="btn btn-primary"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</button></a>
    </div>

    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Abrir</span>

    <center>
        <h1>CURSOS DE EDUCACIÓN FINANCIERA</h1>
        <p>Referencia: Sernac, Chile. Tomado desde https://www.sernac.cl/portal/607/w3-propertyvalue-21070.html</p>
        <img src="http://drive.google.com/uc?id=1tATkmS-EMZgHqOs1mryIgAAzhNR1ZIMH" alt="cursos" style="width: 200px;">
        <br>
        <div class="container">
            <div class="list-group">
                <button class="list-group-item btn btn-primary" type="button" data-toggle="collapse" data-target="#cuadro1" aria-expanded="false" aria-controls="cuadro1">Unidad 1</button>
                <div class="collapse" id="cuadro1">
                    <div class="card card-body">
                        <label>Contenido 1: </label><a href="../pdf/1.pdf" download="Semana1.pdf">Unidad 1</a>
                        <div class="dropdown-divider"></div>
                        <label>Video:</label><a href="https://youtu.be/jg5287G8Sek" target="_blank"><button class="btn btn-link">1 La Educación Financiera</button></a>
                    </div>
                </div>

                <button class="list-group-item btn btn-primary" type="button" data-toggle="collapse" data-target="#cuadro2" aria-expanded="false" aria-controls="cuadro2">Unidad 2</button>
                <div class="collapse" id="cuadro2">
                    <div class="card card-body">
                        <label>Contenido 2: </label><a href="../pdf/2 El uso del dinero.pdf" download="Semana2.pdf">Unidad 2</a>
                        <div class="dropdown-divider"></div>
                        <label>Video:</label><a href="https://youtu.be/_xUClBnheFg" target="_blank"><button class="btn btn-link">2 El uso del dinero</button></a>
                    </div>
                </div>

                <button class="list-group-item btn btn-primary" type="button" data-toggle="collapse" data-target="#cuadro3" aria-expanded="false" aria-controls="cuadro3">Unidad 3</button>
                <div class="collapse" id="cuadro3">
                    <div class="card card-body">
                        <label>Contenido 3: </label><a href="../pdf/3 La Tarjeta de Crédito.pdf" download="Semana3.pdf">Unidad 3</a>
                        <div class="dropdown-divider"></div>
                        <label>Video:</label><a href="https://youtu.be/QuYrCuShVl4" target="_blank"><button class="btn btn-link">3 La Tarjeta de Crédito</button></a>
                    </div>
                </div>

                <button class="list-group-item btn btn-primary" type="button" data-toggle="collapse" data-target="#cuadro4" aria-expanded="false" aria-controls="cuadro4">Unidad 4</button>
                <div class="collapse" id="cuadro4">
                    <div class="card card-body">
                        <label>Video:</label><a href="https://youtu.be/mAVPlT8BxSs" target="_blank"><button class="btn btn-link">4 El Ahorro</button></a>
                    </div>
                </div>

                <button class="list-group-item btn btn-primary" type="button" data-toggle="collapse" data-target="#cuadro5" aria-expanded="false" aria-controls="cuadro5">Unidad 5</button>
                <div class="collapse" id="cuadro5">
                    <div class="card card-body">
                        <label>Contenido 5: </label><a href="../pdf/5 La Inversión.pdf" download="Semana5.pdf">Unidad 5</a>
                        <div class="dropdown-divider"></div>
                        <label>Video:</label><a href="https://youtu.be/gzXeIylS9KA" target="_blank"><button class="btn btn-link">5 La Inversión</button></a>
                    </div>
                </div>

                <button class="list-group-item btn btn-primary" type="button" data-toggle="collapse" data-target="#cuadro6" aria-expanded="false" aria-controls="cuadro6">Unidad 6</button>
                <div class="collapse" id="cuadro6">
                    <div class="card card-body">
                        <label>Contenido 6: </label><a href="../pdf/6 El Crédito de Consumo.pdf" download="Semana6.pdf">Unidad 6</a>
                        <div class="dropdown-divider"></div>
                        <label>Video:</label><a href="https://youtu.be/cNlGJln8QTs" target="_blank"><button class="btn btn-link">6 el Crédito de Consumo</button></a>
                    </div>
                </div>

                <button class="list-group-item btn btn-primary" type="button" data-toggle="collapse" data-target="#cuadro7" aria-expanded="false" aria-controls="cuadro7">Unidad 7</button>
                <div class="collapse" id="cuadro7">
                    <div class="card card-body">
                        <label>Contenido 7: </label><a href="../pdf/7 El Crédito Hipotecario.pdf" download="Semana7.pdf">Unidad 7</a>
                        <div class="dropdown-divider"></div>
                        <label>Video:</label><a href="https://youtu.be/7qO3Y496ZY0" target="_blank"><button class="btn btn-link">7 El Crédito Hipotecario</button></a>
                    </div>
                </div>

                <button class="list-group-item btn btn-primary" type="button" data-toggle="collapse" data-target="#cuadro8" aria-expanded="false" aria-controls="cuadro8">Unidad 8</button>
                <div class="collapse" id="cuadro8">
                    <div class="card card-body">
                        <label>Video:</label><a href="https://youtu.be/eeLlaxihua0" target="_blank"><button class="btn btn-link">8 La Hoja de Resumen</button></a>
                    </div>
                </div>

                <button class="list-group-item btn btn-primary" type="button" data-toggle="collapse" data-target="#cuadro9" aria-expanded="false" aria-controls="cuadro9">Unidad 9</button>
                <div class="collapse" id="cuadro9">
                    <div class="card card-body">
                        <label>Contenido 9: </label><a href="../pdf/9 La Jubilación.pdf" download="Semana9.pdf">Unidad 9</a>
                        <div class="dropdown-divider"></div>
                        <label>Video:</label><a href="https://youtu.be/qkvdGVQkw-s" target="_blank"><button class="btn btn-link">9 La Jubilación</button></a>
                    </div>
                </div>

                <button class="list-group-item btn btn-primary" type="button" data-toggle="collapse" data-target="#cuadro10" aria-expanded="false" aria-controls="cuadro10">Unidad 10</button>
                <div class="collapse" id="cuadro10">
                    <div class="card card-body">
                        <label>Contenido 10: </label><a href="../pdf/10A Calidad de Vida y Educación Financiera.pdf" download="Semana10A.pdf">Unidad 10 A</a>
                        <a href="../pdf/10B Calidad de Vida y Educación Financiera.pdf" download="Semana10B.pdf">Unidad 10 B</a>
                        <div class="dropdown-divider"></div>
                        <label>Video:</label><a href="https://youtu.be/aj3ut5Njjgs" target="_blank"><button class="btn btn-link">10 Calidad de Vida y Educación Financiera</button></a>
                    </div>
                </div>
            </div>
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