<?php
//echo "Hola";
//var_dump($_GET);
echo "Su nombre es".$_GET['Nombre'];
echo "Su apellido es".$_GET['Apellido'];
$archivo=fopen('usuario.txt','a');
fwrite($archivo,$_GET['Nombre']."\n");
?>