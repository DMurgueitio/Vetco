<?php
$seleccionarServicios=ControladorFormularios::ctrSeleccionarRegistroTablaTipoDocumento(null,null);

?>
<!-- <div class="container-fluid"> -->
<div class="fondo container-fluid">
    <div class="container">
        <!--Inicia encabezado Perfil Mascota-->
        <div class="perfilMascota row">
            <div class="col-sm mt-2">
                <h4>CREAR CUENTA</h4>
            </div>
        </div>
        <!--Finaliza encabezado Perfil Mascota-->
        <!--Incia Formulario Perfil mascota-->
        <form method="POST">
            <div class="row contenedor-formulario">
                <div class="col-sm-12 col-md-6 mt-2">
                    <input type="text" name="nombres" class="form-control" id="Nombres" placeholder="Nombres" >
                </div>
                <div class="col-sm-12 col-md-6 mt-2">
                    <input type="text" name="apellidos" class="form-control" id="Apellidos" placeholder="Apellidos" >
                </div>
                <div class="col-sm-12  col-md-4 mt-2">
                    <select type="number" name="tipo_documento" class="form-select" id="">
                        <option value="0">Seleccione Tipo Documento</option>
                        <?php
                        foreach ($seleccionarServicios as $seleccionarServicios => $value):?>
                            <option value="<?php echo $value['id']; ?>"><?php echo $value['nombre'];?> </option>
                        <?php
                        endforeach;
                        ?>
                    </select>
                </div>
                <div class="col-sm-12  col-md-4 mt-2">
                    <input type="text" name="di" class="form-control" id="di" placeholder=" Nro. Documento de Identidad" >
                </div>
                <div class="col-sm-12  col-md-4 mt-2">
                    <select type="number" name="genero" class="form-select" id="gen">
                        <option value="1">Mujer</option>
                        <option value="2">Hombre</option>
                        <option value="3">Mezcla</option>
                    </select>
                </div>

                <div class="col-sm-12  col-md-12 mt-2">
                    <input type="text" name="email" class="form-control" id="correo" placeholder="Correo Electronico" >
                </div>
                <div class="col-sm-12 col-md-4 mt-2">
                    <select type="text" name="ciudad" class="form-select" id="ciudad" placeholder="Ciudad" >
                        <option value="1">Cali</option>
                        <option value="2">Medellin</option>
                    </select>
                </div>
                <div class="col-sm-12 col-md-4 mt-2">
                    <input type="text" name="direccion" class="form-control" id=dire" placeholder="Direccion" >
                </div>

                <div class="col-sm-12 col-md-4 mt-2">
                    <select type="text" name="rol" class="form-select" id="rol" placeholder="Afilate como" >
                        <option value="1">Veterinario</option>
                        <option value="2">Proveedor </option>
                    </select>
                </div>

                <div class="col-sm-12 col-lg-6 col-md-6 mt-2">
                    <input type="text" name="telfijo" class="form-control" id="telfijo" placeholder="Telefono Fijo">
                </div>
                <div class="col-sm-12 col-lg-6 col-md-6 mt-2">
                    <input type="text" name="celular" class="form-control" id="Cel" placeholder="Telefono Celular">
                </div>
                <div class="col-sm-12 col-md-6 mt-2">
                    <input type="password" name="contrasena" class="form-control" id="pass" placeholder="Contraseña">
                </div>
                <div class="col-sm-12  col-md-6 mt-2">
                    <input type="password" name="verificacionContra" class="form-control" id="pass2" placeholder="Confirmar Contraseña">
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-3 mt-2">
                        <?php
                        $CrearUsuario = ControladorFormularios::ctrCrearUsuario();
                        if($CrearUsuario=="ok"){
                            echo '<script>
                                    alert("El usuario fue registrado");
                                    window.location="index.php?pagina=inicio";
                                    </script>';
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
    </div>
    <!--Finaliza container-->

</div>
<!--Finaliza container-fluid-->


</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</html>