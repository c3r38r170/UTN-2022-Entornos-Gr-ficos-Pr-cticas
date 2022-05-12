<?php
    $fecha=date("d-m-Y");
    $hora= date("H :i:s");
    $destino="entornosgraficos@frroutn.com";
    $asunto="Consulta";
    $desde='From:' .$_POST['email'];
    $consulta= "
    \n
        Nombre: $_POST[nombre]\n
        Apellido: $_POST[apellido]\n
        Email: $_POST[email]\n
        Consulta: $_POST[texto]\n
        Enviado: $fecha a las $hora\n
    \n 
    ";
    mail($destino,$asunto,$consulta,$desde);
    echo "Su consulta ha sido enviada correctamente";
?>
