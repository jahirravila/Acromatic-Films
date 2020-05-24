<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<title>Cotizaciones</title>
	<style>
		body{
			background: url(imagenes/bg.jpg);


		}

		.container{
			width: 965px;
			background : white; 
			margin: auto;
			border-radius:4px;

			
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
			font-family: 'ravie';
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
		

form{
	 width:925px;
   margin:0 auto;
   font-size:17px;
   color:#6B121B;
   border-radius:7px;
   background-color:#E9F9F7;
   border:1px dotted #B8BFCB;
   padding:14px;
}

fieldset{
   border-radius:6px;
   border:1px dotted gray;
   margin-bottom:15px;
   padding:0 20px;
}

legend{
   color:gray;
   font-size:13px;
   margin-bottom:16px;
}

input{
   background-color:white;
   border-radius:4px;
   color:#264F96;
   font-size:16px;
   padding:3px 3px 3px 10px;
   outline: none;
}

#boton_enviar{
   padding:6px 30px;
   background-color:#2A477A;
   color:white;
   font-size:14px;
}

#boton_enviar:hover{
   cursor:pointer;
   background-color:#5376B2;
}

textarea{
   width:450px;
   height:50px;
   max-width:493px;
   min-width:300px;
   max-height:200px;
   min-height:50px;
   margin-top:4px;
   border-radius:4px;
   color:#264F96;
   font-size:16px;
   padding:3px 3px 3px 10px;
}

[required]{
   border-color:#4AA248;
   box-shadow:0 0 3px #4AA248;
}

:invalid{
   border-color:#FF7F7F;
   box-shadow:0 0 3px #FF7F7F;
}
.btn__form {
  display: flex;
  justify-content: space-around;
  margin-top: 1rem;

}

.input, .btn__submit, .btn__reset{
  background-color: #EFEFEF;
  padding: .5rem;
  margin: .5rem 0;
  border: none;
  border-bottom: solid #C8C8C8 .2rem;
  transition: all .5s;
}

.input:focus {
  border-bottom: solid #F39B53 .2rem;
}

.btn__submit, .btn__reset {
   border: none;
  outline: none;
  height: 40px;
  background: #0CD9F1;
  color: #fff;
  font-size: 18px;
  border-radius: 20px;
}

.btn__reset {
  background-color: #EDA135;
}

.btn__submit:hover {
  cursor: pointer;
  background: white;
  color:#0CD9F1;
}

.btn__reset:hover{
  cursor: pointer;
  background: white;
  color:#0CD9F1;
}
		</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<img src="imagenes/Acromatic.jpg" height="75" width="280" alt="">
		<ul class="menu top">
			<li><a href="iniciado.php">Inicio</a></li>
			<li><a href="somos_iniciado.html">¿Quiénes somos? </a></li>
			<li><a href="contacto_iniciado.html">Contacto</a></li>
			<li><a href="cotizacion.php">Cotizaciones </a></li>
		<li><a href="index.html"><img src="icon/salir.png"height="25" width="35" alt=""></a></li>
		</ul>
		</div>
	</div>
	<h1>  </h1>
<form  method="POST">

  <fieldset>
    <legend>Datos personales</legend>

    Nombre:
    <input type="text"
    name="nombre"
    span class="rojo"> Escriba su nombre para poder
    referirnos de forma correcta.<br>
    <h1>  </h1>
    Telefono:
    <input type="text"
    name="telefono"
    span class="rojo"> fijo  o movil.<br>
 <h1>  </h1>
    Correo de contacto:
    <input type="email"
    name="correo"
    size="28"
    required
    autocomplete
    placeholder="nombre@servidor.com"
    title="Escriba su correo electrónico para 
    poder comunicarnos con Ud.lo antes posible"/>
    <br>
  </fieldset>

  <fieldset>
     <legend>Datos de la cotización</legend>

      Descripción de lo que desea:<br>
     <textarea name="descripcion"></textarea><p>

     ¿Para que servicio desea cotizar?<br>
     <input type="radio"
     name="servicio"
     value="Paisaje o lugares"
     checked/>
     Paisajes o lugares

     <input type="radio"
     name="servicio"
     value="Eventos o encuentros"/>
     Eventos o encuentros

     <input type="radio"
     name="servicio"
     value="Retratos"/>
     Retratos

     <input type="radio"
     name="Otros"
     value="finalizado"/>
     Otos<p>

     ¿Con que presupuesto dispone? (en COP):  
     <input type="number"
     name="presupuesto"
     value="1000"
     min="150"
     max="3000000"
     step="50">
  </fieldset>
	
    <div class="btn__form">
              <input class="btn__submit" type="submit" name="enviar" value="Enviar">
              <input class="btn__reset" type="reset" value="Limpiar"> 
       
            </div>

</form>
<body>
</html>
<?php
    include("cotizar.php");

      ?>
