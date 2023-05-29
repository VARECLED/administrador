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

      <!--Sub Menu -->
      <?php include("submenu.php") ?>

      <!-- Title -->
      <div class="row pt-2 title">
        <div class="col">
          <h5>Relación de cobros Agua</h5>
        </div>
      </div>
      <hr>

      <!--Opciones Reporte-->
      <div class="row py-2">
        <div class="col text-center">
          <p>Opciones de Reporte</p>
          <div class="row">
            <div class="col-md-3">
              <div class="input-group">
                <label class="input-group-text label-custom" for="inicial">Periodo Inicial</label>
                <input type="date" id="inicial" class="form-control custom-input">
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <label class="input-group-text label-custom" for="final">Periodo Final</label>
                <input type="date" id="final" class="form-control custom-input">
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <label class="input-group-text label-custom" for="inputGroupSelect01">Forma de Pago</label>
                <select class="form-select custom-input" id="inputGroupSelect01">
                  <option selected>Todos</option>
                  <option value="1">Efectivo</option>
                  <option value="2">Transferencia Electrónica de Fondos</option>
                  <option value="3">Cheque Nominativo</option>
                  <option value="4">Tarjeta de Credito</option>
                  <option value="5">Tarjeta de Debito</option>
                  <option value="6">Por definir</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <button type="button" id="boton" class="btn btn-primary">Aplicar</button>
            </div>
          </div>
        </div>
      </div>
      <hr>

      <!--Tabla-->
      <div class="table-responsive py-2">
        <table class="table align-middle caption-top">
          <thead class="table">
            <tr>
              <th scope="col">#</th>
              <th scope="col">No. Recibo</th>
              <th scope="col">Contribuyente</th>
              <th scope="col">Fecha</th>
              <th scope="col">Cuenta</th>
              <th scope="col">Año</th>
              <th scope="col">Comentarios</th>
              <th scope="col">Recargo</th>
              <th scope="col">Descuento</th>
              <th scope="col">Importe</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">--</th>
              <td>--</td>
              <td>--</td>
              <td>--</td>
              <td>--</td>
              <td>--</td>
              <td>--</td>
              <td>--</td>
              <td>--</td>
              <td>--</td>
            </tr>
          </tbody>
          <tfoot class="foot-table">
            <td class="text-end" colspan="9">Total: $</td>
            <td class="text-start" colspan="1">0.00</td>
          </tfoot>
        </table>
      </div>

      <!--Salida Reporte-->
      <div class="row">
        <div class="col text-center">
          <p>Salida del Reporte</p>
          <div class="row ">
            <div class="col-md-10">
              <div class="input-group">
                <label class="input-group-text" for="inicial">Titulo</label>
                <input type="text" id="inicial" class="form-control custom-input" placeholder="Aqui indicaras el titulo">
              </div>
            </div>
            <div class="col-md-1">
              <button type="button" id="boton" class="btn btn-success">Imprimir</button>
            </div>
            <div class="col-md-1">
              <button type="button" id="boton" class="btn btn-danger">Cancelar</button>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--Footer-->
    <?php include("footer.php") ?>
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