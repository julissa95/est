<?php
    
$checkUsuario = $_GET['Nombre'];
$checkPassword = $_GET['Apellido'];
	
$Bandera=1;
$archivo = fopen("listadoregistro.txt", "r");
while(!feof($archivo)) 
	{
		$objeto = json_decode(fgets($archivo));
		if ($objeto->Apellido == $checkPassword) 
		{
			if($objeto->Nombre == $checkUsuario)				 	
			{
				$Bandera=0;
				
			
			}
		}
				 	
		
	}	
if($Bandera==0)
	{	
		session_start();
		$_SESSION['Nombre']=$checkUsuario;
		header("Location: OK.php?login=exito");
		exit();
	}
	else 
	{
		header("Location: NO.php");
		exit();
				 	
	}
fclose($archivo);
		
		
?>