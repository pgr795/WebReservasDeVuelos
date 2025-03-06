<!DOCTYPE html>
<html>
<head>
    <title>LOGIN PASAJERO</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- FontAwesome para iconos de redes sociales -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        body {
            background-color: rgba(59, 106, 169, 0.9);
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        main {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            text-align: center;
        }
        .btn-flotante {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 1000;
        }
        footer {
            background-color: #05070a66;
            color: white;
            text-align: center;
            padding: 20px;
            width: 100%;
        }
        footer a {
            color: white;
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
        <div class="container py-5">
            <div class="card border-light text-center px-5 py-5 my-5" style="background:rgba(0,0,0,0.8);">
                <button onclick="history.back()" class="btn btn-primary btn-flotante">Atrás</button>
                <h1 class="display-4 text-white">Iniciar Sesión</h1>
                <p class="lead text-white pt-3">Rellene los campos para iniciar sesión.</p>
                <div class="card-body">
                    <form method="post" action="../controllers/Login_Pasajero_controllers.php" >
                        <div class="form-group pb-3">
                            <input type="text" name="usuario" class="form-control-lg w-50 text-center" placeholder="Usuario" autofocus>
                        </div>
                        <div class="form-group pb-3">
                            <input type="password" name="password" class="form-control-lg w-50 text-center" placeholder="Contraseña">
                        </div>
                        <input type="submit" style="font-size: medium; font-weight: bold;" value="Iniciar Sesión" class="w-50 btn btn-outline-light btn-lg">
                        <h5 class="text-white pt-3">¿No tiene cuenta? <a style="color: #41a5ee;" href="../controllers/Registro_Pasajero_controllers.php">Regístrese</a></h5>
                        <h5 class="text-white">¿Olvidó su contraseña? <a style="color: #41a5ee;" href="#">Restaurar contraseña</a></h5>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <img src="../icono.jpeg" id="icono" alt="Logo Hispania Airlines" style="width: 100px; border-radius: 50%;">
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