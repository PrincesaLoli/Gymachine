<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Widget</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="registro.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5 shadow-lg p-3 mb-5 bg-white rounded">
        <form class="row g-3">
            <div class="col-sm-12 mx-t3 mb-4">
                <h2 class="text-center text-info">Formulario de registro</h2>
            </div>
            //se declara la condicion para poder utilizar algunos campos dependiendo del rol
            <?php if ($rol) { ?>

                <div class="col-sm-6">
                    <label for="name-f">Nombres</label>
                    <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Ingrese Nombres"
                        required>
                </div>
                <div class="col-sm-6">
                    <label for="name-l">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Ingrese Apellidos"
                        required>
                </div>
                <div class="col-sm-6 ">
                    <label for="tipoDocumento">Tipo de Documento</label>
                    <select class="form-control custom-select browser-default">
                        <option value="Seleccione">Seleccione...</option>
                        <option value="CC">CC</option>
                        <option value="TI">TI</option>
                        <option value="PASAPORTE">PASAPORTE</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="address-1">Numero de Documento</label>
                    <input type="number" class="form-control" name="numDocumento"
                        placeholder="Ingrese el número de Documento" required>
                </div>
                <div class="col-sm-6 ">
                    <label for="telefono">Telefono</label>
                    <input type="tel" class="form-control" name="telefono" placeholder="Ingrese número teléfonico">
                </div>
                <div class="col-sm-6 fm">
                    <label for="State">Correo</label>
                    <input type="text" class="form-control" name="correo" placeholder="Ingrese correo electrónico">
                </div>
                <div class="col-sm-6">
                    <label for="zip">Estado</label>
                    <select class="form-control custom-select browser-default">
                        <option value="Seleccione">Seleccione...</option>
                        <option value="CC">Activo</option>
                        <option value="TI">Inactivo</option>
                    </select>
                </div>

            <?php } ?>

            <div class="col-sm-6">
                <label for="tel">Género</label>
                <select class="form-control custom-select browser-default">
                    <option value="Seleccione">Seleccione...</option>
                    <option value="CC">Mujer</option>
                    <option value="TI">Hombre</option>
                    <option value="TI">Otro</option>
                </select>
            </div>
            <div class="col-sm-6 ">
                <label for="Date">Telefono de Emergencia</label>
                <input type="text" name="telefono" class="form-control"
                    placeholder="Ingrese número teléfonico de emergencia" required>
            </div>
            <div class="col-sm-6">
                <label for="Country">Peso</label>
                <input type="text" class="form-control" name="peso" placeholder="Ingrese peso en kg">
            </div>
            <div class="col-sm-6">
                <label for="sex">Rh</label>
                <input type="text" name="rh" class="form-control" placeholder="Ingrese tipo de sangre" required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="tel">Objetivo a Alcanzar</label>
                <input type="text" name="objAlcanzar" class="form-control" placeholder="Ingrese el objetivo a alcanzar"
                    required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="pass">Contraseña</label>
                <input type="Password" name="pass" class="form-control" id="pass" placeholder="" required>
            </div>
            <div class="col-sm-6 form-group">
                <label for="pass2">Confirmar Contraseña</label>
                <input type="Password" name="cnf-pass" class="form-control" id="pass2" placeholder="" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>