<!DOCTYPE html>



<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ZonaTic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="/ZonaTic.V3/Zona/css/miEstilo.css">
  <script src="https://kit.fontawesome.com/23466eb581.js" crossorigin="anonymous"></script>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="" style="background-attachment: fixed">
<div class="container-fluid">
    <div id="encabezado" class="row">
     <div id="ll" class="col-4 ">
            <img id="img"src="/Pagina_ZonaTic/Pagina_ZonaTic/images/logop.jpg" width="50" height="50" class="d-inline-block align-top float-left">
            <h2>Zona TIC</h2>
          </div>
          <div class="col-3">
            <div id="buscador" class="    form-group">
              <input id="se" class="form-control float-left" type="search" placeholder=" Buscar articulo &phi;" name="" size="50">
            </div>  
          </div>
          <div class="col-2">
            <button id="btnbuscar" class="btn btn-primary" type="submit"><i id="icb" class="fas fa-search"></i></button>
          </div>
          <div class="col">
           <a href="/Pagina_Zon/Pagina_ZonaTic/Controlador/inactivos.php"> <img id="iconos" src="/Pagina_Zon/Pagina_ZonaTic/iconos/solicitudes.png" width="28"></a>
            <img id="iconos"  src="/Pagina_Zon/Pagina_ZonaTic/iconos/ayuda.png" width="28">
            <img id="iconos"  src="/Pagina_Zon/Pagina_ZonaTic/iconos/ajustes.png" width="28">
            <img id="iconos"  src="/Pagina_Zon/Pagina_ZonaTic/iconos/user.png" width="28">
			<img id="iconos"  src="/Pagina_Zon/Pagina_ZonaTic/iconos/menu.png" width="28">
			
          </div>
    </div>
    <br>
    <div class="row">
    	<div class="col-4">
      <a href="/Pagina_Zon/Pagina_ZonaTic/Interfazes/admin.php">	<img id="regresar" src="/Pagina_Zon/Pagina_ZonaTic/iconos/regresar.png" width="40"></a>
			
	<a href="/Pagina_ZonaTic/Pagina_ZonaTic/Controlador/desconectar.php"><button id="pre" type="button">Cerrar Cesión </button></a>
        </div>
        


  <head>
    <meta charset="utf-8">
    <title>ZonaTic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	require '../include/cabecera.php';
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->


<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="admin.php">ADMINISTRADOR DEL SITIO</a></li>
			 
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
		<li><a href="">Bienvenido <strong><?php echo $_SESSION['user_name'];?></strong> </a></li>
					 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>

<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2> Administración de usuarios registrados</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Edición de usuarios</h4>
		<div class="row-fluid">
		
		<?php
		extract($_GET);
    require '../Modelo/conexion.php';
    $conectar = new Conexion();
	$conectar->conectar();
	$conect=$conectar->getConexion();

		$sql="SELECT * FROM user_register WHERE user_id=$user_id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($conect,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$user_id=$row[0];
				$user_name=$row[1];
				$email=$row[2];
		    	$area_id=$row[3];
				$password=$row[4];
				$type_user_id=$row[5];
				$status=$row[6];
		    
		    }



		?>

		<form action="/Pagina_ZonaTic/Pagina_ZonaTic/Modelo/ejecutaactualizar.php" method="post">
				Id<br><input type="text" name="user_id" value= "<?php echo $user_id ?>" readonly="readonly"><br>
				Usuario<br> <input type="text" name="user_name" value="<?php echo $user_name?>"readonly="readonly"><br>
				Correo<br> <input type="text" name="email" value="<?php echo $email?>"readonly="readonly"> <br>
				Area<br> <input type="text" name="area_id" value="<?php echo $area_id?>" readonly="readonly"><br>
				Contraseña<br> <input type="text" name="password" value="<?php echo $password?>"readonly="readonly"><br>
				Tipo de usuario<br> <input type="text" name="type_user_id" value="<?php echo $type_user_id?>"readonly="readonly"><br>
				Estatus<br> <input type="text" name="status" value="<?php echo $status?>"><br>
				
				
				<br>
				<a href="/Pagina_ZonaTic/Pagina_ZonaTic/Modelo/ejecutaactualizar.php"><input type="submit"name="Guardar" id="Guardar" value="Guardar" class="btn btn-success btn-primary">
			</form>

		
		
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		
		</div>

		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>

</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>


