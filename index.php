<!DOCTYPE html>
<html>
<head>
    <title>Embotelladora Thomsom</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
    <h1 class="text-center"><strong>Embotelladora Thomsom</strong></h1>

        <!-- Formulario de llenado de botellones -->
        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Llenado de Botellones
                    </div>
                    <div class="card-body">
                        <form id="llenado-form">
                            <div class="form-group">
                                <label for="fecha">Fecha:</label>
                                <input type="date" class="form-control" name="fecha" required>
                            </div>
                            <div class="form-group">
                                <label for="hora">Hora:</label>
                                <input type="time" class="form-control" name="hora" required>
                            </div>
                            <div class="form-group">
                                <label for="cantidad_botellas">Cantidad de Botellas:</label>
                                <input type="number" class="form-control" name="cantidad_botellas" required>
                            </div>
                            <div class="form-group">
                                <label for="ubicacion">Ubicación:</label>
                                <input type="text" class="form-control" name="ubicacion" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Registrar Llenado</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Historial de registros -->
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Historial de Registros
                    </div>
                    <div class="card-body">
                        <div id="historico">
                            <!-- Aquí se cargarán los registros utilizando AJAX -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/scripts.js"></script>
</body>
</html>
