<?php
//die();
session_start();
$facturatotal=0;
$miObjeto = new stdClass();
$miObjeto->Factura = $_GET['Factura'];
$miObjeto->precioPorHora=100;
date_default_timezone_set('America/Argentina/Buenos_Aires');
$horaSalida = mktime(); 
$Bandera=1;
//var_dump($miObjeto);
//die();


$archivo = fopen('listadopatente.txt','r');

while(!feof($archivo)) 
	{
		$objeto = json_decode(fgets($archivo));
    echo $objeto->Patente;
    //var_dump($objeto);
		if ($objeto->Patente ==$miObjeto->Factura) {
      $horasEstacionados=($horaSalida-$objeto->fechaIngreso);


      $debe=($miObjeto->precioPorHora*$horasEstacionados);
      $miObjeto->debe=$debe;
      $arch = fopen('facturas.txt', 'a');
           fwrite($arch, json_encode($miObjeto)."\n");
           fclose($arch);
//echo $debe;
      header("Location: mifactura.php?debe=".$debe);
      exit();
      $facturatotal=$facturatotal+$miObjeto->debe;
    }
//     if($Bandera==1){
// 	header("Location: no.php");
// 	exit();
// }
	}	
echo $facturatotal;
fclose($archivo);
?>
