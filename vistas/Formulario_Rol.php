<?php
//estas dos lineas de codigo deben de ir en el index
require_once "controladores/formularios.controlador.php";
require_once "modelos/formulario.modelo.php";
?>

<form method="post">
    <input type="text" placeholder="Nombre" name="nombreRol">


<?php
    $registro = ControladorFormularios::ctrRegistroRol();

    if($registro == "ok"){
        // echo '<script>

		// 		if ( window.history.replaceState ) {

		// 			window.history.replaceState( null, null, window.location.href );

		// 		}

		// 	</script>';

			echo '<div class="alert alert-success">El usuario ha sido registrado</div>';
    }

?>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>