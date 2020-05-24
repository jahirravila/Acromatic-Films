<?php
include("conexion.php");
if(isset($_POST['Registrar'])){
	if (strlen($_POST['nombre'])>1 && strlen($_POST['correo'])>1 && strlen($_POST['pass'])>1 && strlen($_POST['telefono'])>1 ) {
	$nombre=$_POST['nombre'] ;
	$correo=$_POST['correo'] ;
	$pass=$_POST['pass'] ;
	$telefono=$_POST['telefono'];
	$InsertarDatos="INSERT INTO crear_usuario(nombre, correo, pass, telefono) VALUES ('$nombre', '$correo', '$pass','$telefono' )";
	$EjecutarInsertar=mysqli_query($enlace, $InsertarDatos);
	if ($EjecutarInsertar) {
		?>
	<h3 class="ok"> Te has inscrito correctamente</h3>
		<?php
	}
	else{
		?>
	<h3 class="bad">Ocurrio un error</h3>
		<?php

	}
	}
	
	
}	
?>