<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
require '../modelo/conexion.php';
$conectar = new Conexion();
	$conectar->conectar();
	$conect=$conectar->getConexion();



	$sentencia="UPDATE receta SET usuario='$usuario',  correo='$correo', telefono='$telefono', receta='$receta' WHERE id='$id'";
	//$sentencia="UPDATE user_register set user_name='Pedro', email='Pedro', area_id='2', password='12345', type_user_id='1', status='Activo',  where user_id='2'";
	//echo ('$sentencia');                            
	//la variable  $mysqli viene de connect_db que lo traigo con el require("conexion.php");
	$resent=mysqli_query($conect,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location:/ApiComparte/index.php");
		
		//echo "<script>location.href='/Pagina_ZonaTic/Pagina_ZonaTic/Interfazes/admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='/ApiComparte/index.php'</script>";

		
	}
?>