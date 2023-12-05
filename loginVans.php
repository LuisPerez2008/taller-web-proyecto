<?php
// Incluye el archivo registrar_login.php.php
include('registrar_login.php');
?>

<!doctype html>
<html lang="en">
<head>
  <title>LOGIN - VANS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/loginEstilo.css">
</head>
<body>
<div id="stars"></div>
<div id="stars2"></div>
<div id="stars3"></div>
<div class="section">
  <div class="container">
    <div class="row full-height justify-content-center">
      <div class="col-12 text-center align-self-center py-5">
        <div class="section pb-5 pt-5 pt-sm-2 text-center">
          <h6 class="mb-0 pb-3"><span>Iniciar Sesion</span><span>Registrarse</span></h6>
                <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                <label for="reg-log"></label>
          <div class="card-3d-wrap mx-auto">
            <div class="card-3d-wrapper">
              <div class="card-front" style="height: 108%;">
                <div class="center-wrap">
                  <div class="section text-center">
                    <h4 class="mb-4 pb-3">Iniciar Sesion</h4>
                    <form action="registrar_login.php" method="POST">
                    <div class="form-group">
                      <input type="email" class="form-style" placeholder="Correo Electronico" name="correo" required>
                      <i class="input-icon uil uil-at"></i>
                    </div>	
                    <div class="form-group mt-2">
                      <input type="password" class="form-style" placeholder="Contraseña" name="password" required>
                      <i class="input-icon uil uil-lock-alt"></i>
                    </div> 
                    <button type="submit" class="btn mt-4" name="loginSubmit">Ingresar</button>
                    </form>    
                    <p class="mb-0 mt-4 text-center" >Forma parte de la familia de Vans</a></p>
                    <a href="dashboardweb/login.html" >¿ERES ADMINISTRADOR?</a>
                      </div>
                    </div>
                  </div>
              <div class="card-back">
                <div class="center-wrap">
                  <div class="section text-center">
                    <h4 class="mb-3 pb-3">Registrarse</h4>
                    <form action="registrar_login.php" method="POST" name="formulario">
                    <div class="form-group" id="grupo_nombre">
                      <input type="text" class="form-style" placeholder="Nombre completo" name="nombre" id="nombreInput" required>
                      <i class="input-icon uil uil-user"></i>
                      <p id="mensajeErrorNombre" style="color: white;"></p>
                    </div>
                    <div class="form-group mt-2" id="grupo_celular">
                      <input type="tel" class="form-style" placeholder="Numero de telefono" name="celular" id="celularInput" required>
                      <i class="input-icon uil uil-phone"></i>
                      <p id="mensajeErrorCelular" style="color: white;"></p>
                    </div>	
                    <div class="form-group mt-2" id="grupo_correo">
                      <input type="email" class="form-style" placeholder="Correo Electronico" name="correo" id="correoInput" required>
                      <i class="input-icon uil uil-at"></i>
                      <p id="mensajeErrorCorreo" style="color: white;"></p>
                    </div>
                    <div class="form-group mt-2" id="grupo_password">
                      <input type="password" class="form-style" placeholder="Contraseña" name="password" id="passwordInput" required>
                      <i class="input-icon uil uil-lock-alt"></i>
                      <p id="mensajeErrorPassword" style="color: white;"></p>
                    </div>
                    <button type="submit" class="btn mt-4" name="registroSubmit">Registrarse</button>
                    </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
<script src=js/formulario.js></script>
</body>
</html>
