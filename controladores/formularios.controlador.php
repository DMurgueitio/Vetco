<?php
class ControladorFormularios
{

    /* INICIAR SESION*/
    static public function ctrIniciarSesion()
    {


        if (isset($_POST["usuario"])) {
            $_POST["usuario"];

            $tabla  = "tblregistro";
            $item = "email";
            $valor = $_POST["usuario"];

            $respuesta = ModeloFormularios::mdlSeleccionarRegistroTablaRegistro($tabla, $item, $valor);

            //SE COMPARAN LOS DATOS QUE SE INGRESARON EN EL FORMULARIO DEL LOGIN CON LOS DATOS QUE ESTAN SIENDO TRAIDOS DE LA BASE DE DATOS
            if ($respuesta["email"] == $_POST["usuario"] && $respuesta["contrasena"] == $_POST["contrasena"]) {

                // SE INCIALIZAN LAS VARIABLES GLOBALES PARA SER USADAS EN TODO EL PROYECTO DESPUES DE QUE SE INCIE SESION
                $_SESSION["validarIngreso"] = "ok";
                $_SESSION["nombre"] = $respuesta["nombres"];
                $_SESSION["documento"] = $respuesta["di"];
                $_SESSION["rol"] = $respuesta["rol"];

                //SE CONDICIONA EL TIPO DE USUARIO QUE INICIO SESION PARA SER DIRECCIONADO A DIVERSAS PARTES DE LA PLATAFORMA
                if ($_SESSION["rol"] == 1) {
                    echo '<script>
                         window.location = "index.php?pagina=paginaPrincipal";
                    </script>';
                }

                if ($_SESSION["rol"] == 2) {
                    echo '<script>
                         window.location = "index.php?pagina=rol2";
                    </script>';
                }

                if ($_SESSION["rol"] == 3) {
                    echo '<script>
                         window.location = "index.php?pagina=rol3";
                    </script>';
                }
            } else {
                echo "<script>
                    alert('Usuario incorrecto');
                    </script>";
            }
        }
    }
    /*=============================================
		INICIO INSERCION A LA TABLA CREAR PERFIL
		=============================================*/
    /* REGISTRO PERFIL MASCOTAS*/

    static public function ctrRegistroPerfilMascota()
    {
        if (isset($_POST["nombremascota"])) {

            $tabla = "tblperfilmascotas";

            $datos = array(
                "nombreMascota" => $_POST["nombremascota"],
                "propietario" => $_POST["docPropietario"],
                "razaMascota" => $_POST["raza"],
                "pesoMascota" => $_POST["peso"],
                "fechanacimientoMascota" => $_POST["fechanacimiento"],
                "cracteristicasMascotas" => $_POST["caracteristicas"],
                "generoMascota" => $_POST["generoMascota"]
            );

            $respuesta = ModeloFormularios::mdlRegistroPerfilMascota($tabla, $datos);
            return $respuesta;
        }
    }
    /* REGISTRO PERFIL MASCOTAS*/

    /* Inicio Formulario Registro Usuario */
    static public function ctrCrearUsuario()
    {
        if (isset($_POST["di"])) {
            $tabla = "tblregistro";
            $datos = array(
                "documento" => $_POST["di"],
                "nombres"   => $_POST["nombres"],
                "apellidos" => $_POST["apellidos"],
                "tipo_identificacion" => $_POST["tipo_documento"],
                "correo"    => $_POST["email"],
                "Ciudad"    => $_POST["ciudad"],
                "direccion" => $_POST["direccion"],
                "rol"               => $_POST["rol"],
                "Telefono_Celular"  => $_POST["celular"],
                "Telefono_Fijo"     => $_POST["telfijo"],
                "contra"    => $_POST["contrasena"],
                "Genero"    => $_POST["genero"]
            );

            $respuesta = ModeloFormularios::mdlCrearUsuario($tabla, $datos);
            return $respuesta;
        }
    }
    /* Fin Formulario Registro  Usuario */














    /*=============================================
		INICIO INSERCION A LA TABLA SERVICIOS
		=============================================*/
    /* REGISTRO SERVICOS*/

