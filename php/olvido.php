<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

include "conexion.php";

$mail = $_POST['correo'];

$cuenta = "SELECT * FROM usuario WHERE Mail = '$mail'";
$res = mysqli_query($conexion, $cuenta);
$enc = mysqli_fetch_array($res, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/mdbootstrap/css/mdb.min.css">
    <title>Bucando</title>
</head>

<body>
    <?php
    if (isset($enc['Mail'])) {

        $para = $enc['Mail'];

        $mail = new PHPMailer(true);

        try {
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            //Server settings
            $mail->SMTPDebug = 0;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'nelsonmouatvergara@gmail.com';                     // SMTP username
            $mail->Password   = 'nelson29101998';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('nelsonmouatvergara@gmail.com', 'Educación Finanziera');
            $mail->addAddress($para);

            // Content
            $mail->CharSet = 'UTF-8';
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Educación financiera Renicia la contraseña';
            $mail->Body    = "<h1>Educación financiera Renicia la contraseña</h1>
            Haga clic: <a href='https://educacionfinanciera.herokuapp.com/php/cambiarcont.php?cor=$para'>Renicia la contraseña</a>";

            $mail->send();
            echo "<center><h1>Mensaje enviado exito</h1>
            <a href='../inicio.html'><button type='button' class='btn btn-primary'>Volver</button></a></center>";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "<center>
            <p>
            <h1 class='display-4'>Mmm.. Pacere no esta en tu cooreo</h1>
            <a href='../inicio.html'><button type='button' class='btn btn-primary'>Volver</button></a>
            </p>
            </center>";
    }
    ?>
</body>

</html>