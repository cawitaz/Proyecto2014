<!DOCTYPE html>
<html>
<head>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript">

       
		//Inicialización de valores
		var urlparainsertar="./m_vehiculo/sql_insertarvehiculo.php";
		
		var campos = {//Almacena los valores que necesitamos para realizar la consulta sql
				"idVehi"		: $('#idVehi').val(),
				"tipoVehi"      : $('#tipoVehi').val(),
				"colorVehi"	    : $('#colorVehi').val(),
				"marcaVehi"	    : $('#marcaVehi').val(),
				"yearVehi"	    : $('#yearVehi').val(),
				"chasisVehi"	: $('#chasisVehi').val(),
				"placas"		: $('#placas').val(),
				"tarjeVehi"		: $('#tarjeVehi').val(),
				"estado"		: $('#estado').val(),
				"kiloVehi"		: $('#kiloVehi').val(),
				"motorVehi"		: $('#motorVehi').val(),
				"emiPlacaVehi"	: $('#emiPlacaVehi').val(),
				"emiTarjeVehi"  : $('#emiTarjeVehi').val(),
							};

		//Este método debe de ir en el onclick del button
		function ejecuta(){
			
			campos['idVehi']        =$('#idVehi').val();
			campos['tipoVehi']	    =$('#tipoVehi').val();
			campos['colorVehi']	    =$('#colorVehi').val();
			campos['marcaVehi']	    =$('#marcaVehi').val();
			campos['yearVehi']	    =$('#yearVehi').val();
			campos['chasisVehi']	=$('#chasisVehi').val();
			campos['placas']        =$('#placas').val();
			campos['tarjeVehi']	    =$('#tarjeVehi').val();
			campos['estado']	    =$('#estado').val();
			campos['kiloVehi']	    =$('#kiloVehi').val();
			campos['motorVehi']	    =$('#motorVehi').val();
			campos['emiPlacaVehi']	=$('#emiPlacaVehi').val();
			campos['emiTarjeVehi']	=$('#emiTarjeVehi').val();

			//Para más información ver template/encabezado.php
			ejecutarconsulta(urlparainsertar, campos);
		};

		function cambiarColor (foco_si) {
       foco_si.style.background="#27b2f3";
        }
        function defectoColor (foco_no) {
        foco_no.style.background="white";
        }

     </script> 
	</head>