    static public function ctrRegistroServicios()
    {
        if (isset($_POST["nombreComercio"])) {

            $tabla = "tblservicios";

            $datos = array(
                "nombreEmpresa" => $_POST["nombreComercio"],
                "TelUno" => $_POST["telefonouno"],
                "TelDos" => $_POST["telefonodos"],
                "documento" => $_SESSION["documento"],
                "TipoServicio" => $_POST["tiposervicio"],
                "DescripcionServicio" => $_POST["descripcionServicio"],
                "horarioAtencion" => $_POST["horarioatencion"]
            );

            $respuesta = ModeloFormularios::mdlRegistroServicios($tabla, $datos);
            return $respuesta;
        }
    }
    /* REGISTRO SERVICOS*/

    /*=============================================
		INICIO INSERCION A LA TABLA ROL
		=============================================*/
    /* funcion para enviar los datos del formulario del rol estos se envian 
             atravez de $respuesta = ModeloFormularios::mdlRegistroRol($tabla,$datos);
             retornando la variable respuesta y esta funcion se llama del archivo formulario.modelo.php */

    static public function ctrRegistroRol()
    {

        if (isset($_POST["nombreRol"])) {

            $tabla = "tblrol";

            $datos = array("nombreRolmuestra" => $_POST["nombreRol"]);

            $respuesta = ModeloFormularios::mdlRegistroRol($tabla, $datos);
            return $respuesta;
        }
    }

    static public function ctrRegistroContactenos()
    {

        if (isset($_POST["nombreCompleto"])) {

            $tabla = "tblcontactenos";

            $datos = array(
                "nombreCompleto" => $_POST["nombreCompleto"],
                "numCelular" => $_POST["celular"],
                "email" => $_POST["correo"],
                "informacion" => $_POST["mensaje"]
            );

            $respuesta = ModeloFormularios::mdlRegistroContactenos($tabla, $datos);
            return $respuesta;
        }
    }

    /*=============================================
		FIN INSERCION A LA TABLA ROL
		=============================================*/


    //************* SELECCIONAR REGISTROS *************
    //*************************************************

    //

    // METODO PARA LLAMAR LOS REGISTROS DE LA TABLA ESPECIES
    static public function ctrSeleccionarRegistrosTablaEspecie($item, $valor)
    {
        $tabla = "tblespecie";

        $respuesta = ModeloFormularios::mdlSeleccionarRegistroTablaEspecie($tabla, $item, $valor);

        return $respuesta;
    }

    static public function ctrSeleccionarRegistrosTablaServicios($item, $valor)
    {
        $tabla = "tblservicios";

        $respuesta = ModeloFormularios::mdlSeleccionarRegistroTablaServicios($tabla, $item, $valor);

        return $respuesta;
    }

    //metodo para traer la información condicionada para mostrar los servicios
    static public function ctrSeleccionarRegistrosTablaMostrarServicios($item, $valor)
    {
        $tabla = "tblservicios";

        $respuesta = ModeloFormularios::mdlSeleccionarRegistroTablaMostrarServicioss($tabla, $item, $valor);

        return $respuesta;
    }

    static public function ctrSeleccionarRegistroTablaTipoDocumento($item, $valor)
    {
        $tabla = "tbltipodi";
        $respuesta = ModeloFormularios::mdlSeleccionarRegistroTablaTipoDocumento($tabla, $item, $valor);
        return $respuesta;
    }

    static public function ctrSeleccionarRegistrosTablaTipoServicio($item, $valor)
    {
        $tabla = "tbltiposervicio";

        $respuesta = ModeloFormularios::mdlSeleccionarRegistroTablaTipoServicio($tabla, $item, $valor);

        return $respuesta;
    }

    // METODO PARA LLAMAR LOS REGISTROS DE LA TABLA RAZA
    static public function ctrSeleccionarRegistrosTablaRaza($item, $valor)
    {
        $tabla = "tblraza";

        $respuesta = ModeloFormularios::mdlSeleccionarRegistrosTablaRaza($tabla, $item, $valor);

        return $respuesta;
    }
    // METODO PARA LLAMAR LOS REGISTROS DE LA TABLA REGISTROS
    static public function ctrSeleccionarRegistroTablaRegistro($item, $valor)
    {
        $tabla = "tblregistro";
        $respuesta = ModeloFormularios::mdlSeleccionarRegistroTablaRegistro($tabla, $item, $valor);
        return $respuesta;
    }

    // METODO PARA LLAMAR LOS REGISTROS DE LA TABLA GENERO MASCOTA
    static public function ctrSeleccionarRegistroTablaGeneroMascota($item, $valor)
    {
        $tabla = "tblgeneroanimal";
        $respuesta = ModeloFormularios::mdlSeleccionarRegistroTablaGeneroMascota($tabla, $item, $valor);
        return $respuesta;
    }
}
