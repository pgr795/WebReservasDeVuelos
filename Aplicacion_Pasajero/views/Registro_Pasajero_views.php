<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- FontAwesome para iconos de redes sociales -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Registro Pasajero</title>
    <style type="text/css">
        body {
            background-color: rgba(59, 106, 169, 0.9);
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #icono {
            width: 100px;
            padding: 5px;
            margin-bottom: 5px;
            border-radius: 50%;
        }
        footer {
            background-color: #05070a66;
            color: white;
            text-align: center;
            padding: 20px;
            width: 100%;
            position: relative;
        }
        footer a {
            color:rgb(255, 255, 255);
            margin: 0 10px;
            font-size: 20px;
        }
        footer a:hover {
            color: white;
        }
    </style>
</head>
<body>
    <main>
        <section class="container py-3" style="font-family: Arial, Helvetica, sans-serif;">
            <div class="card border-light text-center px-5 py-5 my-5" style="border-style: inset; background:rgba(0,0,0,0.8);">
                <h1 class="display-4 text-white">Registro de Pasajero</h1>
                <p class="lead text-white pt-3">Rellene los campos</p>
                <div class="card-body text-center">
                    <form method="post" action="./Registro_Pasajero_controllers.php">
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" required>
                                    <label for="Nombre">Nombre</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Apellidos" required>
                                    <label for="Apellidos">Apellidos</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2 pt-2">
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="Calle" name="Calle" placeholder="Calle" required>
                                    <label for="Calle">Calle</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="CodigoPostal" name="CodigoPostal" placeholder="Código Postal" maxlength="5" required>
                                    <label for="CodigoPostal">Código Postal</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2 pt-4">
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="Ciudad" name="Ciudad" placeholder="Ciudad" required>
                                    <label for="Ciudad">Ciudad</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="Pais" name="Pais" placeholder="País" required>
                                    <label for="Pais">País</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2 pt-4">
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Teléfono" maxlength="9" required>
                                    <label for="Telefono">Teléfono</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="Nacimiento" name="Nacimiento" required>
                                    <label for="Nacimiento">Fecha de Nacimiento</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2 pt-4">
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" required>
                                    <label for="Email">Email para Iniciar Sesión</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="Contraseña" name="Contraseña" placeholder="Contraseña" maxlength="12" required>
                                    <label for="Contraseña">Contraseña</label>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Registrar pasajero" class="btn w-25 btn-outline-light btn-lg m-4">
                        <input type="button" value="Atrás" onclick="window.location.href='CerrarSesion_controllers.php'" class="btn w-25 btn-outline-light btn-lg">
                    </form>
                </div>
            </div>
        </section>
    </main>
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