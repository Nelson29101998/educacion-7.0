<?php
session_start();
include "conexion.php";
if(isset($_GET['cor'])){
$correo= $_GET['cor'];
$_SESSION["Correo"] = $correo;
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/mdbootstrap/css/mdb.min.css">
    <title>Cambiar</title>
</head>

<body>
    <div class="text-center">
        <p>
            <h1>Cambiar la contraseña</h1>
            <div class="container">
                <form name="forml" id="forml" method="POST" onsubmit="return formulario()" action="cambiarpass.php">
                    <div class="form-group">
                        <label for="pass1">Nueva Contraseña:</label>
                        <input type="password" class="form-control" name="pass1" id="pass1" placeholder="Nueva Contraseña">

                        <label for="pass2">Repetir contraseña:</label>
                        <input type="password" class="form-control" name="pass2" id="pass2" placeholder="Repetir Contraseña">
                        <div class="text-center">
                            <input type="submit" class="btn btn-primary" name="sig" id="sig" value="Cambiar">
                            <a href="cerrar.php"><button type="button" class="btn btn-primary">Cancelar</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript">
        function formulario() {
            var pa1 = document.forms['forml']['pass1'].value;
            var pa2 = document.forms['forml']['pass2'].value;

            if(pa1 == "" || pa1 == null){
                alert("Introduzca su contraseña");
                return false;
            }

            if(pa2 == "" || pa2 == null){
                alert("Introduzca su repetir contraseña");
                return false;
            }

            if(pa1 != pa2){
                alert("¡Error! Las contraseña deben ser indénticas");
                return false;
            }
        }
    </script>
</body>

</html>

<?php 
}
?>