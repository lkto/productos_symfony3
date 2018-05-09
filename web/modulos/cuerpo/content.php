<?php 

$archivo = @$_GET["modulo"].".php";

if (file_exists($archivo) ) {
	include_once($archivo);
	
}
else
{
	include_once("modulos/inicio/index.php");
	
}


?>