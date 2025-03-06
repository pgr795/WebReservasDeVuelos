<!-- <?php
	if(!isset($_SESSION['email']) && !isset($_SESSION['nombre']) && !isset($_SESSION['id'])){
		unset($_SESSION['id']);
		unset($_SESSION['email']);
		unset($_SESSION['nombre']);
		session_destroy();
		setcookie ("PHPSESSID", "", time() - 3600);
		header("Location:../index.php");
	}
?> -->
<html>
	<head>
		<title>RESERVA VUELOS</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<!-- FontAwesome para iconos de redes sociales -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
		<style type="text/css">
			/* Body con flexbox para centrar el main */
			body {
				background-color: rgba(59, 106, 169, 0.9);
				height: 100vh;
				width: 100%;
				display: flex;
				flex-direction: column;
				justify-content: space-between; /* Asegura que el contenido ocupe todo el espacio */
				align-items: center;
				font-family: Arial, Helvetica, sans-serif;
				margin: 0;
			}
			#icono {
				position: left;
				top: 20px;
				left: 20px;
				width: 100px;
				padding: 5px;
				margin-bottom: 5px;
				border-radius: 50%;
			}
			#iconoMenu {
				width: 75px;
				padding: 5px;
				margin-left: 5px;
				margin-right: 5px;
				border-radius: 50%;
			}
			main {
				width: 100%;
				max-width: 900px; /* Ajusta el tamaño del main */
				text-align: center;
			}
			footer {
				background-color: #05070a66;
				color: white;
				text-align: center;
				padding: 20px;
				width: 100%;
			}
			footer a {
				color:rgb(255, 255, 255);
				margin: 0 10px;
				font-size: 20px;
			}
			footer a:hover {
				color: white;
			}
			/* Asegurarse de que el main no empuje el footer fuera de la vista */
			.content-wrapper {
				flex: 1;
				width: 100%;
			}
		</style>
	</head>
	<body>
		<main class="container py-5" style="font-family: Arial, Helvetica, sans-serif;">
			<section class="card border-light text-white text-center px-4 py-4 my-4" style="background:rgba(0,0,0,0.8);font-weight: bold;">
				<h1 class="display-4 text-white pt-2">PORTAL DE RESERVA VUELOS</h1> 
				<h2 class="display-8 text-white pt-2">MENÚ PASAJERO - RESERVAR VUELOS </h2>
					
				<div class="card-body" style="text-align: left;">
					<p class="text-white pt-2">Bienvenido/a:</p>
					<!-- <?php echo $_SESSION['nombre']; ?> <BR><BR> -->
					<p class="text-white pt-2">Identificador Pasajero:</p>
					<!-- <?php echo $_SESSION['email']; ?>  <BR><BR> -->
					<p class="text-white pt-2">Selecciona Vuelo:</p>
					<!-- <?php
						SelectVuelos($_SESSION['id']);
						// var_dump($datos);
					?> -->
				</div>
				
				<!--Div de botones -->
				<section class="btn-group pt-2" role="group" style="text-align: center; font-size: medium;">
					<input type="button" value="Agregar Vuelo" onclick="window.location.href='Reservar_Vuelos_controllers.php'" class="w-50 btn btn-outline-light btn-lg">
					<input type="button" value="Borrar Vuelos" onclick="window.location.href='Check_In_controllers.php'" class="w-50 btn btn-outline-light btn-lg">
					<input type="button" value="Finalizar Reserva" onclick="window.location.href='Consultar_Reservas_controllers.php'" class="w-50 btn btn-outline-light btn-lg">
					<input type="button" value="Atras" onclick="window.location.href='Menu_Pasajero_controllers.php'" class="w-50 btn btn-outline-light btn-lg">
				</section>
			</section>

			<section class="container" style="font-family: Arial, Helvetica, sans-serif;">		
				<!-- <?php
					function mostrarVueloSeleccionado($vuelos){
						echo "<div class='card-header text-white px-4 py-4 my-4' style='background:rgba(0,0,0,0.8);'>"; 
						echo "<h3 style='font-weight: bold;'>Vuelos:</h3>";
						echo "<br>";
						echo "<table border='1px'>";
						echo "<thead>";
								echo "<td class='card-header'><b>Numero de vuelo</b></td>";
								echo "<td class='card-header'><b>Origen</b></td>";
								echo "<td class='card-header'><b>Destino</b></td>";
						echo"</thead>";
						echo "<tbody>";
							echo "<tr>";
								echo "<td class='card-header'>".$vuelos[0]."</td>";
								echo "<td class='card-header'>".$vuelos[1]."</td>";
								echo "<td class='card-header'>".$vuelos[2]."</td>";
							echo "</tr>";
						echo "<tbody>";
						echo "</table>";
						echo "<br>";
						echo "</div>";
					}
				?> -->	
			</section>
		</main>

		<!-- Footer -->
		<footer>
        	<img src="../icono.jpeg" id="icono" alt="Logo Hispania Airlines">
        	<p>&copy; 2025 Hispania Airlines. Todos los derechos reservados.</p>
        	<p>Ubicación: Madrid, España</p>
        	<p>Contacto: info@hispaniaairlines.com | Tel: +34 123 456 789</p>
        	<div>
            	<a href="https://instagram.com/hispaniaairlines" target="_blank"><i class="fab fa-instagram"></i></a>
            	<a href="https://x.com/hispaniaairlines" target="_blank"><i class="fab fa-twitter"></i></a>
            	<a href="https://facebook.com/hispaniaairlines" target="_blank"><i class="fab fa-facebook"></i></a>
            	<a href="https://linkedin.com/company/hispaniaairlines" target="_blank"><i class="fab fa-linkedin"></i></a>
        	</div>
    	</footer>		
	</body>
</html>


