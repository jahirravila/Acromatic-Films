

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="./css/main.css">
	<title>Crear usuario</title>
	<style>
		html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}

		html {
	font-size: 16px;
    font-family: 'Lato', sans-serif;
}

body {
	 background: url(imagenes/bg.jpg);
}

.container {
	max-width: 450px;
	height: auto;
	background-color: #181717;
	margin: 5% auto;
	padding-bottom: 1rem;
	border-radius: 10px;
}

.form__top {
	width: 100%;
	text-align: center;
	padding: 2rem 0 1rem;
	border-top: solid .4rem #65605C;
	margin-bottom: 1rem;

}

.form__top h2 {
	font-weight: bold;
	color: #CAC8C8;
	font-size: 18px;
}

h2 span {
	color: #0CD9F1;
}

.form__reg {
	padding: 0 2rem;
	display: flex;
	flex-direction: column;
	justify-content: center;
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
.login-box a {
  text-decoration: none;
  font-size: 12px;
  line-height: 20px;
  color: darkgrey;
}

.login-box a:hover {
  color: #fff;
}

		
		.footer a{
			color: #111212 ;
			text-decoration: none;
			border-radius: 8px;

		}
		.footer span{
			text-align: center;
			margin-top: 10px;
			margin-left: 460px;
			
		}
		.ok h5{
			text-align: center;
			width: 100%;
			padding: 12px;
			background-color: #1e6;
			color: #fff;
		}
		.bad h5{
			text-align: center;
			width: 100%;
			padding: 12px;
			background-color: #a22;
			color: #fff;
		}

	</style>
</head>
<body>

	<div class="container">
		<div class="form__top">
			
			<h2>Formulario <span>Registro</span></h2>

		</div>		

		<form class="form__reg" action="" name="Formulario" method="POST">
			<input class="input" type="text" name="nombre" placeholder="&#128100;  Nombre" required autofocus>
            <input class="input" type="email" name="correo" placeholder="&#9993;  Correo electronico" required>
            <input class="input" type="password" name="pass" placeholder="&#8962;  Contraseña" required>
            <input class="input" type="text" name="telefono" placeholder="&#128222;  Telefono" required>
            
            <div class="btn__form">
            	<input class="btn__submit" type="submit" name="Registrar" value="Regristrar">
            	<input class="btn__reset" type="reset" value="Limpiar">	
       
            </div>

		</form>
	


	</div>
	<div class="footer">
			<span><a href="login.php"><img src="icon/atras.png"height="30" width="40" alt=""></a>   </span>
			
	
</body>
</html>
<?php
		include("registrar.php");

			?>