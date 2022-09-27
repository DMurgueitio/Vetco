<?php
    require_once "controladores/plantillaControladores.php";
    require_once "controladores/formularios.controlador.php";
    require_once "modelos/formulario.modelo.php";
/*Para probar que la conexion se hizo*/

$conexion = Conexion::conectar();

// echo '<pre>'; print_r($conexion); echo '</pre>';

    $plantilla = new controladorPlantilla(); // se llama una instancia de la clase
    $plantilla ->ctrTraerPlantilla(); //se ejecuta la instancia de la clase
?>