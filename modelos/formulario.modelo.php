<?php
require_once "conexion.php";

/*=============================================
    INICIO INSERCION A LA TABLA CREAR PERFIL
=============================================*/

class ModeloFormularios{
    /*REGISTRO CREAR PERFIL MASCOTA*/
    static public function mdlRegistroPerfilMascota($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombremascota,propietario,raza,peso,fechanacimiento,caracteristicas,codiGeneroAni)
        VALUES (:nombreMascota,:propietario,:razaMascota,:pesoMascota,:fechanacimientoMascota,:cracteristicasMascotas,:generoMascota)");

        $stmt->bindParam(":nombreMascota", $datos["nombreMascota"], PDO::PARAM_STR);
        $stmt->bindParam(":propietario", $datos["propietario"], PDO::PARAM_STR);
        $stmt->bindParam(":razaMascota", $datos["razaMascota"], PDO::PARAM_STR);
        $stmt->bindParam(":pesoMascota", $datos["pesoMascota"], PDO::PARAM_STR);
        $stmt->bindParam(":fechanacimientoMascota", $datos["fechanacimientoMascota"], PDO::PARAM_STR);
        $stmt->bindParam(":cracteristicasMascotas", $datos["cracteristicasMascotas"], PDO::PARAM_STR);
        $stmt->bindParam(":generoMascota", $datos["generoMascota"], PDO::PARAM_STR);
    
        if($stmt->execute()){
            return "ok";
        }
        else{
            print_r(Conexion::conectar()->errorInfo());
        }
       $stmt->Close();
       $stmt = null;
    }
    /*=============================================
    FIN INSERCION A LA TABLA CREAR PERFIL
    =============================================*/
    static public function mdlCrearUsuario($tabla,$datos){
$stmt =Conexion::conectar()->prepare("INSERT INTO tblregistro(di,nombres,apellidos,tipodi,
                                                    email,ciudad,direccion,rol,
                                                    telefonocel,telefonofijo,
                                                    contrasena,codiGenero) 
         VALUES(:documento,
                :nombres,
                :apellidos,
                :tipo_identificacion,
                :correo,
                :Ciudad,
                :direccion,
                :rol,
                :Telefono_Celular,
                :Telefono_Fijo,
                :contra,
                :Genero)");

                $stmt->bindParam(":documento",$datos["documento"],PDO::PARAM_STR);
                $stmt->bindParam(":nombres",$datos["nombres"],PDO::PARAM_STR);
                $stmt->bindParam(":apellidos",$datos["apellidos"],PDO::PARAM_STR);
                $stmt->bindParam(":tipo_identificacion",$datos["tipo_identificacion"],PDO::PARAM_STR);
                $stmt->bindParam(":correo",$datos["correo"],PDO::PARAM_STR);
                $stmt->bindParam(":Ciudad",$datos["Ciudad"],PDO::PARAM_STR);
                $stmt->bindParam(":direccion",$datos["direccion"],PDO::PARAM_STR);
                $stmt->bindParam(":rol",$datos["rol"],PDO::PARAM_STR);
                $stmt->bindParam(":Telefono_Celular",$datos["Telefono_Celular"],PDO::PARAM_STR);
                $stmt->bindParam(":Telefono_Fijo",$datos["Telefono_Fijo"],PDO::PARAM_STR);
                $stmt->bindParam(":contra",$datos["contra"],PDO::PARAM_STR);
                $stmt->bindParam(":Genero",$datos["Genero"],PDO::PARAM_STR);
             
                if($stmt->execute()){
                    return "ok";
                }else{
                    print_r(Conexion::conectar()->errorInfo());
                }
                $stmt->Close();
                $stmt = null;

    }
    

    /*REGISTRO SERVICIOS*/
    static public function mdlRegistroServicios($tabla, $datos){
        
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombreEmpresa,telefonoUno,telefonoDos,diregistro,
        tiposervicio,descripcionservicio,horarioatencion) 
        VALUES (:nombreEmpresa, :TelUno, :TelDos, :documento, :TipoServicio, :DescripcionServicio, :horarioAtencion)");

        $stmt->bindParam(":nombreEmpresa", $datos["nombreEmpresa"], PDO::PARAM_STR);      
        $stmt->bindParam(":TelUno", $datos["TelUno"], PDO::PARAM_STR);
        $stmt->bindParam(":TelDos", $datos["TelDos"], PDO::PARAM_STR);
        $stmt->bindParam(":documento", $datos["documento"], PDO::PARAM_STR);
        $stmt->bindParam(":TipoServicio", $datos["TipoServicio"], PDO::PARAM_STR);
        $stmt->bindParam(":DescripcionServicio", $datos["DescripcionServicio"], PDO::PARAM_STR);
        $stmt->bindPARAM(":horarioAtencion", $datos["horarioAtencion"], PDO::PARAM_STR);
        
        if($stmt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt->Close();
        $stmt = null;
    }
    /*REGISTRO SERVICIOS*/

