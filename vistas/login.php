<?php
//estas dos lineas de codigo deben de ir en el index
// require_once "../controladores/formularios.controlador.php";
// require_once "../modelos/formulario.modelo.php";
// ?>

<div class="container-fluid bg-primary">
  <div class="container bg-warning">
    <div class="circulo-logo bg-primary"><img src="image/logoBlanco.svg" class="imglogo"></div>


      <div class="row contenedorFormularioLogin">
        <form class="formularioLogin" method="POST">
        <label class="mt-5">Correo Electronico</label>
        <input type="text" name="usuario" class="form-control usuario">
        <label class="mt-3">Contraseña</label>
        <input type="password" name="contrasena" class="form-control contrasena">
        <div class="div btnlogin-iniciarsesion">

          <?php
            $ingreso = new ControladorFormularios();
            $ingreso ->ctrIniciarSesion();

          ?>
          <input type="submit" value="Iniciar Sesión" class="btn btniniciarsesion mt-3" >
        </div>
        
        <div class="div recordarcontrasena">
          <a href="recordarcontraseña.html">Recordar Contraseña</a>
        </div>
        </form>
      </div>

      <div class="row">
        <div class="">
          <a href="index2.html" class="btn1login">Atrás</a>


        </div>
      </div>


  </div>


</div>

