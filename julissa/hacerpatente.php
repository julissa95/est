<?php
$MiObjeto=new stdClass();
date_default_timezone_set('America/Argentina/Buenos_Aires');
$MiObjeto->Patente=$_GET['Vehiculo'];

$horaIngreso = mktime();
$MiObjeto->Patente=$_GET['Vehiculo'];
$hora = mktime();
$MiObjeto->fechaIngreso=$hora;
$Bandera=1;

$archivo = fopen("listadopatente.txt", "a");
fwrite($archivo,json_encode($MiObjeto)."\n");
$Bandera=0;
if($Bandera==0)
	{	
		header("Location: Ok.php");
		exit();
	}
	else 
	{

		header("Location: NO.php");
		exit();
				 	
	}
fclose($archivo);
?>