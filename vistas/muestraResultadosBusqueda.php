<?php

//estas dos lineas de codigo deben de ir en el index
// require_once "controladores/formularios.controlador.php";
// require_once "modelos/formulario.modelo.php";

    $servicios = ControladorFormularios::ctrSeleccionarRegistrosTablaServicios(null, null);
    

    
?>    
    
    <div class="container-fluid">
        <div class="contenidoCategoria p-5">
            <div class="row">
                <?php 
                foreach($servicios as $servicios =>$value):?>
                <div class="col-md-4 mb-5">
                    <div class="card">
                        <img src="image/accesorios.jpg" class="imagenCard" alt="">
                        <img src="image/accesorios.jpg" class="imagenLogoComercio" alt="">
                        <div class="contenedorTextoCardSombra"></div>
                        <div class="contenedorTextoCard">
                            <h2><?php echo $value["nombreEmpresa"];?></h2>
                            <p><?php echo $value["descripcionservicio"];?></p>
                        </div>
                        <div class="botonCard  p-2">
                            <a href="index.php?pagina=vistaInfoEmpresa&id=<?php echo $value["idservicio"]; ?>" class="textobotonCard" >Saber Más <i class="fa-solid fa-circle-plus"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach;  ?>
            </div>
        </div>
    </div>