//**************************************************************************

/*=============================================
	INICIO INSERCION A LA TABLA ROL
=============================================*/

    //Registro Rol

    static public function mdlRegistroRol($tabla,$datos){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre) VALUES (:nombreRolmuestra)");

        $stmt->bindParam(":nombreRolmuestra", $datos["nombreRolmuestra"], PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->Close();
        $stmt = null;
    }
/*=============================================
	FIN INSERCION A LA TABLA ROL
=============================================*/

static public function mdlRegistroContactenos($tabla,$datos){
    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombresApellidos,celular,correo,mensaje) VALUES (:nombreCompleto, :numCelular, :email, :informacion)");

    $stmt->bindParam(":nombreCompleto", $datos["nombreCompleto"], PDO::PARAM_STR);
    $stmt->bindParam(":numCelular", $datos["numCelular"], PDO::PARAM_STR);
    $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
    $stmt->bindParam(":informacion", $datos["informacion"], PDO::PARAM_STR);

    if($stmt->execute()){
        return "ok";
    }else{
        print_r(Conexion::conectar()->errorInfo());
    }

    $stmt->Close();
    $stmt = null;
}

//**************** FUNCIONES PARA SELECCIONAR INFORMACIÓN DE LAS TABLAS ****************



//seleccionar registro tabla crear perfil

static public function mdlSeleccionarRegistroTablaEspecie($tabla, $item, $valor){
    if($item == null && $valor == null){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt ->execute();
        return $stmt -> fetchAll();
    }
    $stmt->Close();
    $stmt = null;
}

static public function mdlSeleccionarRegistroTablaServicios($tabla, $item, $valor){
    if($item == null && $valor == null){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt ->execute();
        return $stmt -> fetchAll();
    }
    $stmt->Close();
    $stmt = null;
}

//metodo con consulta para traer la información condicionada para mostrar los servicios
static public function mdlSeleccionarRegistroTablaMostrarServicioss($tabla, $item, $valor){
    if($item == null && $valor == null){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idservicio = $valor");

        $stmt ->execute();
        return $stmt -> fetchAll();
    }else{
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idservicio = $valor");

        $stmt ->execute();
        return $stmt -> fetch();
    }
    $stmt->Close();
    $stmt = null;
}
static public function mdlSeleccionarRegistroTablaTipoDocumento($tabla, $item, $valor){
    if($item == null && $valor == null){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt ->execute();
        return $stmt -> fetchAll();
    }
    $stmt->Close();
    $stmt = null;
}

static public function mdlSeleccionarRegistroTablaTipoServicio($tabla, $item, $valor){
    if($item == null && $valor == null){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt ->execute();
        return $stmt -> fetchAll();
    }
    $stmt->Close();
    $stmt = null;
}

static public function mdlSeleccionarRegistrosTablaRaza($tabla, $item, $valor){
    if($item == null && $valor == null){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt ->execute();
        return $stmt -> fetchAll();
    }
    $stmt->Close();
    $stmt = null;
}

static public function mdlSeleccionarRegistroTablaRegistro($tabla, $item, $valor){
    if($item == null && $valor == null){
        
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE email = '$valor'");

        $stmt->execute();
        return $stmt->fetchAll();
    }
    else{
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE email = '$valor'");

        $stmt->execute();
        return $stmt->fetch();
    }
    $stmt->Close();
    $stmt = null;
}

static public function mdlSeleccionarRegistroTablaGeneroMascota($tabla, $item, $valor){
    if($item == null && $valor == null){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt ->fetchAll();
    }
    $stmt->Close();
    $stmt = null;
}

}
