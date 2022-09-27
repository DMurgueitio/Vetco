
    <!-- <div class="container-fluid"> -->
    <div class="fondo container-fluid">
        <div class="container">
               <!--Inicia encabezado Perfil Mascota-->
            <div class="perfilMascota row">
                <div class="col-sm mt-2">
                    <h4>CREAR CUENTA</h4>
                </div>
            </div><!--Finaliza encabezado Perfil Mascota-->
            <!--Incia Formulario Perfil mascota-->
                <form action=""> 
                    <div class="row contenedor-formulario">
                        <div class="col-sm-12 col-md-6 mt-2">
                            <input type="text" class="form-control" id="Nombres" placeholder="Nombres" name="nombres">
                        </div>
                        <div class="col-sm-12 col-md-6 mt-2">
                            <input type="text" class="form-control" id="Apellidos" placeholder="Apellidos" name="apellidos">
                        </div>
                        <div class="col-sm-12  col-md-4 mt-2">
                            <select name="tipo_documento" class="form-select"id="">
                             <option value="0">Tipo de Documento</option>
                            </select>
                        </div>
                            <div class="col-sm-12  col-md-4 mt-2">
                                <input type="text" class="form-control" id="di" placeholder=" Nro. Documento de Identidad" name="di">
                            </div>
                            <div class="col-sm-12  col-md-4 mt-2">
                            <select name="genero" class="form-select"id="">
                             <option value="0">Genero</option>
                            </select>
                        </div>

                                <div class="col-sm-12  col-md-12 mt-2">
                                    <input type="email" class="form-control" id="correo" placeholder="Correo Electronico" name="email">
                                </div>
                                <div class="col-sm-12 col-md-4 mt-2">
                                    <select type="text" class="form-select" id="ciudad" placeholder="Ciudad" name="ciudad">>
                                        <option value="0">Ciudad</option>
                                    </select>
                                </div>
                                    <div class="col-sm-12 col-md-4 mt-2">
                                        <select type="text" class="form-select" id="telefono" placeholder="Departamento" name="dpto">>
                                            <option value="0">Departamento</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-12 col-md-4 mt-2">
                                        <select type="text" class="form-select" id="telefono" placeholder="Departamento" name="dpto">>
                                            <option value="0">Afiliate como</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-sm-12 col-lg-6 col-md-6 mt-2">
                                        <input type="text" class="form-control" id="telfijo" placeholder="Telefono Fijo" name="telfijo">
                                    </div>
                                    <div class="col-sm-12 col-lg-6 col-md-6 mt-2">
                                        <input type="text" class="form-control" id="Cel" placeholder="Telefono Celular" name="Celular">
                                    </div>
                                    <div class="col-sm-12 col-md-6 mt-2">
                                        <input type="password" class="form-control" id="pass" placeholder="Contraseña" name="contrasena">
                                    </div>
                                    <div class="col-sm-12  col-md-6 mt-2">
                                        <input type="password" class="form-control" id="pass2" placeholder="Confirmar Contraseña" name="verificacionContra">
                                    </div>
                                        
                                        <div class="row justify-content-center">
                                            <div class="col-sm-3 mt-2">
                                                <button type="submit" class="btn">Registrar</button>
                                            </div>
                                                <div class="col-sm-3 mt-2">
                                                    <button type="submit" class="btn1"><i class="fa-solid fa-delete-left"></i> Atras</button>
                                                </div>
                                        </div>                          
                    </div>
                </form>
                    <!--Finaliza Formulario Perfil mascota--> 
        </div>  <!--Finaliza container--> 

    </div><!--Finaliza container-fluid--> 
   
    
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </html>