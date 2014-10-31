<!DOCTYPE html>
<html>
<head>

	<script type="text/javascript">

       
		//Inicialización de valores
		var urlparainsertar="./m_vehiculo/sql_actualizarEstado.php";
		
		var campos = {//Almacena los valores que necesitamos para realizar la consulta sql
				"tipoModal"		: $('#tipoModal').val(),
				"idVehiculo"		: $('#idVehiculo').val(),
				"placas"		: $('#placas').val(),
				
							};

		// proceso para operaciones intermedias
		function obtener (url_encabezado, divs, arreglo) {
			
			var jqxhr = $.post( url_encabezado, arreglo, function(data) {
                $(divs).val(data);
            })
            .done(function() {
                //done es una subfuncion que se ejecuta despues del metodo de exito
            })
            .fail(function() {
                //fail es una subfuncion que se ejecuta cuando falla el proceso
            })
            .always(function() {
                //always es una subfuncion que se ejecuta cuando termina el proceso,
                //independientemente de si se ejecuto con exito o fracaso
            });
		}

		//Este método debe de ir en el onclick del button
		function ejecuta(){
			
			campos['tipoModal']=$('#tipoModal').val();
			campos['idVehiculo']		=$('#idVehiculo').val();
			campos['placas']		=$('#placas').val();


			//Para más información ver template/encabezado.php
			ejecutarconsulta(urlparainsertar, campos);
		}

			function cambiarColor (foco_si) {
       foco_si.style.background="#27b2f3";
        }
        function defectoColor (foco_no) {
        foco_no.style.background="white";
        }

		</script>
	</head>
	<body>


<div class="modal-dialog">
	<div class="modal-content">

		<?php 

	    $idVehiculo='';
	    if(isset($_POST['idVehiculo'])){
		$idVehiculo=$_POST['idVehiculo'];
	
		//Realizar una solicitud de información

		include("sql_select_estado_modal.php");
			}

	 ?>
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title"><label id="idVehiculo">VEHICULO <?php echo $idVehiculo; ?></label></h4>
			<h4 class="modal-title"><label id="estado">Estado Actual <?php echo getAM_estadoVehiculo(); ?></label></h4>
			<label id="placas">Placas #: <?php echo getAM_numPlacas(); ?></label></h4>
		</div>
		
		<div class="modal-body">
				
			
				
			   
			   <div class="row">
					<div class="col-md-5 col-sm-5">
						<label for="destino" class="controllabel hidden-xs">ID Vehiculo</label>
					</div>
					<div class="col-sm-4 col-md-4">
						<input type="text" class="form-control" size="25" id="idBitacora" class="btn btn-default" 
						placeholder="Ingrese destino"   onfocus="cambiarColor(this)" onBlur="defectoColor (this)"readonly="readonly" value="<?php echo $idVehiculo; ?>" >
					</div>
				</div>


			  			
				<div class="row">
					<div class="col-md-5 col-sm-5 ">
						<label for="tipoModal" class="controllabel">Cambiar Estado del Vehiculo</label>
					</div>
					<div class="col-sm-4 col-md-4">
						<select id="tipoModal" onfocus="cambiarColor(this)" onBlur="defectoColor (this)"class="form-control">
							<option value="Habilitado" <?php if (getAM_estadoVehiculo()=='1' || getAM_estadoVehiculo()=='2') {echo 'selected';} ?> >Habilitado</option>
					        <option value="Desabilitado" <?php if (getAM_estadoVehiculo()=='0') {echo 'selected';} ?> >Deshabilitado</option>

					    </select>
					</div>

				</div>
				

				

		<div class="modal-footer">
			<div class="row">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary" onclick="ejecuta();" >Guardar cambios</button>
			</div>
		</div>
	</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</body>
</html>