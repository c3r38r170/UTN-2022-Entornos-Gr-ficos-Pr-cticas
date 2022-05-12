<?php 
$destinatario = "entornosgraficos@utnfrro.com";
$asunto = " Ejercicio 1 - Practica 5 PHP 2022";
$cuerpo = '
            <html>
            <head>
            <title>Envio de mail</title>
            </head>
                <body>
                    <h1>Entornos Gráficos 2022</h1>
                    <p>
                    <b>Ejercicio 1 - Practica 5 PHP</b>.
                    </p>
                </body>
            </html>
            ';
$headers .= "Content-type:text/html; charset=iso-8859- 1\r\n"; 
$headers .= "From: frangiangiordano@gmail.com\r\n";

mail($destinatario,$asunto,$cuerpo,$headers)
?>
