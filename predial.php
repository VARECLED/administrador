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
      <!--Title formulario-->
      <div class="title-table">
        <h5>Cobro por concepto de Predial</h5>
        <hr>
      </div>
      <!--Formulario -->
      <div class="row mb-3 mx-2 text-center">
        <h6>BUSCAR POR:</h6>
      </div>
      <div class="row mb-3 mx-2">
        <div class="col">
          <label for="name" class="form-label">Contribuyente:</label>
          <input type="text" class="form-control custom-input" id="name" placeholder="Ejemplo: Eduardo">
        </div>
        <div class="col">
          <label for="numcuenta" class="form-label">Num. Cuenta:</label>
          <input type="text" class="form-control custom-input" id="numcuenta" placeholder="Ejemplo: Eduardo">
        </div>
        <div class="col">
          <label for="fechaC" class="form-label">Fecha Cobro:</label>
          <input type="date" class="form-control custom-input" id="fechaC" placeholder="00/00/0000">
        </div>
      </div>

      <div class="row mb-3 mx-2 text-center">
        <h6>DATOS DE CONTRIBUYENTE</h6>
      </div>
      <div class="row mb-3 mx-2">
        <div class="col">
          <label for="contribuyente" class="form-label">Contribuyente:</label>
          <input type="text" class="form-control custom-input" id="contribuyente" placeholder="Ejemplo: Eduardo">
        </div>
        <div class="col">
          <label for="cuenta" class="form-label">Num. Cuenta:</label>
          <input type="text" class="form-control custom-input" id="cuenta" placeholder="Ejemplo: Eduardo">
        </div>
      </div>
      <div class="row mb-3 mx-2">
        <div class="col">
          <label for="rfc" class="form-label">RFC:</label>
          <input type="text" class="form-control custom-input" id="rfc" placeholder="Ejemplo: Eduardo">
        </div>
        <div class="col">
          <label for="ubicacion" class="form-label">Ubicacion:</label>
          <input type="text" class="form-control custom-input" id="ubicacion" placeholder="Ejemplo: Eduardo">
        </div>
      </div>

      <div class="row mb-3 mx-2 text-center">
        <h6>DATOS DE COBRO</h6>
      </div>

      <form action="#">
        <div class="row mb-3 mx-2">
          <div class="col">
            <label for="cobro" class="form-label">Concepto Cobro:</label>
            <select class="form-select custom-input" aria-label="Default select example" id="cobro">
              <option selected>Seleccione...</option>
              <option value="1">Predial Urbano</option>
              <option value="2">Predial Rustico</option>
              <option value="3">Predial Ejidal</option>
              <option value="4">Predial Comunal</option>
              <option value="5">Predial Rezago</option>
            </select>
          </div>
          <div class="col">
            <label for="aniopredial" class="form-label">Año Predial:</label>
            <select class="form-select custom-input" aria-label="Default select example" id="aniopredial">
              <option selected>Seleccione ...</option>
              <option value="1">2023</option>
              <option value="2">2022</option>
              <option value="3">2021</option>
              <option value="4">2020</option>
              <option value="5">2019</option>
            </select>
          </div>
        </div>
        <div class="row mb-3 mx-2 justify-content-end">
          <div class="col-auto"><label for="importe" class="col-form-label">Importe:</label></div>
          <div class="col-sm-3 col-5">
            <input type="number" class="form-control custom-input" id="importe" placeholder="00000">
          </div>
        </div>
        <div class="row mb-3 mx-2 justify-content-end">
          <div class="col-auto"><label for="recargo" class="col-form-label">Recargo:</label></div>
          <div class="col-sm-3 col-5">
            <input type="number" class="form-control custom-input" id="recargo" placeholder="00000">
          </div>
        </div>
        <div class="row mb-3 mx-2 justify-content-end">
          <div class="col-auto"><label for="descuento" class="col-form-label">Descuento:</label></div>
          <div class="col-sm-3 col-5">
            <input type="number" class="form-control custom-input" id="descuento" placeholder="00000">
          </div>
        </div>
        <div class="row mb-3 mx-2 justify-content-end">
          <div class="col-auto">
            <label for="total" class="col-form-label">Total: $</label>
          </div>
          <div class="col-sm-3 col-5">
            <input type="text" class="form-control custom-input" id="total" placeholder="00000" readonly>
          </div>
        </div>
        <div class="row mb-3 mx-2 justify-content-end">
          <div class="col">
            <label for="fpago" class="form-label">Forma de Pago:</label>
            <select class="form-select custom-input" aria-label="Default select example" id="fpago">
              <option selected>Seleccione...</option>
              <option value="1">Efectivo</option>
              <option value="2">Transferencia electrónica de fondos</option>
              <option value="3">Cheque nominativo</option>
              <option value="4">Tarjeta de Credito</option>
              <option value="5">Tarjeta de Debito</option>
              <option value="6">Por definir</option>
            </select>
          </div>
          <div class="col">
            <label for="mrecibido" class="form-label">M. Recibido:</label>
            <input type="number" class="form-control custom-input" id="mrecibido" placeholder="00000">
          </div>
        </div>
        <div class="row mb-3 mx-2 justify-content-end">
          <div class="col-auto">
            <label for="cambio" class="col-form-label">Cambio: $</label>
          </div>
          <div class="col-sm-3 col-5">
            <input type="text" class="form-control custom-input" id="cambio" placeholder="00000" readonly step="0.01">
          </div>
        </div>
        <div class="row mb-3 mx-2">
          <label for="observacion" class="form-label">Observación:</label>
          <textarea class="form-control custom-input" id="observacion" rows="1"></textarea>
        </div>
        <div class="row mb-3">
          <div class="col text-center"><button type="button" class="btn btn-success">Guardar</button></div>
          <div class="col text-center"><button type="button" class="btn btn-danger">Cancelar</button></div>
          <div class="col text-center"><button type="button" class="btn btn-secondary" onclick="window.location.href = 'predialP.php';">Padron Predial</button></div>
        </div>
      </form>

    </div>
    <!--Este div cierra a row de menu-->
  </div>
  </div>
  </div>

  </div>
  <!--Archivos Js-->
  <!--<script src="assets/js/general.js"></script>-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>