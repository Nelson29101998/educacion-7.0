<?php
//Heroku

$servername = "i2cpbxbi4neiupid.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "k5ahga8faj2128ct";
$password = "hovzlntua9665yvb";
$bd = "qlx4qct0gi7pavjh";


//XAMPP
/*
$servername = "localhost";
$username = "root";
$password = "";
$bd = "cuentafinanciera";
*/
$conexion = new mysqli($servername, $username, $password, $bd);
if ($conexion->connect_error) {

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
        <title>No encuentro de la base de datos</title>
    </head>

    <body>
        <center>
            <h1>¡No encontrado la base de datos!</h1>
            <br>
            <img src="https://drive.google.com/uc?id=1GEjDiM8KaSZRLSyL48ckNbQXNkq88-SM" class="img-thumbnail rounded" width="400">
        <br>
        <a href="cerrar.php"><button type="button" class="btn btn-primary"><i class="fas fa-sign-out-alt"></i> Volver</button></a>
        </center>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="../js/bootstrap/bootstrap.min.js"></script>
    </body>

    </html>
<?php
}
?>
