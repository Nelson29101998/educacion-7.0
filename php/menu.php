<?php
session_start();
if (!isset($_SESSION["Usuario"])) {
    header("location: ../html/registrauser.html");
} else {
?>
    <?php
    $use = $_SESSION["Usuario"];
    $_SESSION["Usuario"] = $use;
    ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../css/mdbootstrap/css/mdb.min.css">
        <link rel="stylesheet" href="../fontawesome/css/all.min.css">
        <link rel="stylesheet" href="../css/stylesidebar.css">
        <title>Inicio de la Cuenta</title>
    </head>

    <body style="background-color: #ffffff;">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="micuenta.php"><button type="button" class="btn btn-primary"><i class="fas fa-user"></i> Mi Cuenta: <span><?php echo $_SESSION['Nombre'] . " " . $_SESSION['Apellidos']; ?></button> </a>
            <a href="cursos.php"><button type="button" class="btn btn-primary"><i class="fas fa-book-reader"></i> Cursos de educación financiera</button></a>
            <a href="calculadorafinanzas.php"><button type="button" class="btn btn-primary"><i class="fas fa-calculator"></i> App Calculadora de finanzas personales</button></a>
            <a href="gastos.php"><button type="button" class="btn btn-primary"><i class="fas fa-hand-holding-usd"></i> App Control de Gastos</button></a>
            <a href="ayuda.php"><button type="button" class="btn btn-primary"><i class="fas fa-life-ring"></i> Ayuda</button></a>
            <a href="cerrar.php"><button type="button" class="btn btn-primary"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</button></a>
        </div>

        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Abrir</span>

        <div class="animated fadeInDown">
            <h1 style="text-align:center;">¡Bienvenido <span><?php echo $_SESSION['Nombre']; ?>!</span></h1>
        </div>
        <center>
            <img src="http://drive.google.com/uc?id=1fBnqweQV2tAszIW5zAsn7_yQ7GI7FwD-" alt="pro" style="width: 500px;">
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

<?php
}
?>