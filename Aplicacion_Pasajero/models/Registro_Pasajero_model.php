<?php
function comprobarPasajero($conexion,$usuario){
	try{
		$consulta=$conexion->prepare("SELECT emailaddress FROM passengerdetails WHERE emailaddress='$usuario'");
		$consulta->execute();
		$resultado= $consulta->fetchAll();
		return $resultado;
	}
	catch (PDOException $e) {
		echo "Error comprobarPasajero()"."<br>";
		echo $e->getMessage();
	}
}
function insertPasajero($conexion,$idParaAsignar,$nombre,$apellidos,$calle,$cp,$ciudad,$pais,$telefono,$nacimiento,$email,$password){
	try{
		$insert= "INSERT INTO passengerdetails VALUES ('$idParaAsignar','$nombre','$apellidos','$calle','$cp','$ciudad','$pais','$telefono','$nacimiento','$email','$password')";
		$conexion->exec($insert);
		echo "Pasajero insertado";
	}
	catch (PDOException $e) {
		echo "Error el pasajero ya existe"."<br>";
		echo $e->getMessage();
	}
}
function idPasajero($conexion){
		try{
			$consulta=$conexion->prepare("SELECT MAX(passenger_id) as codigo FROM passengerdetails");
			$consulta->execute();
			
			foreach($consulta->fetchAll() as $consulta){
				$idPasajeroBD=$consulta['codigo'];
			}
			
			if($idPasajeroBD==null){
				$idPasajero=1;
				return $idPasajero;
			}
			else{
				$idPasajero=$idPasajeroBD;
				$idPasajero+=1;
				return $idPasajero;
			}
		}
		catch (PDOException $e) {
			echo "Error idPasajero()"."<br>";
			echo $e->getMessage();
		}	
}
?>