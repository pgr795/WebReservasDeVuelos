<!-- <?php
session_start();
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<style type="text/css">
		body { background-color: #bebebe; }
	</style>
	    <title>ERROR PAGO</title>
    </head>
      
    <body>
		<div class="container" style="font-family: Arial, Helvetica, sans-serif; padding-top: 10rem;">
			<div class="card border-light text-white text-center px-4 py-4 my-4" style="background:rgba(0,0,0,0.8);font-weight: bold;">
				<h1 class="display-4 text-white pt-2">PAGO NO SE HA REALIZADO </h1> 
				<h2 class="display-8 text-white pt-2">ERROR A REALIZAR EL PAGO CONSULTE CON SU BANCO</h2>
				<div class="card-body" style="text-align: center;">
					<div class="btn-group w-50 pt-2" role="group" style="text-align: center; font-size: large; font-weight: bold;">
						<input type='button' value="Inicio" onclick="window.location.href='.php'" class="w-25 btn btn-outline-light" style="font-weight: bold;">
					</div>	
				</div>
			</div>
		</div> 
	</body>
</html>

