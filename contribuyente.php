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
    <div class="col-auto mx-2 py-4" id="base">
      <!-- Titulo de tabla -->
      <div class="d-flex">
        <h5>Listado de Contribuyentes</h5>
      </div>
      
      <!-- Tabla -->
      <div class="table-responsive">
        <table class="table align-middle caption-top">
          <thead class="table">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">R.F.C</th>
              <th scope="col">Domicilio</th>
              <th scope="col">Accion</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mónica Méndez Luna</td>
              <td>MELM8305281H0</td>
              <td>Barrio Bajo Calle Pobreza</td>
              <td>
                <i class="bi bi-pencil-square"></i>
                <i class="bi bi-trash"></i>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Mónica Méndez Luna</td>
              <td>MELM8305281H0</td>
              <td>Barrio Bajo Calle Pobreza</td>
              <td>
                <i class="bi bi-pencil-square"></i>
                <i class="bi bi-trash"></i>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Mónica Méndez Luna</td>
              <td>MELM8305281H0</td>
              <td>Barrio Bajo Calle Pobreza</td>
              <td>
                <i class="bi bi-pencil-square"></i>
                <i class="bi bi-trash"></i>
              </td>
            </tr>
          </tbody>
          <tfoot></tfoot>
        </table>
      </div>
    </div>
    <!--Este div cierra a row de menu-->
  </div>

  </div>
  <!--Archivos Js-->
  <script src="assets/js/general.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>