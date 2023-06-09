<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Menu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>

<body>

  <!-- Navegación -->
  <div class="row">

    <!--Contenido de la navegación!-->
    <div id="sidebar" class="col-auto ms-2 mt-2 py-4">

      <div id="user" class="row">
        <!-- Usuario -->
        <div class="nav-item text-center">
          <div class="nav-item-content justify-content-center mt-4 mb-4">
            <div class="circle-container">
              <img src="assets/img//user.jfif" alt="Usuario">
            </div>
          </div>
          <div class="title-circle mt-5">
            <h6 id="user-title">Usuario 1</h6>
            <p id="user-subtitle">Administrador</p>
          </div>
        </div>
        <div class="title-underline"></div>
      </div>

      <div id="nav_container" class="row">
        <!-- Contenido Navegacion -->
        <nav class="">
          <ul class="nav flex-column px-1">

            <li class="nav-item">
              <div class="nav-item-content">
                <a class="nav-link-text" href="home.php">
                  <i class="bi bi-house-door icon" title="Inicio"></i>
                  <p>Inicio</p>
                </a>
              </div>
            </li>

            <li class="nav-item">
              <div class="nav-item-content">
                <a class="nav-link-text" href="contribuyente.php">
                  <i class="bi bi-currency-dollar icon" title="Contribuyente"></i>
                  <p>Contribuyente</p>
                </a>
              </div>
            </li>

            <li class="nav-item">
              <div class="nav-item-content">
                <a class="nav-link-text ">
                  <i class="bi bi-journal-bookmark icon" title="Padrones"></i>
                  <p>Padrones</p>
                  <span class="arrowIcon bi bi-chevron-right"></span>
                </a>
              </div>
              <ul class="sub-menu despliegueSubMenu">
                <li><a href="predialP.php">Predial</a></li>
                <li><a href="drenajeP.php">Drenaje</a></li>
                <li><a href="aguaP.php">Agua</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <div class="nav-item-content">
                <a class="nav-link-text ">
                  <i class="bi bi-cash-coin icon" title="Recaudación"></i>
                  <p>Recaudación</p>
                  <span class="arrowIcon bi bi-chevron-right"></span>
                </a>
              </div>
              <ul class="sub-menu despliegueSubMenu">
                <li><a href="predial.php">Predial</a></li>
                <li><a href="drenaje.php">Drenaje</a></li>
                <li><a href="agua.php">Agua</a></li>
                <li><a href="general.php">General</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <div class="nav-item-content">
                <a class="nav-link-text ">
                  <i class="bi bi-receipt icon" title="Recibos"></i>
                  <p>Recibos</p>
                  <span class="arrowIcon bi bi-chevron-right"></span>
                </a>
              </div>

              <ul class="sub-menu despliegueSubMenu">
                <li><a href="recibos.php">Listado</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <div class="nav-item-content">
                <a class="nav-link-text">
                  <i class="bi bi-file-bar-graph icon" title="Reportes"></i>
                  <p>Reportes</p>
                  <span class="arrowIcon bi bi-chevron-right"></span>
                </a>
              </div>
              <ul class="sub-menu despliegueSubMenu">
                <li><a href="predialC.php">Cobro Predial</a></li>
                <li><a href="drenajeC.php">Cobro Drenaje</a></li>
                <li><a href="aguaC.php">Cobro Agua</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>

      <div id="session" class="row">
        <!-- Session -->
        <div class="nav-item" id="cerrar">
          <div class="nav-item-content">
            <a class="nav-link-text" href="index.php">
              <i class="bi bi-power icon" aria-level="Cerrar Sesion"></i>
              <p>Cerrar Sesion</p>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="col" id="title-header">
      <div class="row">
        <div id="header-title" class="col-12">
          <!--Fijo navegación-->
          <nav class="navbar my-2">
            <div class="container-fluid">
              <i id="toggleSidebar" class="bi bi-list"></i>
              <a id="titPrin" class="navbar-brand" href="#">Santiago Huajalotitlan</a>
              <img src="assets/img/icono.png" class="img-logo">
            </div>
          </nav>
        </div>


      </div>

      <!--Archivos Js-->
      <script src="assets/js/main.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>