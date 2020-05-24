<?php
include("conexion.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Acromatic Films</title>
	 <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<style>

		body{
			background: url(imagenes/bg.jpg);


		}
		.slider{
			width: 965px;
			overflow: hidden;
			height: 320px;

			
		}
		.slider ul{
			display: flex;
			padding: 0;
			width: 241.2em;
			animation: cambio 20s infinite;
			animation-direction: alternate;
		}
		.slider li{
			width: 100%;
			list-style: none;

		}
		.slider img{
			width: 100%

		}
		@keyframes cambio{
			0% {margin-left: 0;}
			20% {margin-left: 0;}

			25% {margin-left: -100%;}
			45% {margin-left: -100%;}

			50% {margin-left: -200%;}
			70% {margin-left: -200%;}

			75% {margin-left: -300%;}
			100% {margin-left: -300%;}
		}

		.container{
			width: 965px;
			background : white; 
			margin: auto;

			
		}
		.container h1{
			 text-align: center;
    		font-size: 40px;
   			 color: #6a6a6a;
    		margin-top: 50px;
   			 font-weight: 100;
   			 font-family: 'Roboto', sans-serif

		}

		.container .col:hover{
			  transform: translateY(-15px);
    		box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);

		}
		.container .col{
			 width: 235px;
   			 height: 430px;
   			 border-radius: 8px;
   			 box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
   			 overflow: hidden;
   			 margin: 20px;
   			 text-align: center;
   			 transition: all 0.25s;
		}
		.top{
			margin-top:30px ;  
		}
		.menu{
			float:right;

		}
		.menu li{
			display: inline-block;

		border: 4px  #0CD9F1;
			border-radius: 8px;
    		text-align: center;

    	

		}
		.menu a:hover{
			background: #0CD9F1 ;
			color: white;

		}

		.menu a{
			color: #0CD9F1;
			text-decoration:none; 
			padding: 20px;
			border-radius: 8px;
			transition: background 1s, color 1s;



			}

		
		.col{
			width: 275px;
			display: inline-block;
			vertical-align: top;
			text-align: justify;
			padding: 10px;
		}
		.col h2{
			color:  black;
			text-align: center;
			font-family: 'roboto';

		}
		.col p{
			color: black;
			font-family: 'arial';
		}
		.row{
			text-align: center;

		}
		.footer{
			overflow: hidden; 

		}
		.footer a{
			color: #0CD9F1 ;
			text-decoration: none;
			border-radius: 8px;

		}
		.footer span{
			float: left;
			margin-top: 10px;
			margin-left: 30px;
			
		}
		.submenu{
	position: absolute;
	background: #BFF6F4;
	width: 10%;
	visibility: hidden;
	opacity: 0;
	transition: opacity 1.5s;
	border-radius: 8px;
	
}

.submenu li a{
	display: block;
	padding: 20px;
	color: #fff;
	font-family: 'Open sans';
	text-decoration: none;

}

.menu li:hover .submenu{
	visibility: visible;
	opacity: 1;
}
		
		
	</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<img src="imagenes/Acromatic.jpg" height="75" width="295" alt="">
		<ul class="menu top">
			<li><a href="iniciado.php">Inicio</a></li>
			<li><a href="somos_iniciado.html">¿Quiénes somos? </a></li>
			<li><a href="contacto_iniciado.html">Contacto</a></li>
			<li><a href="cotizacion.php">Cotizaciones </a></li>
			<li><a href="index.html"><img src="icon/salir.png"height="25" width="35" alt=""></a></li>
					<ul class="submenu">
						<li><a href="index.html">Cerrar sesión</a></li>
						</ul>
						</ul>
		</div>

			<div class="slider">
				<ul>

				<li><img src="imagenes/port2.jpg"height="320" width="965" alt=""></li>
				<li><img src="imagenes/port1.jpg"height="320" width="965" alt=""></li>
				<li><img src="imagenes/port4.jpg"height="320" width="965" alt=""></li>
				<li><img src="imagenes/port3.jpg"height="320" width="965" alt=""></li>
			</div>
		</ul>
		<h1 class="title">¡Bienvenido, observa las galerias de nuestros servicios!</h1>
		<div class="row">
			<div class="col">
				<img src="imagenes/paisaje.jpg" height="183" width="235"  alt="">
				<a href="galeria_paisajes.html"><h2>Paisajes</h2></a>
				<p>Admira los diferentes paisajes que hemos podido capturar para ti.</p>
				  <a href="#">Leer más</a>
			</div>
			<div class="col">

				<img src="imagenes/eventos.jpg"height="183" width="235" alt="">
				<a href="galeria_eventos.html"><h2>Eventos</h2></a>
				<p>Queremos estan en esos momentos que son importantes para ti y tú familia.</p>
				  <a href="#">Leer más</a>
			</div>
			<div class="col">
				<img src="imagenes/retratos.jpg"height="183" width="235" alt="">
				<a href="galeria_retratros.html"><h2>Retratos</h2></a>
				<p>Aqui puedes expresar tus sentimientos y que los demás admiren tu belleza.</p>
				  <a href="#">Leer más</a>
			</div>
		</div>
		<div class="footer">
			<span><a href="#">Atras</a> | <a href="#">Adelante</a> </span>
			<ul class="menu">
			<li><a href="iniciado.php">Inicio</a></li>
			<li><a href="somos_iniciado.html">¿Quiénes somos? </a></li>
			<li><a href="contacto_iniciado.html">Contacto</a></li>
			<li><a href="cotizacion.php">Cotizaciones </a></li>
			<li><a href="index.html"><img src="icon/salir.png"height="25" width="35" alt=""></a></li>
			
			
		</ul>
		</div>
		
	</div>
</body>
</html>
<?php
    include("inciar_sesion.php");

      ?>