<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/boostrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css" type="text/css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
    <link rel="stylesheet" href="css/all.min.css" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <title>slider</title>
</head>

<body>
    <?php
    session_start();

    if (isset($_SESSION["validarIngreso"])) {
        // echo "existe";
    } else {
        // echo "no exixte";
    }
    ?>
    <header>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-lg barranavegacion">
                    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class=" d-none d-sm-block d-lg-none">
                            <img src="image/logoBlanco.svg" alt="Logo VETCO" class="logoResponsivo">
                        </div>

                        <div class="col-lg-1 align-middle d-none d-lg-block">
                            <a href="#" class="enlaceLogo">
                                <img src="image/isotipo.svg" class="isotipo align-middle" alt="Isotipo VETCO">
                            </a>
                        </div>
                        <?php
                        if (isset($_SESSION["validarIngreso"])) {
                            echo '
                                    <div class="col-lg-1 col-12  ">
                                        <li ><a href="index.php?pagina=buscar" class="align-middle"> Buscar</a></li>
                                    </div>
                                    
                                    <div class="col-lg-3 col-12 ">
                                        <li><a href="index.php?pagina=crearperfilMascota" class="align-middle" >Crear perfil Mascota</a></li>    
                                    </div>
                                ';
                        } else {
                            echo '
                                <div class="col-lg-1 col-12  "></div>
                                
                                <div class="col-lg-3 col-12 "></div>

                        <div class="col-lg-3 col-12 d-none d-lg-block"></div>

                        <div class="col-lg-1 col-12  ">
                            <li><a href="index.php?pagina=login" class="align-middle ">Iniciar Sesión</a></li>
                        </div>

                        <div class="col-lg-1 col-12 ">
                            <li><a href="index.php?pagina=crear_usuario" class="align-middle">Registrarse</a></li>
                        </div>
                                ';
                        }
                        ?>




                        <?php

                        if (isset($_SESSION["validarIngreso"])) {
                            echo '
                        <div class="col-lg-3 col-12 d-none d-lg-block"></div>
                        <div class="col-lg-1 col-12  ">
                            
                        </div>

                        <div class="col-lg-1 col-12 ">
                            
                        </div>
                        <div class="col-lg-2 col-12 ">
                        <li><a href="index.php?pagina=cerrarSesion" class="align-middle">Cerrar Sesión</a></li>
                        </div>';
                        }

                        ?>
                        <!-- <div class="col-lg-2 col-12 "></div> -->
                    </div>
                </nav>
                <div class="contenedorLogo d-lg-block  d-none">
                    <img src="image/logoBlanco.svg" alt="Logo VETCO" class="logo">
                </div>
            </div>
            <div class="row segundonav">
                <nav class="navbar">
                    <div class="col-lg-1 col-1">
                        <li><a class="linksegundonav" href="index.php?pagina=inicio">Inicio</a></li>
                    </div>

                    <?php
                    if (isset($_SESSION["validarIngreso"])) {
                        echo '
                    <div class="col-lg-2 col-4"><li><a class="linksegundonav" href="index.php?pagina=Formulariopublicarservicio">Publicar Servicio</a></li></div>
                <div class="col-lg-1 col-1"><li><a class="linksegundonav" href="index.php?pagina=foro_TemasRelacionados">Foro</a></li></div>
                    ';
                    }
                    ?>
                    <div class="col-lg-4 col-4 d-none d-lg-block">
                        <li></li>
                    </div>
                    <div class="col-lg-2 col-3">
                        <li><a class="linksegundonav" href="#footer">Contáctanos</a></li>
                    </div>
                    <div class="col-lg-2 col-3 scroll">
                        <li><a class="linksegundonav" href="index.php?pagina=Quienes_Somos"> ¿Qué es VETCO?</a></li>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <?php
    if (isset($_GET["pagina"])) {
        if (
            $_GET["pagina"] == "inicio" || $_GET["pagina"] == "buscar" ||
            $_GET["pagina"] == "crearperfilMascota" || $_GET["pagina"] == "login" ||
            $_GET["pagina"] == "registro" || $_GET["pagina"] == "publicarservicio" ||
            $_GET["pagina"] == "foro_TemasRelacionados" || $_GET["pagina"] == "Quienes_Somos"
            || $_GET["pagina"] == "cerrarSesion" || $_GET["pagina"] == "paginaPrincipal"
            || $_GET["pagina"] == "crear_usuario" || $_GET["pagina"] == "Formulariopublicarservicio"
            || $_GET["pagina"] == "rol2" || $_GET["pagina"] == "rol3" || $_GET["pagina"] == "muestraResultadosBusqueda"
            || $_GET["pagina"] == "vistaInfoEmpresa" || $_GET["pagina"] == "HistoriaClinica"
        ) {
            include $_GET["pagina"] . ".php";
        } else {
            include "error404.php";
        }
    } else {
        include "inicio.php";
    }
    ?>

    <footer class="" id="footer">


        <div class="row">
            <div class="col-12 ">
                <p class="parrafo">
                    Si deseas anunciar tu Empresa o Actividad Comercial a través de Internet e incrementar tus Ventas y Beneficios.<br>
                    Si tienes alguna Pregunta, Sugerencia o Reclamo puedes escribirnos y te responderemos a la mayor brevedad.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 tituloUbicacion">
                <p class=" d-none d-lg-block">Ubicación</p>
            </div>
            <div class="col-lg-6 tituloContacto">
                <p class="  d-none d-lg-block">Contáctanos</p>
            </div>
        </div>

        <div class="container-fluid contenedorContacto">
            <div class="row contenidoContacto">
                <div class=" d-flex flex-lg-row flex-sm-column-reverse ">

                    <div class="contenedorDireccion align-self-lg-center col-lg-6 col-12 justify-content-center ">
                        <div class="row">
                            <div class="col-lg-12 col-sm-6">
                                <p class="infoDireccion">Rionegro - Antioquia</p>
                                <p class="infoDireccion">Cel. 311 567 11 22</p>
                                <p class="infoDireccion">E-mail: servicioalcliente@vetco.com</p>
                            </div>


                            <div class="d-flex col-lg-12 col-sm-6 iconosRedes">
                                <div class="contenedorIconosRedes rounded-circle ">
                                    <i class="fa-brands fa-facebook-f "></i>
                                </div>
                                <div class="contenedorIconosRedes rounded-circle">
                                    <i class="fa-brands fa-instagram"></i>
                                </div>
                                <div class="contenedorIconosRedes rounded-circle">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 col-12 align-self-lg-center">

                        <div class="contenedorFormulario rounded">

                            <form action="#" method="POST">
                                <div class="from-group">
                                    <input type="text" class="form-control" name="nombreCompleto" placeholder="Nombres y Apellidos">
                                </div>

                                <div class="form-group">
                                    <input type="cel" class="form-control" name="celular" placeholder="Celular">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="correo" class="form-control" placeholder="Correo">
                                </div>
                                <div class="form-group">
                                    <textarea name="mensaje" class="form-control" cols="75" rows="4" placeholder="Mensaje"></textarea>
                                </div>
                                <div class="form-group">
                                    <?php
                                    $registro = ControladorFormularios::ctrRegistroContactenos();

                                    if ($registro == "ok") {
                                        echo '<script>alert("El Mensaje ha sido enviado");</script>';
                                    }

                                    ?>
                                    <input type="submit" value="Enviar" class="btn botonMorado" name="enviar">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row col-12">
            <p class="derechosReservados">Derechos Reservados - SENA - DagoBerto Murgueitio - Elizabeth Alvarez - Yudy Restrepo</p>
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>