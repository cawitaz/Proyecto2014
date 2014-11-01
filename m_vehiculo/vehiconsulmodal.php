<html>
<head>

	<script type="text/javascript">
	var urlparainsertar="./m_vehiculo/sql_select_vehiculo_modificar.php";
		var campos = {

        idVehiculoModal    : $('#idVehiculoModal').val(), 
	    idVehi    : $('#idVehi ').val(), 
		tipoVehi   : $('#tipoVehi').val(),
		colorVehi : $('#colorVehi').val(),
		marcaVehi : $('#marcaVehi').val(),
		yearVehi : $('#yearVehi').val(),
		chasisVehi : $('#chasisVehi').val(),
		tarjeVehi : $('#tarjeVehi').val(),

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
		function ejecutar(){
		campos['idVehiculoModal']       =$('#idVehiculoModal').val();
		campos['idVehi']       =$('#idVehi').val();
		campos['tipoVehi']		=$('#tipoVehi').val();
		campos['colorVehi']	=$('#colorVehi').val();
		campos['marcaVehi']	=$('#marcaVehi').val();
		campos['yearVehi']	=$('#yearVehi').val();
		campos['chasisVehi']	=$('#chasisVehi').val();
		campos['tarjeVehi']	=$('#tarjeVehi').val();
		//alert(campos['descripcion']);
		
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
		$idVehiculo= $_POST['idVehiculo'];
		
		//Realizar una solicitud de información

		include("sql_select_vehiculo_modal.php");
			}
			?>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title">VEHICULO <label id="titulo"><?php echo $idVehiculo; ?></label></h4>
				</div>

				<div class="modal-body">
					<!-- Inicio de los objetos del formulario mediante filas -->
					<div class="row">
					  <div class="col-md-5 col-sm-5"><center><label for="idVehi"  class="controllabel hidden-xs">Placa</label></center>
					  </div>
					  <div class="col-md-4 col-sm-4"><input id="idVehi" type="text" class="form-control form-text" 
					  	size="25" readonly="readonly" onfocus="cambiarColor(this)" onBlur="defectoColor (this)"value="<?php echo getAM_numPlacas(); ?>"</div>
					</div>

					<div class="row">
					  <div class="col-md-5 col-sm-5"><center><label for="idVehiculoModal"  class="controllabel hidden-xs">ID</label></center>
					  </div>
					  <div class="col-md-4 col-sm-4"><input id="idVehiculoModal" type="text" class="form-control form-text" 
					  	size="25" readonly="readonly" onfocus="cambiarColor(this)" onBlur="defectoColor (this)"value="<?php echo $idVehiculo ?>"</div>
					</div>

					<div class="row">
					  <div class="col-md-5 col-sm-5"><center><label for="tipoVehi" class="controllabel hidden-xs">Tipo </label></center>
					  </div>
					  <div class="col-md-4 col-sm-4" id="tipoVehi" > 
					  	<select id="tipo"onfocus="cambiarColor(this)" onBlur="defectoColor (this)" class="form-control">
					        <option value="">opcion 1</option>
					        <option value="">opcion 2</option>
					      </select>

					  	<!-- Combobox para el tipo de vehículo--></div>
					</div>

					<div class="row">
						<div class="col-md-5 col-sm-5"><center><label for="colorVehi" class="controllabel hidden-xs">Color</label></center>
						</div>
						<div class="col-md-4 col-sm-4"><input id="colorVehi" type="text" class="form-control form-text" 
					  	 size="25" placeholder="Ingrese color de vehículo" onfocus="cambiarColor(this)" onBlur="defectoColor (this)"value="<?php echo getAM_colorVehiculo(); ?>"></div>
					</div>


					<div class="row">
					  <div class="col-md-5 col-sm-5"><center><label for="marcaVehi" class="controllabel hidden-xs">Marca</label> </center></div>
					  <div class="col-md-4 col-sm-4"><input type="text" class="form-control" size="25" id="marcaVehi"
									placeholder="Ingrese la marca" onfocus="cambiarColor(this)" onBlur="defectoColor (this)"value="<?php echo getAM_marcaVehiculo(); ?>"></div>
					</div><!--Fin de marca -->

					<div class="row">
					  <div class="col-md-5 col-sm-5"><center><label for="yearVehi" class="controllabel hidden-xs">A&#241o </center></label> </div>
					  <div class="col-md-4 col-sm-4"><input type="number" class="form-control" size="25" id="yearVehi"
									placeholder="Ingrese el A&#241o" onfocus="cambiarColor(this)" onBlur="defectoColor (this)"value="<?php echo getAM_anioVehiculo(); ?>"></div>
					</div><!--Fin del año -->

					<div class="row">
					  <div class="col-md-5 col-sm-5"><center><label for="chasisVehi" class="controllabel hidden-xs">Chasis #</label> </center></div>
					  <div class="col-md-4 col-sm-4"><input type="text" class="form-control" size="25" id="chasisVehi"
									placeholder="Ingrese n&#250mero de Chasis" onfocus="cambiarColor(this)" onBlur="defectoColor (this)"value="<?php echo getAM_numChasis(); ?>"></div>
					</div><!--Fin del chasis -->

					<div class="row">
					  <div class="col-md-5 col-sm-5"><center><label for="tarjeVehi" class="controllabel hidden-xs">Tarjeta de circulaci&#244n</label> </center></div>
					  <div class="col-md-4 col-sm-4"><input type="text" class="form-control" size="25" id="tarjeVehi"
									placeholder="Ingrese tarjeta circulaci&#243n"onfocus="cambiarColor(this)" onBlur="defectoColor (this)"value="<?php echo getAM_numTarjetaCirc(); ?>"></div>
					</div><!--Fin del  -->

					

					


				
				<div class="modal-footer">
					
					
					
					<div class="row">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Eliminar</button>
						<button type="button" class="btn btn-primary" onclick= "ejecutar();">Guardar cambios</button>
					</div>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</body>
	</html>