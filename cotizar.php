<?php
include("conexion.php");
if(isset($_POST['enviar'])){
	if (strlen($_POST['nombre'])>1 && strlen($_POST['telefono'])) {
	$nombre=$_POST['nombre'] ;
	$telefono=$_POST['telefono'] ;
	$correo=$_POST['correo'] ;
	$descripcion=$_POST['descripcion'] ;
	$servicio=$_POST['servicio'];
	$presupuesto=$_POST['presupuesto'];
	$InsertarDatos="INSERT INTO cotizar(nombre, telefono, correo, descripcion, servicio, presupuesto) VALUES ('$nombre','$telefono', '$correo', '$descripcion','$servicio','$presupuesto')";
	$EjecutarInsertar=mysqli_query($enlace, $InsertarDatos);
	if ($EjecutarInsertar) {
		?>
	<h3 class="ok">Cotizacion enviada</h3>
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