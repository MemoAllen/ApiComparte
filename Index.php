
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./csss/estilos.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Comparte</title>
</head>
<body>

<form action="control.php" method="POST" id="form_actualizar">
        <h2>Comparte tus recetas</h2>
        <b style="color:white ;">Ingresa un usuario</b>
        <input style="background-color: #B9F6CA;" type="text" name="usuario" placeholder="Ingresa un usuario">
        <b style="color:white ;">Ingresa un correo</b>
        <input style="background-color: #B9F6CA;" type="text" name="correo" placeholder="Ingresa un correo valido">
        <b style="color:white ;">Ingresa un telefono</b>
        <input style="background-color: #B9F6CA;" type="text" name="telefono" placeholder="Ingresa un Teléfono">
        <b style="color:white ;">Ingresa tu receta de comida</b>
        <textarea style="background-color:  #B9F6CA;" name="receta" id="receta" placeholder="Escribe tu receta" cols="30" rows="10"></textarea>
        <input type="submit" name="enviar" id="boton">
       


    </form> <br> <br>









<div class="container">

<div>
		<center><h3 style="color:white;" id='titu'> Administración de recetas</h2></center>
		</div>
		<div class="well well-small">
		<hr class="soft"/>
		
		<div class="row-fluid">
		
		<?php
				
				require './modelo/conexion.php';
				$conectar = new Conexion();
				$conectar->conectar();
				$conect=$conectar->getConexion();
				$sql=("SELECT * FROM receta");
	
//la variable  $mysqli viene de connect_db que lo traigo con el require("conexion.php");
				$query=mysqli_query($conect,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td style=color:white;><b>No. receta</b></td>";
						echo "<td style=color:white;><b>Usuario</b></td>";
						echo "<td style=color:white;><b>Correo</b></td>";
						echo "<td style=color:white;><b>Telefono</b></td>";
						echo "<td style=color:white;><b>Receta</b></td>";
						
						echo "<td style=color:white;><b>Editar</b></td>";
						echo "<td style=color:white;><b>Borrar</b></td>";
					echo "</tr>";

			    
			
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td style=color:white;>$arreglo[0]</td>";
				    	echo "<td style=color:white;>$arreglo[1]</td>";
				    	echo "<td style=color:white;>$arreglo[2]</td>";
				    	echo "<td style=color:white;>$arreglo[3]</td>";
						echo "<td style=color:white;>$arreglo[4]</td>";
						
						
						  
				    	echo "<td><a href='/ApiComparte/controlador/update.php? id=$arreglo[0]'><img src='/ApiComparte/images/actualizar.jpg' class='img-rounded'/></a></td>";
						echo "<td><a href='/ApiComparte/index.php?id=$arreglo[0]&idborrar=2'><img src='/ApiComparte/images/eliminar.png' class='img-rounded'/></a></td>";
						

						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM receta WHERE id=$id";
						$resborrar=mysqli_query($conect,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: ');
						echo "<script>location.href='/ApiComparte/index.php'</script>";
					}

			?>



<!--Container-->
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    
</body>
</html>