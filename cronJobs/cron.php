<?php
require_once "../phpMailer/PHPMailer.php";
require_once "../phpMailer/";
require_once "../phpMailer/Exception.php";

require_once "../Clases/Config.php";
include_once "../Controlador/Admin/login.php";
include_once "../Clases/Login.php";

$ObjectC = new Conexion();
$user = new Login();
$conexion = $ObjectC->Connect();
$userSession = new UserSession();
$user->setUser($userSession->getCurrentUser());
$lol = $user->getID();

$sql = "select evento.titulo as titulo, 
               evento.inicio as fecha, 
               evento.descripcion as descripcion, 
               users.email as email 
               from eventos as evento 
               INNER JOIN user as users 
               ON evento.id_user = users.id_user 
               WHERE users.id_user = $lol";

$result = mysqli_query($conexion, $sql);

global $fecha_envio;
global $titulo;
global $descripcion;
global $email;


foreach ($result as $value) {
    $fecha_envio = $value['fecha'];
    $titulo = $value['titulo'];
    $descripcion = $value['descripcion'];
    $email = $value['email'];
}

if (date('Y-m-d') == $fecha_envio) {
    enviar_correo(
        $fecha_envio,
        $titulo,
        $descripcion,
        $email
    );
}


function enviar_correo($titulo, $descripcion, $email)
{
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'user@example.com';                     //SMTP username
        $mail->Password   = 'secret';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('from@example.com', 'Mailer');
        $mail->addAddress($email, $email);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $titulo;
        $mail->Body    = $descripcion;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
