<?php

use phpMailer\PHPMailer\PHPMailer;
use phpMailer\PHPMailer\SMTP;
use phpMailer\PHPMailer\Exception;

require_once "phpMailer/PHPMailer.php";
require_once "phpMailer/SMTP.php";
require_once "phpMailer/Exception.php";

require_once "../Clases/Config.php";
include_once "../Controlador/Admin/login.php";
include_once "../Clases/Login.php";

$ObjectC = new Conexion();
$user = new Login();
$conexion = $ObjectC->Connect();


$sql = "select users.nombre as nombre,
               users.email as email,            
               evento.titulo as titulo, 
               evento.inicio as fecha, 
               evento.descripcion as descripcion 
               from eventos as evento
               INNER JOIN user as users on evento.id_user = users.id_user";

$result = mysqli_query($conexion, $sql);

global $nombre;
global $fecha_envio;
global $titulo;
global $descripcion;
global $email;

foreach ($result as $value) {

    $nombre = $value['nombre'];
    $fecha_envio = $value['fecha'];
    $titulo = $value['titulo'];
    $descripcion = $value['descripcion'];
    $email = $value['email'];

    date_default_timezone_set('America/Bogota');

    $date_time = new DateTime($fecha_envio);

    $formatted_date_time = $date_time->format('Y-m-d H');
    
    if (date('Y-m-d H') == $formatted_date_time) {
        enviar_correo(
            $nombre,
            $titulo,
            $descripcion,
            $email
        );
    }
}

function enviar_correo($nombre, $titulo, $descripcion, $email)
{
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'agenda.alancarabali@gmail.com';                     //SMTP username
        $mail->Password   = 'vlbizwajcwmsywtv';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('agenda.alancarabali@gmail.com', 'Agenda AF');
        $mail->addAddress($email, $nombre);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "Recordatodio de " . $titulo;
        $mail->Body    =
            "<!DOCTYPE html>
        <html>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>" . $titulo . "</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    font-size: 16px;
                    line-height: 1.5;
                    color: #333333;
                    background-color: #f2f2f2;
                    padding: 20px;
                }
                h1, h2, h3 {
                    margin-top: 0;
                }
                a {
                    color: #0077cc;
                    text-decoration: none;
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
                th, td {
                    padding: 10px;
                    text-align: left;
                    border: 1px solid #cccccc;
                }
            </style>
        </head>
        <body>
            <table>
                <tr>
                    <td>
                        <h1>" . $titulo . "</h1>
                        <p>Bienvenido/a de nuevo a AF AGENDA.</p>
                        <h2>" . $nombre . "</h2>
                        <h3>descripcion del recordatorio.</h3>
                        <p>" . $descripcion . "</p>
                        <img src='http://agenda.alancarabali.ga/Public/images/imagen_27025625.png' alt='Logo'>
                        <p>Visita nuestro <a href='http://alancarabali.ga/'>sitio web</a> para obtener más información.</p>
                    </td>
                </tr>
            </table>
        </body>
        </html>";
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
