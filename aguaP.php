<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Agua</title>
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
    <div class="col-auto mx-4" id="base">
      <!--Sub Menu -->
      <?php include("submenu.php") ?>
      <!-- Title table -->
      <div class="title-table">
        <h5>Listado de Padron de Agua</h5>
      </div>
      <!--- Menu Options -->
      <div class="row my-3" id="option-menu">
        <div class="col-lg-2 col-md-2 col-sm-2" id="show-section">
          <span>Mostrar</span>
          <select class="form-select" id="show-select">
            <option selected>10</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <span>registros</span>
        </div>
        <div class="col-lg-7 col-md-5 col-sm-4"></div>
        <div class="col-lg-3 col-md-5 col-sm-6">
          <div class="input-group">
            <input type="text" class="form-control custom-input" placeholder="Buscar...">
            <button class="btn custom-button" type="button"><i class="bi bi-search" title="Buscar"></i></button>
            <button class="btn custom-button" type="button" id="filtroButton">
              <i class="bi bi-funnel" title="Filtros"></i>
            </button>
            <button class="btn btn-success custom-button" type="button"><i class="bi bi-plus-circle" title="Agregar"></i></button>
          </div>
        </div>
      </div>
      <!--Filter-->
      <div class="collapse" id="filtroCollapse">
        <div class="card card-body text-center">
          <p>Opciones de filtrado</p>
          <div class="row">
            <div class="col-md-3">
              <div class="input-group">
                <label class="input-group-text" id="basic-addon1">Nombre</label>
                <input type="text" class="form-control custom-input" placeholder="Username" aria-label="Nombre" aria-describedby="basic-addon1">
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <label class="input-group-text" for="inputGroupSelect01">Categoria</label>
                <select class="form-select custom-input" id="inputGroupSelect01">
                  <option selected>Escoge...</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <label class="input-group-text" for="filtroFecha">Fecha:</label>
                <input type="date" id="filtroFecha" class="form-control custom-input">
              </div>
            </div>
            <div class="col-md-3">
              <button type="button" class="btn btn-primary">Aplicar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Tabla -->
      <div class="table-responsive">
        <table class="table align-middle caption-top">
          <thead class="table">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Contribuyente</th>
              <th scope="col">Clave</th>
              <th scope="col">Ubicación</th>
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
              <th scope="row">1</th>
              <td>Mónica Méndez Luna</td>
              <td>MELM8305281H0</td>
              <td>Barrio Bajo Calle Pobreza</td>
              <td>
                <i class="bi bi-pencil-square"></i>
                <i class="bi bi-trash"></i>
              </td>
            </tr>
          </tbody>
          <tfoot class="foot-table">
            <td colspan="2">1 de 1 Registro</td>
            <td colspan="3">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true"><i class="bi bi-caret-left"></i></span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true"><i class="bi bi-caret-right"></i></span>
                  </a>
                </li>
              </ul>
            </td>
          </tfoot>
        </table>
      </div>
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