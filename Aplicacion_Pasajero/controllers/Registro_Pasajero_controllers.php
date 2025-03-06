<?php
	session_start();

	include_once '../db/db.php';
	include_once '../models/Registro_Pasajero_model.php';
	include_once '../views/Registro_Pasajero_views.php';	
	
	$conexion=conexion();
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(!empty($_POST["Nombre"]) 
			&& !empty($_POST["Apellidos"]) 
			&& !empty($_POST["Calle"])
			&& !empty($_POST["CodigoPostal"])
			&& !empty($_POST["Ciudad"])
			&& !empty($_POST["Pais"])
			&& !empty($_POST["Telefono"])
			&& !empty($_POST["Nacimiento"])
			&& !empty($_POST["Email"])
			&& !empty($_POST["Contraseña"])
			){
				$nombre=$_POST["Nombre"];
				$apellidos=$_POST["Apellidos"];
				$calle=$_POST["Calle"];
				$cp=$_POST["CodigoPostal"];
				$ciudad=$_POST["Ciudad"];	
				$pais=$_POST["Pais"];
				$telefono=$_POST["Telefono"];
				$nacimiento=$_POST["Nacimiento"];
				$email=$_POST["Email"];
				$password=$_POST["Contraseña"];	
				$respuesta=comprobarPasajero($conexion,$email);
				
				if($respuesta==null){
					$idParaAsignar=idPasajero($conexion);
					insertPasajero($conexion,$idParaAsignar,$nombre,$apellidos,$calle,$cp,$ciudad,$pais,$telefono,$nacimiento,$email,$password);
				}
				else{
					echo "Pasajero ya existe"."<br>";
				}
			}
		else{
			echo "Rellena los datos";
		}
	}

?>
