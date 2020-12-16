<?php 
 class Conexion{
	/* Crear los atributos de la clase que contendran
	   los datos que requiere ésta para abrir una 
	   conexión  con el servidor de base de datos.*/

	private $host="localhost";
	private $usuario="root";
	private $clave="root";
	private $db="recetas";
	private $conexion; // Guardar la cadena de conexión que se genera a la base de datos

	public function conectar(){
		//realizar la operación para la conexión a la BD
		$this->conexion=mysqli_connect($this->host,$this->usuario,$this->clave,$this->db);
		if(!($this->conexion)){
			die("Fallo en la conexión: " . mysqli_connect_error());
		}
		$this->conexion->set_charset("utf8");
	}

	public function getConexion(){
		return $this->conexion;
    }
    
 }
?>