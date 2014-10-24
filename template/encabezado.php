
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Sistema de Flota Vehicular - Alcald&#237;a Municipal de Mejicanos</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="./css/styles.css">

    <script src="./js/jquery-2.1.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>

    
    <script type="text/javascript">
        //funcion que carga un archivo php a un div
        function cargar(div, formu)
            {
                 $(div).load(formu);
                 if($( window ).width() < 768)
                    $('#menu').click();
            }
        //Funcíon limpiar div, aplica para cualquier div
        function limpiar(div)
            {
                $(div).empty();
            }

        //Exclusivo para realizar cualquier consulta
        function ejecutarconsulta(url_encabezado, variable_datos){
            //Acá abajo se hará una ventana de alerta sobre el exito o fracaso de la operación
            var jqxhr = $.post( url_encabezado, variable_datos, function(data) {
                
            alert( "Resultado de operación: " +data);
            })
            .done(function() {
                //done es una subfuncion que se ejecuta despues del metodo de exito
            })
            .fail(function() {
                //fail es una subfuncion que se ejecuta cuando falla el proceso
            alert( "Error... No se pudo conectar"  );
            })
            .always(function() {
                //always es una subfuncion que se ejecuta cuando termina el proceso,
                //independientemente de si se ejecuto con exito o fracaso
            });
        }
    </script>