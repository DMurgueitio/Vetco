<?php
     $especie = ControladorFormularios::ctrSeleccionarRegistrosTablaEspecie(null, null);
     $raza = ControladorFormularios::ctrSeleccionarRegistrosTablaRaza(null, null);
     $registro = ControladorFormularios::ctrSeleccionarRegistroTablaRegistro(null, null);
     $generoMascota = ControladorFormularios::ctrSeleccionarRegistroTablaGeneroMascota(null,null);
?>

<div class="container-fluid">
<div class="fondo ">
        <div class="container">
               <!--Inicia encabezado Perfil Mascota-->
            <div class="perfilMascota row">
                <div class="col-sm mt-2">
                    <h4>PERFIL MASCOTA</h4>
                </div>
            <!-- </div>   Finaliza encabezado Perfil Mascota -->
            <!--Incia Formulario Perfil mascota-->
                <form method="post"> 
                    <div class="row contenedor-formulario">
                        <div class="col-sm-12 col-lg-6 col-md-6 mt-2">
                            <input type="text" class="form-control" id="nombremascota" placeholder="Nombre Mascota" name="nombremascota">
                        </div>
                            <div class="col-sm-12 col-lg-6 col-md-6 mt-2">
                                <input type="file" class="form-control" name="imagemascota">
                            </div>
                                <div class="col-sm-12 col-lg-6 col-md-6 mt-2">
                                    <input type="text"  class="form-control"  value="<?php echo $_SESSION["documento"]; ?>" name="docPropietario" readonly>
                                </div>
                                    <div class="col-sm-12 col-lg-6 col-md-6 mt-2">
                                        <input type="date" class="form-control" id="fechanacimiento" placeholder="Fecha Nacimiento Mascota" name="fechanacimiento">
                                    </div>
                                <div class="col-sm-12 col-lg-3 col-md-3 mt-2">
                                    <select name="especie" id="especie" class="form-select">
                                    <option value="0">Seleccionar Especie</option>
                                    <?php
                                    foreach($especie As $especie=>$value):?>
                                        <option value="<?php echo $value['idespecie']; ?>"><?php echo $value['nombreespecie'] ; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            <div class="col-sm-12 col-lg-3 col-md-3 mt-2">
                            <select name="raza" id="raza" class="form-select">
                                <option value="0">Seleccionar Raza</option>
                                    <?php
                                    foreach($raza As $raza=>$value):?>
                                        <option value="<?php echo $value['idraza']; ?>"><?php echo $value['nombre'] ; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                            </div>
                            <div class="col-sm-12 col-lg-3 col-md-3 mt-2">
                            <select name="generoMascota" id="" class="form-select">
                            <option value="0">Seleccionar Genero</option>
                            <?php
                                foreach($generoMascota as $genero=>$value):?>
                                <option value="<?php echo $value['codiGeneroAni']; ?>"><?php echo $value['descGeneroAni']; ?></option>
                                <?php endforeach; ?>
                                </select>
                        </div>
                        <div class="col-sm-12 col-lg-3 col-md-3 mt-2">
                            <input type="text" class="form-control" id="peso" placeholder="Peso" name="peso">
                        </div>
                        <div class="col-sm-12 mt-2">
                            <textarea class="form-control" rows="10" id="caracteristicas" placeholder="Caracteristicas del Animal" name="caracteristicas"></textarea>
                        </div>
                            <div class="row justify-content-center">
                            <div class="col-sm-3 mt-2">
                                <?php
        /*=============================================
		FORMA EN QUE SE INSTANCIA LA CLASE DE UN MÉTODO ESTÁTICO 
		=============================================*/
        // ControladorFormularios hace referencia a la clase
		// ctrRegistro hace referencia a el metodo de la clase anterior
                                    $registro = ControladorFormularios::ctrRegistroPerfilMascota();

                                    if($registro == "ok"){
                                        
                                        echo '<script>alert("El perfil de la mascota fue creado.");</script>';
                                    }
                                ?>
                                    <button type="submit" class="btn">Registrar</button>
                                </div>
                                    <div class="col-sm-3 mt-2">
                                        <button type="submit" class="btn1"><i class="fa-solid fa-delete-left"></i> Atras</button>
                                    </div>
                            </div>
                    </div>
                </form>
                    <!--Finaliza Formulario Perfil mascota--> 
            </div>   <!--Finaliza container  -->
     </div> <!--Finaliza container-fluid  -->
    