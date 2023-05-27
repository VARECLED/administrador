<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container-fluid">
    <!--Header-->
    <?php include("menu.php") ?>
    <!--Content -->
    <div class="col px-4" id="base">

      <div class="row py-4 cards">

        <div class="card px-0 card-container">
          <img src="assets/img/card.png" class="card-img">
          <div class="card-img-overlay">
            <h5 class="card-title">No. 1</h5>
            <p class="card-text">Contribuyentes</p>
          </div>
          <div class="card-footer">
            <a href="contribuyente.php"><small>Más Información</small></a>
            <i class="bi bi-info-circle"></i>
          </div>
        </div>

        <div class="card px-0 card-container">
          <img src="assets/img/card.png" class="card-img">
          <div class="card-img-overlay">
            <h5 class="card-title">No. 1</h5>
            <p class="card-text">Padron Predial</p>
          </div>
          <div class="card-footer">
            <a href="predialP.php"><small>Más Información</small></a>
            <i class="bi bi-info-circle"></i>
          </div>
        </div>

        <div class="card px-0 card-container">
          <img src="assets/img/card.png" class="card-img">
          <div class="card-img-overlay">
            <h5 class="card-title">No. 1</h5>
            <p class="card-text">Padron de Agua</p>
          </div>
          <div class="card-footer">
            <a href="aguaP.php"><small>Más Información</small></a>
            <i class="bi bi-info-circle"></i>
          </div>
        </div>

        <div class="card px-0 card-container">
          <img src="assets/img/card.png" class="card-img">
          <div class="card-img-overlay">
            <h5 class="card-title">No. 1</h5>
            <p class="card-text">Padron Drenaje</p>
          </div>
          <div class="card-footer">
            <a href="drenajeP.php"><small>Más Información</small></a>
            <i class="bi bi-info-circle"></i>
          </div>
        </div>

      </div>


    </div>
    <!--Este div cierra a row de menu-->
  </div>
  </div>
  </div>

  </div>
  <!--Archivos Js-->
  <script src="assets/js/general.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>