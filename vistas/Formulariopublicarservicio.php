<?php
//estas dos lineas de codigo deben de ir en el index
require_once "controladores/formularios.controlador.php";
require_once "modelos/formulario.modelo.php";
$TipoServicio = ControladorFormularios::ctrSeleccionarRegistrosTablaTipoServicio(null, null);
// session_start();
// var_dump($_SESSION["documento"]) ;
?>
<!--Inicia cuerpo Registro Servicio-->

<div class="fondo container-fluid">
<!-- Inicia Contenedor General Registro Servicio-->
    <div class="container"> 
    <!--Inicia encabezado Registro-->
        <div class="registro row">
            <div class="col-sm mt-2">
                <h4>REGISTRO SERVICIO</h4>
            </div>
        </div>
            <!--Finaliza encabezado Registro Servicio-->
            <!--Incia Formulario Registro Servicio -->  
        <form method="POST"> 
            <div class="row bg-white registro container-fluid">
                <div class="col-sm-12 mt-3" >
                    <input type="text" class="form-control" name="nombreComercio" Placeholder="Nombre de Comercio">
                </div>
                <div class="col-sm-12 col-md-4 mt-2">
                    <select class="form-select" id="" name="tiposervicio">
                        <option value="0">Seleccionar Tipo de Servicio</option>
                        <?php foreach($TipoServicio As $TipoServicio => $value):?>
                            <option value="<?php echo $value['idtiposervicio'] ?>"><?php echo $value["nombreservicio"] ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
                    <div class="col-sm-12 col-md-4 mt-2">
                        <input type="text" class="form-control" id="telefonouno" placeholder="Telefono Uno " name="telefonouno"> 
                    </div>
                        <div class="col-sm-12 col-md-4 mt-2">
                            <input type="text" class="form-control" id="telefonodos" placeholder="Telefono Dos" name="telefonodos">
                        </div>
                        
                            <div class="col-sm-12 mt-2">
                                <textarea type="text" class="form-control" rows="10" id="descripcionServicio" placeholder="Descripción del Servicio" name="descripcionServicio"></textarea>
                            </div>
                        <div class="col-sm-12 mt-2">
                            <input type="text" class="form-control" placeholder="Horario de Atencion" name="horarioatencion">
                        </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-3 mt-2">

                        <?php
                            $registroServicios = ControladorFormularios::ctrRegistroServicios();
                            

                            if($registroServicios == "ok"){
                               
                                echo '<script>alert("El Servicio fue creado Exisosamente");</script>';
                            }
                           
                        ?>
                            <button type="submit" class="btn">Registrar</button>
                        </div>
                            <div class="col-sm-3 mt-2">
                                <button type="submit" class="btn1"><i class="fa-solid fa-delete-left"></i> Atras</button>
                            </div>
                    </div>
            </div> <!--Div container fluid-->
        </form>
            <!--Finaliza Formulario Registro Servicio--> 
    </div> <!--Div ContainerRS-->
</div>    <!--Div Fondo  Registro Servicio-->
  <!--Finaliza cuerpo Registro Servicio-->