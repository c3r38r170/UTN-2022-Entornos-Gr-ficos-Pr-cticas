<?php
    $fecha=date("d-m-Y");
    $hora= date("H :i:s");
    $destino=$_POST['email'];
    $asunto="Consulta";
    $desde="From:entornosgraficos@frroutn.com";
    $cuerpo= "
    \n
        Tu amigo te recomienda el siguiente sitio web: {$_SERVER['HTTP_HOST']}
    \n 
    ";
    mail($destino,$asunto,$cuerpo,$desde);
    echo "Se ha recomendado a su amigo.";
?>
