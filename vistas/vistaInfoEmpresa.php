<?php 
    if(isset($_GET["id"])){
         $item = "id";
         $valor = $_GET["id"];
        $servicioMostrar = ControladorFormularios::ctrSeleccionarRegistrosTablaMostrarServicios($item, $valor);
    }
?>
    
    <div class="container-fluid contenedorInfoEmpresa">
        <div class="row contenedorBoton">
            <div class="btn btnAzul">
                <a href=""><i class="fa-solid fa-pen-to-square"></i>  Editar Publicación</a>
            </div>
        </div>

        <div class="row">
            <div class="row contenedorTextoInfoEmpresa">
                <div class="col-md-3">
                    <img src="image/accesorios.jpg" class="imagenVistaInfoEmpresa " alt="">
                </div>
                <div class="col-md-9">
                    <div class="row mt-2">
                        
                        <h1><?php echo $servicioMostrar["nombreEmpresa"]; ?></h1>

                        <p><?php echo $servicioMostrar["descripcionservicio"]; ?></p>
                    </div>
                    <div class="row">
                        <div class="col-md-7  col-sm-12">
                            <h3><i class="fa-solid fa-location-dot"></i> Dirección</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis harum quasi delectus dignissimos accusamus veritatis?</p>
                        </div>
                        <div class="col-md-5">
                            <h3>Contáctanos</h3>
                            <a href="">
                                <p><i class="fa-brands fa-whatsapp"></i> (+57) xxx-xxx-xx-xx</p>
                            </a>
                                <p> (604) xxx-xxx-xx-xx</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="row"> -->
                    <div class="col-md-12 mt-4">
                        <h3><i class="fa-solid fa-clock"></i> Horarios de Atención</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum consequuntur, ex ipsa repudiandae nam sunt.</p>
                    </div>
                <!-- </div> -->
            </div>
            
        </div>
            <div class="row contenedorBoton">
                <div class="btn btnAzul">
                    <a href=""><i class="fa-solid fa-ranking-star"></i>  Calificar Servicio</a>
                </div>
            </div>
        
    </div>
</body>