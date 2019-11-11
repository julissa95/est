<?php
session_start();
?>

<?php
if (isset($_SESSION['Nombre']))
{
?>
<h1>Bienvenido</h1>
<?php
}
else
{
	echo "no estas igual";
}

?>