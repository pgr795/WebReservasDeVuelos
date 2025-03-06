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
		<title>PORTAL DE RESERVA VUELOS</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<!-- Bootstrap CSS -->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    	<!-- FontAwesome para iconos de redes sociales -->
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
		<title>LOGIN PASAJERO</title>
			<style type="text/css">
				html, body {
					height: 100%;
					margin: 0;
					display: flex;
					flex-direction: column;
					
        		}
				body {
					background-color: rgba(59, 106, 169, 0.9);
					height: 100vh;
					width: 100%;
					display: flex;
					flex-direction: column;
					justify-content: center;
					align-items: center;
					font-family: Arial, Helvetica, sans-serif;
        		}
				main {
					display: flex;
					justify-content: flex-start;
					align-items: center;
					flex-grow: 1;
					width: 100%;
					flex-direction: column;
					flex-wrap: wrap;
				}
				#icono {
					position: left;
					top: 20px;
					left: 20px;
					width: 100px;
					padding: 5px;
					margin-bottom:5px;
					border-radius: 50%;
				}
				#iconoMenu {
					width: 75px;
					padding: 5px;
					margin-left: 5px;
					margin-right: 5px;
					border-radius: 50%;
				}
				section {
					width: 100%;
					max-width: 800px;
				}
				footer {
					background-color: #05070a66;
					color: white;
					text-align: center;
					padding: 20px;
					width: 100%;
					position: fixed;
					bottom: 0;
					left: 0;
				}
				footer a {
					color: rgb(255, 255, 255);
					margin: 10px;
					font-size: 20px;
				}
				footer a:hover {
					color: white;
				}
			</style>
	</head>
	<body>
		<main>
			<section class="container py-5">
				<div class="card border-light text-white text-center px-4 py-4 my-4" style="background:rgba(0,0,0,0.8);font-weight: bold;">
					<h1 class="display-4 text-white pt-2">PORTAL DE RESERVA VUELOS</h1> 
					<h2 class="display-8 text-white pt-2">MENÚ PASAJERO</h2>
					<div class="card-body" style="text-align: left;">
						<p class="text-white pt-2">Bienvenido/a: <?php echo $_SESSION['nombre']; ?></p>
						<p class="text-white pt-2">Identificador Pasajero: <?php echo $_SESSION['email'];?></p>
					</div>

					<!-- Div de botones -->
					<div class="btn-group pt-2" role="group" style="text-align: center; font-size: medium; font-weight: bold;">
						<input type="button" value="Reserva Vuelos" onclick="window.location.href='Reservar_Vuelos_controllers.php'" class="w-50 btn btn-outline-light btn-lg">
						<input type="button" value="Consultar Reserva" onclick="window.location.href='Consultar_Reservas_controllers.php'" class="w-50 btn btn-outline-light btn-lg">
						<input type="button" value="Cancelar Reserva" onclick="window.location.href='Cancelar_Reserva_controllers.php'" class="w-50 btn btn-outline-light btn-lg">
						<br><br>
						<input type="button" value="Cerrar Sesión" onclick="window.location.href='CerrarSesion_controllers.php'" class="w-50 btn btn-outline-light btn-lg">
					</div>
				</div>
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

