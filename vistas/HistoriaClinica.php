<?php
$raza = ControladorFormularios::ctrSeleccionarRegistrosTablaRaza(null, null);
$especie = ControladorFormularios::ctrSeleccionarRegistrosTablaEspecie(null, null); 
    
   ?> 
    
    <div class="container-fluid fondo-morado">
        <div class="row">

                <!--Incia Formulario Perfil mascota-->
            <form action="" class="formularioVistaInfoMascota">
                    <div class="row">
                        <div class="col-md-6">
                                <div class="row contenedor-formulario mt-4  col-sm-12 justify-content-center">
                                        <div class="row col-sm-12">
                                            <h4 class="mt-2 text-center">PERFIL MASCOTA</h4>
                                        </div>
                                
                                        <div class="row">
                                            <div class="col-sm-12 col-md-4 contenedor-imagen">
                                                <img src="image/mini-perro.png" class="imagenPN"  alt="mini-perro" >
                                            </div>

                                            <div class="col-sm-12 col-md-8">
                                                    <div class="col-sm-12 mt-4">
                                                        <input type="text" class="form-control" id="nombremascota" placeholder="Nombre Mascota" name="nombremascota">
                                                    </div>

                                                    <div class="row">
                                                            <div class="col-sm-6 col-md-6  mt-4">
                                                                <input type="text" class="form-control" id="edad" placeholder="Edad" name="edad">
                                                            </div>
                                                            <div class="col-sm-6 col-md-6  mt-4">
                                                                <input type="text" class="form-control" id="peso" placeholder="Peso" name="peso">
                                                            </div>
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6 col-md-6  mt-3 mb-3">
                                                <input type="text" class="form-control" id="raza" placeholder="Raza" name="raza">
                                                <select name="raza" id="raza" class="form-select">
                                                    <option value="0">Seleccionar Raza</option>
                                                        <?php
                                                        foreach($raza As $raza=>$value):?>
                                                            <option value="<?php echo $value['idraza']; ?>"><?php echo $value['nombre'] ; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                            </div>
                                            <div class="col-sm-6 col-md-6  mt-3 mb-3">
                                                <input type="text" class="form-control" id="propiertario" placeholder="Propietario" name="propietario"> 
                                            </div>
                                        </div>  
                                </div>
                                    <div class="row text-center  col-sm-12">
                                        <div class="container vacunas bg-white mt-3 titulo ">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <h4 class="mt-2">VACUNAS</h4>
                                                    <tr>
                                                        <th>Fecha</th>
                                                        <th>Nombre</th>
                                                        <th>Peso</th>
                                                        <th>Dosis</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                
                            <!--Finaliza Formulario Perfil mascota--> 
                        </div>

                                <div class="col-md-6">
                                        <div class="col-sm-12 text-center">
                                            <h2 class="mt-2">HISTORIA CLINICA</h2>
                                        </div>

                                    <div class="col-sm-12  sintomas">
                                        <div class="row">
                                                <div class="col-sm-12">
                                                    <h4 class="mt-2">Sintomatologia</h4>
                                                </div>
                                            
                                                <div class="col-sm-12 ">
                                                    <textarea class="form-control" rows="5" id="sintomatologia" placeholder="Descripción" name="sintomatologia"></textarea>
                                                </div> 
                                    
                                                <div class="col-sm-12">
                                                    <h4 class="mt-2">Recomendaciones</h4>
                                                </div>

                                                <div class="col-sm-12">
                                                    <textarea class="form-control" rows="5" id="Recomendciones" placeholder="Descripción" name="recomendaciones"></textarea>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
            </form>
               
            <div class="row justify-content-center">
                <div class="col-sm-6 mt-4 text-center">
                    <button type="submit" class="btn btn-atrasPN"><i class="fa-solid fa-delete-left"></i> Atras</button>
                </div>
                <div class="col-sm-6 mt-4 text-center">
                    <button type="submit" class="btn btn-atrasPN">Editar</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</html>



