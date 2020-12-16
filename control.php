<?php
if (isset($_REQUEST['enviar'])){
    include("./modelo/conexion.php");

    $conectar = new Conexion();
	$conectar->conectar();
	$conect=$conectar->getConexion();




    $usuario=$_POST['usuario'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $receta=$_POST['receta'];
//Inserción a la BD

    $sql= "INSERT INTO `receta` (`id`, `usuario`, `correo`, `telefono`, `receta`) VALUES (NULL, '$usuario', '$correo', '$telefono', '$receta')";
    $ejecutar = mysqli_query($conect, $sql);



    if($ejecutar){
       
        header("Location: index.php");
    }
}
?>