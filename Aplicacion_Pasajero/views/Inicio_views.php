<!DOCTYPE html>
<html lang="es">
  <head>
    <title>WEB RESERVA DE VUELOS - INICIO</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            /* background-color: rgba(30, 58, 95, 0.9); */
            background-color: rgb(59 106 169 / 90%);
            color: white;
        }
        .container{
            position: relative;
            margin:0%;
            padding:0%;
            justify-self: center;
            top: 20px;
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
        .card {
            background: rgba(0, 0, 0, 0.7);
            color: white;
        }
        .card-header {
          background-color: #c0cad9;
          color: black;
          width: 100%;
        }
        #buscador{
          color: black;
          background: azure;
          height: 100%;
          font-weight: bold;
          padding: 5%;
          border-radius: 20px;
        }
        .btn-outline-light {
            border-color:rgb(255, 255, 255);
            color:rgb(255, 255, 255);
        }
        .btn-outline-light:hover {
            background-color:rgba(45, 87, 141, 0.9);
            color: white;
        }
        .navbar {
            background-color: rgba(0, 0, 0, 0.8);
            padding-left: 90%;
            padding-right: 90%;
            border-style: inset;
        }
        li{
            padding:5px;
        }
        footer {
            background-color: #05070a66;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: auto;
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

        @font-face { font-family: OriginTech; src: url('./fonts/space_time/spacetime-regular.ttf'); }
        .fuentePersonalizada { font-family: OriginTech; }

        /* @font-face { font-family: OriginTech; src: url('./fonts/pervitina_dex/Pervitina-Dex-FFP.ttf'); } */
        /* .fuentePersonalizada { font-family: OriginTech; } */


    </style>
  </head>
  <body>
    <main>
      <!-- Barra de navegación -->
      <section>
        <div class="d-flex align-items-center justify-content-center w-100" style="text-align: center;">
          <nav class="navbar navbar-expand-lg">
            <img src="../icono.jpeg" id="iconoMenu" alt="Logo Hispania Airlines">  
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <input type="button" value="Registro Pasajero" onclick="window.location.href='controllers/Registro_Pasajero_controllers.php'" class="btn btn-outline-light btn-lg">
                </li>
                <li class="nav-item">
                  <!-- <input type="button" value="Login Pasajero" onclick="window.location.href='controllers/Login_Pasajero_controllers.php'" class="btn btn-outline-light btn-lg"> -->
                  <input type="button" value="Login Pasajero" onclick="window.location.href='../views/Login_Pasajero_views.php'" class="btn btn-outline-light btn-lg">
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </section>

      <!-- Aplicacion -->
      <section class="container">
          <h1 class="card-header text-center p-2" style="font-family:'fontawesome';  border-radius: 10px; margin-top: 8px;">HISPANIA AIRLINES</h1>
              <div class="container my-5" id="buscador">
                <br>
                <h2 class="text-center">Buscador de Viajes de Ida y Vuelta</h2>
                  <form style="padding: 2%;">
                    <div class="row">
                      <!-- Origen -->
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label for="origen" class="form-label">Origen</label>
                          <select class="form-select" id="origen" required>
                            <option value="" disabled selected>Selecciona la capital de origen</option>
                            <option value="Madrid">Madrid</option>
                            <option value="Barcelona">Barcelona</option>
                            <option value="Sevilla">Sevilla</option>
                            <option value="Zaragoza">Zaragoza</option>
                            <option value="Valencia">Valencia</option>
                            <option value="Bilbao">Bilbao</option>
                            <option value="Alicante">Alicante</option>
                            <option value="Palma">Palma</option>
                            <option value="Murcia">Murcia</option>
                            <option value="Vigo">Vigo</option>
                            <option value="Granada">Granada</option>
                            <option value="Oviedo">Oviedo</option>
                            <option value="La Coruña">La Coruña</option>
                            <option value="Toledo">Toledo</option>
                            <option value="Salamanca">Salamanca</option>
                            <!-- Agregar más opciones según las capitales de autonomía -->
                          </select>
                        </div>
                      </div>
                      
                      <!-- Destino -->
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label for="destino" class="form-label">Destino</label>
                          <select class="form-select" id="destino" required>
                            <option value="" disabled selected>Selecciona la capital de destino</option>
                            <option value="Madrid">Madrid</option>
                            <option value="Barcelona">Barcelona</option>
                            <option value="Sevilla">Sevilla</option>
                            <option value="Zaragoza">Zaragoza</option>
                            <option value="Valencia">Valencia</option>
                            <option value="Bilbao">Bilbao</option>
                            <option value="Alicante">Alicante</option>
                            <option value="Palma">Palma</option>
                            <option value="Murcia">Murcia</option>
                            <option value="Vigo">Vigo</option>
                            <option value="Granada">Granada</option>
                            <option value="Oviedo">Oviedo</option>
                            <option value="La Coruña">La Coruña</option>
                            <option value="Toledo">Toledo</option>
                            <option value="Salamanca">Salamanca</option>
                            <!-- Agregar más opciones según las capitales de autonomía -->
                          </select>
                        </div>
                      </div>
                    </div>   
                    <!-- Botón de búsqueda -->
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Buscar Viajes</button>
                    </div>
                  </form>
              </div>
      </section> 
    </main>

    <!-- Footer -->
    <footer class="w-100">
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