<body>
	<div class="panel panel-primary" >
			<div class="panel-heading "><h4>Ingreso de Vehículo</h4></div>
			<div class="panel-body" align="center">
				<!-- Inicio del formulario -->
				<form class="form-horizontal form-inline" role="form">
					<!-- Inicio de los objetos del formulario mediante filas -->
					<div class="row">
					  <div class="col-md-5 col-sm-5"><label for="idVehi"  class="controllabel hidden-xs">Id Vehiculo</label>
					  </div>
					  <div class="col-md-3 col-sm-3"><input title="Id Vehiculo" id="idVehi" type="text" class="form-control form-text" 
					  	size="20" placeholder="Codigo" required/> </div>
					</div>

     					<div class="row">
					  <div class="col-md-5 col-sm-5"><label for="tipoVehi" class="controllabel hidden-xs">Tipo </label>
					  </div>
					  <div class="col-md-3 col-sm-3"  > 
					  	<select id="tipoVehi" class="form-control" title="Seleccione Tipo de Vehiculo">
					        <option value="Microbus">Microbus</option>
					        <option value="Camion">Camion</option>
					        <option value="Motocicleta">Motocicleta</option>
					        <option value="Pick-Up">Pick-up</option>
					        <option value="Carro">Carro</option>
					      </select>

					  	<!-- Combobox para el tipo de vehículo--></div>
					</div>

					<div class="row">
						<div class="col-md-5 col-sm-5"><label for="colorVehi" class="controllabel hidden-xs">Color</label>
						</div>
						<div class="col-md-3 col-sm-3"><input id="colorVehi" type="text" class="form-control form-text" 
					  	 size="20" placeholder="Ingrese color de vehículo" required/></div>
					</div>


					<div class="row">
					  <div class="col-md-5 col-sm-5"><label for="marcaVehi" class="controllabel hidden-xs">Marca</label> </div>
					  <div class="col-md-3 col-sm-3"><input title="Ingrese Marca de Automovil" type="text" class="form-control" size="20" id="marcaVehi"
									placeholder="Ingrese la marca" required/></div>
					</div><!--Fin de marca -->

					<div class="row">
					  <div class="col-md-5 col-sm-5"><label for="yearVehi" class="controllabel hidden-xs">A&#241o</label> </div>
					  <div class="col-md-3 col-sm-3"><input title="introduzca año del vehiculo" type="number" class="form-control hasDatepicker" size="20" id="yearVehi"
									placeholder="Ingrese el A&#241o"required/></div>
					</div><!--Fin del año -->

					<div class="row">
					  <div class="col-md-5 col-sm-5"><label for="chasisVehi" class="controllabel hidden-xs">Chasis #</label> </div>
					  <div class="col-md-3 col-sm-3"><input title="Ingrese Numero de Chasis" type="text" class="form-control" size="20" id="chasisVehi"
									placeholder="Ingrese n&#250mero de Chasis" required/></div>
					</div><!--Fin del chasis -->

					<div class="row">
					  <div class="col-md-5 col-sm-5"><label for="idplacas"  class="controllabel hidden-xs">Placa</label>
					  </div>
					  <div class="col-md-3 col-sm-3"><input title="Placas" id="placas" type="text" class="form-control form-text" 
					  	size="20" placeholder="Ingrese la placa" > </div>
					</div>


					<div class="row">
					  <div class="col-md-5 col-sm-5"><label for="tarjeVehi" class="controllabel hidden-xs">Tarjeta</label> </div>
					  <div class="col-md-3 col-sm-3"><input title"Ingrese #Tarjeta"type="text" class="form-control" size="20" id="tarjeVehi"
									placeholder="Ingrese tarjeta circulaci&#243n"required/></div>
					</div><!--Fin del  -->

					<div class="row">
					  <div class="col-md-5 col-sm-5"><label for="estado" class="controllabel hidden-xs">Estado del vehiculo</label>
					  </div>
					  <div class="col-md-3 col-sm-3"  > 
					  	<select id="estado" class="form-control" title="Seleccione Estado de Vehiculo">
					        <option value="habilitado">Habilitado</option>
					        <option value="desabilitado">Desabilitado</option>
					      </select>

					  	<!-- Combobox para el estado de vehículo--></div>
					</div>

					<div class="row">
					  <div class="col-md-5 col-sm-5"><label for="kiloVehi" class="controllabel hidden-xs">Kilometraje actual</label> </div>
					  <div class="col-md-3 col-sm-3"><input title="Kilometraje" type="text" class="form-control" size="20" id="kiloVehi"
									placeholder="Ingrese  actual kilometraje"required/></div>
					</div><!--Fin del  -->

					<div class="row">
					  <div class="col-md-5 col-sm-5"><label for="motorVehi" class="controllabel hidden-xs">Motor #</label> </div>
					  <div class="col-md-3 col-sm-3"><input title="Ingrese # Motor"type="text" class="form-control" size="20" id="motorVehi"
									placeholder="N&#250mero de Motor" required/></div>
					</div><!--Fin del  -->

					<div class="row">
					  <div class="col-md-5 col-sm-5"><label for="emiPlacaVehi" class="controllabel hidden-xs">Fecha de Emisi&#243n de placas</label> </div>
					  <div class="col-md-3 col-sm-3"><input title="Fecha de Emision"type="text" class="form-control" size="20" id="emiPlacaVehi"
									value="dd/mm/aaaa" placeholder="Fecha de Emisi&#243n de placas" required/></div>
					</div><!--Fin del  -->



					<div class="row">
					  <div class="col-md-5 col-sm-5"><label for="emiTarjeVehi" class="controllabel hidden-xs">Fecha de Emisi&#243n de tarjeta</label> </div>
					  <div class="col-md-3 col-sm-3"><input title="Ingrese Fecha"type="date" class="form-control" size="20" id="emiTarjeVehi"
									value="dd/mm/aaaa" placeholder="Fecha de Emision de la tarjeta" required/></div>
					</div><!--Fin del  -->

									
						
					<div class="row center-text">
						<br>
						
						<div class="col-xs-7 col-sm-7 col-md-7"> <input type="button" id="cancelar" class="btn btn-default" value="Cancelar" 
							onclick="limpiar('#panel1');cargar('#panel1', 'template/inicio.php');" ></div>
						<div class="col-xs-1 col-md-1"> <input type="button" onclick="ejecuta();" class="btn btn-default btn-primary" value="Guardar">
						</div>
						<br>
					</div>
					
				</form>
			</div>
		</div>

</body>
</html>
