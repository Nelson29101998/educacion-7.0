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
  <title>Ayuda</title>
</head>

<body style="background-color: #ffffff;">
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="menu.php"><button type="button" class="btn btn-primary"><i class="fas fa-home"></i> Inicio</button> </a>
    <a href="micuenta.php"><button type="button" class="btn btn-primary"><i class="fas fa-user"></i> Mi Cuenta: <span><?php echo $_SESSION['Nombre'] . " " . $_SESSION['Apellidos']; ?></button> </a>
    <a href="cursos.php"><button type="button" class="btn btn-primary"><i class="fas fa-book-reader"></i> Cursos de educación financiera</button></a>
    <a href="calculadorafinanzas.php"><button type="button" class="btn btn-primary"><i class="fas fa-calculator"></i> App Calculadora de finanzas personales</button></a>
    <a href="gastos.php"><button type="button" class="btn btn-primary"><i class="fas fa-hand-holding-usd"></i> App Control de Gastos</button></a>
    <a href="cerrar.php"><button type="button" class="btn btn-primary"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</button></a>
  </div>

  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Abrir</span>

  <div class="animated fadeInDown">
    <h1 style="text-align: center;"> ¿Necesito para Ayudar? </h1>
  </div>
  <div class="animated fadeIn">
    <form id="forml" name="forml" method="post" onsubmit="return formularios()" action="cargaayuda.php">
      <div class="form-group">
        <table align="center">
          <tbody>
            <tr>
              <td>
                <select class="form-control" id="ayuda" name="ayuda">
                  <option value="sele">Selección...</option>
                  <option value="Error">Error</option>
                  <option value="El contenido no aparece">El contenido no aparece</option>
                  <option value="No funciona su cuenta ni contraseña">No funciona su cuenta ni contraseña</option>
                  <option value="Otro">Otro</option>
                </select>
              </td>
            </tr>
            <tr>
              <td style="text-align: center;"> <textarea class="form-control" name="pregunta" rows="10" cols="30"></textarea> </td>
            </tr>
            <tr>
              <td style="text-align: right;"> <label>Mail: </label><input class="form-control" name="correo" size="30" type="email"> </td>
            </tr>
            <tr>
              <td style="text-align: center;">
                <input class="btn btn-primary" name="enviar" value="Enviar" type="submit">
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </form>
  </div>

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
    function formularios() {
      var sel = document.forms["forml"]["ayuda"].value;
      var textos = document.forms["forml"]["pregunta"].value;
      var cor = document.forms["forml"]["correo"].value;

      if (sel == "sele") {
        alert("poner el selección");
        return false;
      }
      if (textos == null || textos == "") {
        alert("Te falta ingresa de texto");
        return false;
      }
      if (cor == null || cor == "") {
        alert("Ingresa su mail");
        return false;
      }
    }
  </script>
</body>

</html>