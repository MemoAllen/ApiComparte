<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="../csss/estilos.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



		
		<?php
		extract($_GET);
        require '../modelo/conexion.php';
    $conectar = new Conexion();
	$conectar->conectar();
	$conect=$conectar->getConexion();

		$sql="SELECT * FROM receta WHERE id=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($conect,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
				$usuario=$row[1];
				$correo=$row[2];
		    	$telefono=$row[3];
				$receta=$row[4];
				
		    
		    }



		?>
<form action="/ApiComparte/modelo/ejecutaactualizar.php" method="POST">
        <h2>Edita tus recetas</h2>

		<b style="color:white ;">No. receta</b>
        <input style="background-color: #B9F6CA;" type="text" name="id" value= "<?php echo $id ?>" readonly="readonly">

        <b style="color:white ;">Ingresa un usuario</b>
        <input style="background-color: #B9F6CA;" type="text" name="usuario"value="<?php echo $usuario?>"readonly="readonly">
        <b style="color:white ;">Ingresa un correo</b>
        <input style="background-color: #B9F6CA;" type="text" name="correo" value="<?php echo $correo?>">
        <b style="color:white ;">Ingresa un telefono</b>
        <input style="background-color: #B9F6CA;" type="text" name="telefono"  value="<?php echo $telefono?>" readonly="readonly">
        <b style="color:white ;">Ingresa tu receta de comida</b>
        <textarea style="background-color:  #B9F6CA;" name="receta" id="receta"   cols="30" rows="10"><?php echo $receta?></textarea>
        <input type="submit" name="enviar" value="Enviar Edición" id="boton">
       


    </form> <br> <br>
<!--
		<form action="/ApiComparte/modelo/ejecutaactualizar.php" method="post">
				Id<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
				Usuario<br> <input type="text" name="usuario" value="<?php echo $usuario?>"readonly="readonly"><br>
				Correo<br> <input type="text" name="correo" value="<?php echo $correo?>"> <br>
				telefono<br> <input type="text" name="telefono" value="<?php echo $telefono?>" readonly="readonly"><br>
				receta<br> <input type="text" name="receta" value="<?php echo $receta?>"><br>
				
				
				
				<br>
				<a href="/ApiComparte/modelo/ejecutaactualizar.php"><input type="submit"name="Guardar" id="Guardar" value="Guardar" class="btn btn-success btn-primary">
			</form>

		
    -->
</body>
</html>