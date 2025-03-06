<?php
function login($conexion,$usuario,$password){
	try{
		$consultar = $conexion->prepare("SELECT emailaddress,birthdate,name,passenger_id,passLogin FROM passengerdetails WHERE emailaddress='$usuario'");
		$consultar->execute();
		$cont=0;
		foreach($consultar->fetchAll() as $consulta){
                $emailaddressBD=$consulta["emailaddress"];
				$passLoginBD=$consulta["passLogin"];
				$cont++;
		}
		
		if($cont == 1){
			if($emailaddressBD==$usuario && $passLoginBD==$password){
                    $consultar->execute();
                    return $consultar->fetchAll();
			}
		}
	}
	catch(PDOException $e){
		echo "Error: Login() " . $e->getMessage();	
	}
}
?>