<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre  = htmlspecialchars($_POST['nombre']);
    $correo  = htmlspecialchars($_POST['correo']);
    $asunto  = htmlspecialchars($_POST['asunto']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $destinatario = "ata.rg@epn.edu.ec";

    $asuntoCorreo = "Nuevo mensaje desde la página web ATA Research Group";

    $contenido = "
    <html>
    <head>
        <style>
            body{
                font-family: Arial, sans-serif;
                background-color:#f4f4f4;
                padding:20px;
            }

            .container{
                background:#ffffff;
                border-radius:10px;
                padding:30px;
                max-width:700px;
                margin:auto;
                border:1px solid #e0e0e0;
            }

            .header{
                background:#0A2540;
                color:white;
                padding:20px;
                text-align:center;
                border-radius:8px;
            }

            .header h2{
                margin:0;
            }

            .section{
                margin-top:25px;
            }

            .label{
                font-weight:bold;
                color:#0A2540;
            }

            .value{
                margin-bottom:15px;
                color:#333333;
            }

            .message-box{
                background:#f7f9fc;
                border-left:4px solid #00B4D8;
                padding:15px;
                margin-top:10px;
                white-space: pre-wrap;
            }

            .footer{
                margin-top:30px;
                text-align:center;
                color:#777;
                font-size:12px;
            }
        </style>
    </head>

    <body>

        <div class='container'>

            <div class='header'>
                <h2>Nuevo mensaje recibido</h2>
                <p>ATA Research Group - Página Web</p>
            </div>

            <div class='section'>
                <div class='label'>Nombre del remitente:</div>
                <div class='value'>{$nombre}</div>

                <div class='label'>Correo electrónico:</div>
                <div class='value'>{$correo}</div>

                <div class='label'>Asunto:</div>
                <div class='value'>{$asunto}</div>

                <div class='label'>Mensaje:</div>
                <div class='message-box'>{$mensaje}</div>
            </div>

            <div class='footer'>
                Este mensaje fue enviado automáticamente desde el formulario de contacto del sitio web de ATA Research Group.
            </div>

        </div>

    </body>
    </html>
    ";

    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= "From: ATA Research Group <no-reply@epn.edu.ec>" . "\r\n";
    $headers .= "Reply-To: $correo" . "\r\n";

    if(mail($destinatario, $asuntoCorreo, $contenido, $headers)){
        echo "
        <script>
            alert('Mensaje enviado correctamente.');
            window.location.href='contacto.html';
        </script>";
    } else {
        echo "
        <script>
            alert('Error al enviar el mensaje.');
            window.history.back();
        </script>";
    }
}

?>