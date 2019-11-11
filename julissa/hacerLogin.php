<?php
    
$checkUsuario = $_GET['Usuario'];
$checkPassword = $_GET['Contraseña'];
	
/*$Bandera=1;
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
fclose($archivo); */

// Se conecta al SGBD 
  if(!($iden =  mysqli_connect("localhost", "root", "","phpdatabase"))) 
    die("Error: No se pudo conectar");
	
  // Selecciona la base de datos 
 
	
  // Sentencia SQL: muestra todo el contenido de la tabla "books" 
  $sentencia = "SELECT * FROM usuario where nombre='$checkUsuario' and clave='$checkPassword'"; 
  // Ejecuta la sentencia SQL 
  $resultado = mysqli_query($iden,$sentencia); 
  $count = $resultado->num_rows;
  if($count<=0) {
		header("Location: login.php");
		exit();
  }else{
  	session_start();
		$_SESSION['Nombre']=$checkUsuario;
		header("Location: OK.php?login=exito");
		exit();
  }
    

 	
		
?>