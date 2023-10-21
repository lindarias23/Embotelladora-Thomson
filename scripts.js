$(document).ready(function() {
    // Manejar el envío del formulario de llenado de botellones utilizando AJAX
    $('#llenado-form').submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: 'llenado.php',
            data: formData,
            success: function(response) {
                // Procesar la respuesta (por ejemplo, mostrar un mensaje de éxito)
                console.log(response.message);

                // Limpiar el formulario después de un registro exitoso
                $('#llenado-form')[0].reset();

                // Actualizar el historial de registros
                cargarHistorico();
            }
        });
    });

    // Cargar el historial de registros utilizando AJAX
    function cargarHistorico() {
        $.ajax({
            type: 'GET',
            url: 'historico.php',
            success: function(data) {
                // Mostrar los registros en la página
                $('#historico').html(data);
            }
        });
    }

    cargarHistorico(); // Llamar a la función al cargar la página
});
