

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Iniciar sesión</title>
<style>
  body {
  margin: 0;
  padding: 0;
  background: url(imagenes/bg.jpg);
  background-size: cover;
  font-family: sans-serif;
  height: 100vh;
}

.login-box {
  width: 320px;
  height: 420px;
  background: #000;
  color: #fff;
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
  padding: 70px 30px;
}

.login-box .avatar {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  position: absolute;
  top: -50px;
  left: calc(50% - 50px);
}

.login-box h1 {
  margin: 0;
  padding: 0 0 20px;
  text-align: center;
  font-size: 22px;
}

.login-box label {
  margin: 0;
  padding: 0;
  font-weight: bold;
  display: block;
}

.login-box input {
  width: 100%;
  margin-bottom: 20px;
}

.login-box input[type="text"], .login-box input[type="password"] {
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 16px;
}

.login-box input[type="submit"] {
  border: none;
  outline: none;
  height: 40px;
  background: #0CD9F1;
  color: #fff;
  font-size: 18px;
  border-radius: 20px;
}

.login-box input[type="submit"]:hover {
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


  </style>
</head>

<body>
    <form class="login-box" method="POST">
      <img src="imagenes/usuario.png" class="avatar" alt="Avatar Image">
      <h1>Iniciar Sesión</h1>
      
      
        <label for="username">Usuario</label>
        <input type="text"name="correo" placeholder="Correo electronico">
       
        <label for="password">Contraseña</label>
        <input type="password" name="pass" placeholder="Ingrese contraseña">
        <input type="submit" name="ingresar" value="Ingresar">
        <a href="#">¿Olvidaste tu contraseña?</a><br>
        <a href="crear_usuario.php">¿Crear una cuenta?</a><br>
        <a href="index.html"> Regresar al inicio</a>

  </form>
</body>

</html>
<?php
    include("inciar_sesion.php");

      ?>
