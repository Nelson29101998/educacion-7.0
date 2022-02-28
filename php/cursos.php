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
                        <label>Contenido 1: </label>
                        <a href="https://drive.google.com/file/d/1V9Cw4pq-66EkqyKDVMPNFDHp8rx6qM4W/view?usp=sharing" target="_blank">
                            Unidad 1
                        </a>
                        <div class="dropdown-divider"></div>
                        <label>Video:</label><a href="https://youtu.be/jg5287G8Sek" target="_blank"><button class="btn btn-link">1 La Educación Financiera</button></a>
                    </div>
                </div>

                <button class="list-group-item btn btn-primary" type="button" data-toggle="collapse" data-target="#cuadro2" aria-expanded="false" aria-controls="cuadro2">Unidad 2</button>
                <div class="collapse" id="cuadro2">
                    <div class="card card-body">
                        <label>Contenido 2: </label>
                        <a href="https://doc-00-60-apps-viewer.googleusercontent.com/viewer/secure/pdf/9lor63ga7k8sfl308eldi3bd7rrne5m5/cdr2c4ra4p0drpvromgarumjg7ro1863/1595426775000/drive/04262136302289668855/ACFrOgB1HFdsjXUGpDq3UX4HjQ_U2Ejs1Smee4_tnH3dicyeWmzDOPFA6Y2cOQ3KK1C2UN22eb25dopD-fRplUvzEVng9VhGAtv3yKPcUCvI0TNdBh55-eOYvLLtrG1eGhu0I9sZdk5fNnRrYfMs?print=true" target="_blank">
                            Unidad 2
                        </a>
                        <div class="dropdown-divider"></div>
                        <label>Video:</label><a href="https://youtu.be/_xUClBnheFg" target="_blank"><button class="btn btn-link">2 El uso del dinero</button></a>
                    </div>
                </div>

                <button class="list-group-item btn btn-primary" type="button" data-toggle="collapse" data-target="#cuadro3" aria-expanded="false" aria-controls="cuadro3">Unidad 3</button>
                <div class="collapse" id="cuadro3">
                    <div class="card card-body">
                        <label>Contenido 3: </label>
                        <a href="https://doc-0g-60-apps-viewer.googleusercontent.com/viewer/secure/pdf/9lor63ga7k8sfl308eldi3bd7rrne5m5/geefs5i0ht31g2h3ag6fg2e8ec39vo3b/1595426850000/drive/04262136302289668855/ACFrOgD6AwA3i8xQF9OseytsSCVO1XBQF4wgHkTv71zFSnkNKqPh5YydxoLmuS3yN5g5BiYjGkzKRxGf3Ubql6v8CTOLbbMrkb9oE8KSu7_QOBO4CUMrE6MsrKppRsfKbmfcdkJBuhlJXEb4Tu9U?print=true" target="_blank">
                            Unidad 3
                        </a>
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
                        <label>Contenido 5: </label>
                        <a href="https://doc-0k-60-apps-viewer.googleusercontent.com/viewer/secure/pdf/9lor63ga7k8sfl308eldi3bd7rrne5m5/en8lrufcp6op132jr7fpqlftuonn9258/1595426925000/drive/04262136302289668855/ACFrOgBHciYXvgNd3z4qDZVbclbHITDsk6wFru4saqSQZ08iHMxVgu44CgroP1sKMb1pqGkwCjR09l0HwoHAUoaRQK6czRVEpLdmCobvmEAA0bB6JvB_LlqtBRG3zqB_TmyswYKQJqJuiUiFrCon?print=true&nonce=nsibv2bo8drd6&user=04262136302289668855&hash=urjvk7hq7v0nco91n3bgk7bau9671619" target="_blank">
                            Unidad 5
                        </a>
                        <div class="dropdown-divider"></div>
                        <label>Video:</label><a href="https://youtu.be/gzXeIylS9KA" target="_blank"><button class="btn btn-link">5 La Inversión</button></a>
                    </div>
                </div>

                <button class="list-group-item btn btn-primary" type="button" data-toggle="collapse" data-target="#cuadro6" aria-expanded="false" aria-controls="cuadro6">Unidad 6</button>
                <div class="collapse" id="cuadro6">
                    <div class="card card-body">
                        <label>Contenido 6: </label>
                        <a href="https://doc-0c-60-apps-viewer.googleusercontent.com/viewer/secure/pdf/9lor63ga7k8sfl308eldi3bd7rrne5m5/11lro7tkfelagh79mqqvk9f65ck55up9/1595426925000/drive/04262136302289668855/ACFrOgDslsqLMxF_2t4CNDucmgfWUJfyM2jQ3cUxEjduPzn9Nw7TatxYVBSzPwXZw8KXhCq0P6Z1MgZw85Ev-Q_dGnjf7aizCn3-xB7WF51aWDjfg9tNY4ZPqk6chfdRpOSOK_rD_NSmCStWOOEY?print=true" target="_blank">
                            Unidad 6
                        </a>
                        <div class="dropdown-divider"></div>
                        <label>Video:</label><a href="https://youtu.be/cNlGJln8QTs" target="_blank"><button class="btn btn-link">6 el Crédito de Consumo</button></a>
                    </div>
                </div>

                <button class="list-group-item btn btn-primary" type="button" data-toggle="collapse" data-target="#cuadro7" aria-expanded="false" aria-controls="cuadro7">Unidad 7</button>
                <div class="collapse" id="cuadro7">
                    <div class="card card-body">
                        <label>Contenido 7: </label>
                        <a href="https://doc-0c-60-apps-viewer.googleusercontent.com/viewer/secure/pdf/9lor63ga7k8sfl308eldi3bd7rrne5m5/55eogt9kjivbgces2qjcgtv6cbk1k2bf/1595427000000/drive/04262136302289668855/ACFrOgBi5KfOXJDfzgw-PabfMz3Uc-Ui80fbF-dyXVhml6fMr5PFOm4vKCoLMDpNUwsyZiITCkQB2d58zI2wjxOhCum9oSPqbg1qNUmfmFEifwhs0cE6VoPZr1_PA2QbcvinYZtq66oJQLZebAcl?print=true" target="_blank">
                            Unidad 7
                        </a>
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
                        <label>Contenido 9: </label><a href="https://doc-0k-60-apps-viewer.googleusercontent.com/viewer/secure/pdf/9lor63ga7k8sfl308eldi3bd7rrne5m5/hejm2ejltlu730rkp6kb15soaceoueuj/1595427000000/drive/04262136302289668855/ACFrOgBORTcC9icDy6LN6Hf8qWtmR7tqOsaW-EubVQfdHEfREuQqY31F9idGMwK_w47YmeluzjmCtGyJXLyi4vF-rXnVERxGDlvP8fgDRV9j-1WYV6o1DHKTq4WPkN05q9I4lorm-L1cuLTlde6v?print=true" target="_blank">
                            Unidad 9
                        </a>
                        <div class="dropdown-divider"></div>
                        <label>Video:</label><a href="https://youtu.be/qkvdGVQkw-s" target="_blank"><button class="btn btn-link">9 La Jubilación</button></a>
                    </div>
                </div>

                <button class="list-group-item btn btn-primary" type="button" data-toggle="collapse" data-target="#cuadro10" aria-expanded="false" aria-controls="cuadro10">Unidad 10</button>
                <div class="collapse" id="cuadro10">
                    <div class="card card-body">
                        <label>Contenido 10: </label><a href="https://doc-0k-60-apps-viewer.googleusercontent.com/viewer/secure/pdf/9lor63ga7k8sfl308eldi3bd7rrne5m5/gu7mil3uvdudjq4vtmkrlpor0vilr9e3/1595427075000/drive/04262136302289668855/ACFrOgA9O21mqUBOVEH70zBNhB4JeaWC1Uer-S2YyspXEENqMVvMLt2vtazxQJVH1QyG_N6XpKpBQAtq5vf6KOB7kHsW5xX48v8HbWo3FmNt94MxvnN5JQFRvtrptsp6ohRdSfAc35esEMIb97Zu?print=true" target="_blank">
                            Unidad 10 A
                        </a>
                        <a href="https://doc-0o-60-apps-viewer.googleusercontent.com/viewer/secure/pdf/9lor63ga7k8sfl308eldi3bd7rrne5m5/bd99pr2ldh83jqg4ongvku59v8193jrc/1595427075000/drive/04262136302289668855/ACFrOgAh79BmpInl0cxPFC_vq5oo_HHtjdRyrHyW916rQTtrAQAtrfgdXNzT_hbp7iA4ANjyXcD4xKobWn4zp9axANrZLm-vlaUeLjdBe-EvqNSHClHPdqE4mvtZItyq3rTZ7OTCMo6OXgR6hzpr?print=true" target="_blank">
                            Unidad 10 B
                        </a>
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
