<?php

include("conexion.php");

if(isset($_POST['ingresar'])){
	$correo=$_POST['correo'] ;
	$pass=$_POST['pass'] ;
	$consulta="SELECT * FROM crear_usuario WHERE correo='$correo' and pass='$pass' ";
	$resultado=mysqli_query($enlace, $consulta);
	$filas=mysqli_num_rows($resultado);
	if ($filas>0)
	 {
	 	$_SESSION['correo']='correo' ;
		header("location:iniciado.php");

	}
	else{
		echo "Error en la autenficacion";
	}

}

?>