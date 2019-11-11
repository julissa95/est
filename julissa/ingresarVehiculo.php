<?php
$MiObjeto=new stdClass();
date_default_timezone_set('America/Argentina/Buenos_Aires');
$horaIngreso = mktime();
$MiObjeto->Patente=$_GET['Vehiculo'];
$MiObjeto->fechaIngreso=$horaIngreso;
var_dump($MiObjeto);
//die();
$archivo = fopen('listadopatente.txt', 'a');
fwrite($archivo,json_encode($MiObjeto)."\n");
fclose($archivo);
?>