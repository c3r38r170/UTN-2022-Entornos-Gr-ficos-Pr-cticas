<?php
	session_start();

	if(!isset($_SESSION['cantidad_de_visitas']))
		$_SESSION['cantidad_de_visitas']=0;

	echo 'Usted visitó esta página '.($_SESSION['cantidad_de_visitas']++).' veces previamente.';
?>