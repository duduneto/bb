<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Load Composer's autoloader
// require 'vendor/autoload.php';
// $bodyEmail = require('assets/email.html');
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';            // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'gulizraizer@gmail.com';                 // SMTP username
    $mail->Password = 'fetho.100203';                           // SMTP password
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );                       // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('contato@barroseborges.com.br', 'Barros & Borges');
    $mail->addAddress('dudumatosneto@gmail.com','mariliaduarteneto@gmail.com');     // Add a recipient
    // $mail->addAddress('gulizraizer@gmail.com');               // Name is optional
    // $mail->addReplyTo('dudumatosneto@gmail.com', 'Information');
    // $mail->addCC('contato@barroseborges.com.br');
    // $mail->addBCC('contato@barroseborges.com.br');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Pedido de Simulacao de '.$nome;
    $mail->Body    = "<!DOCTYPE html>
    <html lang='pt'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv='X-UA-Compatible' content='ie=edge'>
        <title>Document</title>
        <style>
        body{
            color:rgb(0, 36, 68);

        }
        .header-email{
            color: aliceblue;
            height: 30vh;
            width: 100%;
            background-color: rgb(2, 11, 90);
        }
        .title-email{
            height: 100%;
            width: auto;
            text-align: center;
            padding-top: 12vh;
        }
        .footer-email{
            height: 20vh;
            width: 100%;
            background-color: rgb(0, 0, 0);
        }
        .text-center{
            text-align: center;
        }
        .primabox{
            height: 10vh;
            width: 100%;
            padding-top: 5vh;
        }
        .left{
            text-align: left;
            padding-left: 10%;
            font-size: 20px;
        }
        .right{
            text-align: right;
            padding-left: 45%;
            font-size: 20px;
            font-weight: 700;
        }
        </style>
    </head>
    <body>
        <header class='header-email' >
            <h1 class='title-email' >Pedido de Simulação</h1>
        </header>
        <section class='body-email'>
            <div class='title-body-email'>
                <div class='text-center' style='margin-top:7em;'>
                    <h1>Você recebeu um pedido de Simulação!</h1>
                </div>
            </div>
            <div class='table'>
                <div class='primabox'>
                    <span class='left' >Nome:</span>
                    <span class='right' >$nome</span>
                </div>
                <div class='primabox'>
                    <span class='left' >Email:</span>
                    <span class='right' >$email</span>
                </div>
                <div class='primabox'>
                    <span class='left' >CPF:</span>
                    <span class='right' >$cpf</span>
                </div>
                <div class='primabox'>
                    <span class='left' >Telefone:</span>
                    <span class='right' >$tel</span>
                </div>
                <div class='primabox'>
                    <span class='left' >Seguro:</span>
                    <span class='right' >$tipo_seguro</span>
                </div>
            </div>
        </section>
        <footer class='footer-email'>
    
        </footer>
    </body>
</html>";
    $mail->IsHTML(true);
    $mail->AltBody = 'Foi feito um pedido de simulação para você!';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}