<!DOCTYPE html>
<html>
<body>
	<div class="panel panel-primary" >
			<div class="panel-heading "><h4>Ingreso de Vehículo</h4></div>
			<div class="panel-body" align="center">
				<!-- Inicio del formulario -->
				<form class="form-horizontal form-inline" role="form">
					<!-- Inicio de los objetos del formulario mediante filas -->
					<div class="row">
					  <div class="col-md-5"><label for="idVehi"  class="controllabel hidden-xs">Placa</label>
					  </div>
					  <div class="col-md-3"><input id="idVehi" type="text" class="form-control form-text" 
					  	size="25" placeholder="Ingrese la placa"></div>
					</div>

					<div class="row">
					  <div class="col-md-5"><label for="tipoVehi" class="controllabel hidden-xs">Tipo </label>
					  </div>
					  <div class="col-md-3" id="tipoVehi" > 
					  	<select id="tipo" class="form-control">
					        <option value="">opcion 1</option>
					        <option value="">opcion 2</option>
					      </select>

					  	<!-- Combobox para el tipo de vehículo--></div>
					</div>

					<div class="row">
						<div class="col-md-5"><label for="colorVehi" class="controllabel hidden-xs">Color</label>
						</div>
						<div class="col-md-3"><input id="colorVehi" type="text" class="form-control form-text" 
					  	 size="25" placeholder="Ingrese color de vehículo"></div>
					</div>


					<div class="row">
					  <div class="col-md-5"><label for="marcaVehi" class="controllabel hidden-xs">Marca</label> </div>
					  <div class="col-md-3"><input type="text" class="form-control" size="25" id="marcaVehi"
									placeholder="Ingrese la marca"></div>
					</div><!--Fin de marca -->

					<div class="row">
					  <div class="col-md-5"><label for="yearVehi" class="controllabel hidden-xs">A&#241o</label> </div>
					  <div class="col-md-3"><input type="text" class="form-control hasDatepicker" size="25" id="yearVehi"
									placeholder="Ingrese el A&#241o"></div>
					</div><!--Fin del año -->

					<div class="row">
					  <div class="col-md-5"><label for="chasisVehi" class="controllabel hidden-xs">Chasis #</label> </div>
					  <div class="col-md-3"><input type="text" class="form-control" size="25" id="chasisVehi"
									placeholder="Ingrese n&#250mero de Chasis"></div>
					</div><!--Fin del chasis -->

					<div class="row">
					  <div class="col-md-5"><label for="tarjeVehi" class="controllabel hidden-xs">Tarjeta de circulaci&#243n</label> </div>
					  <div class="col-md-3"><input type="text" class="form-control" size="25" id="tarjeVehi"
									placeholder="Ingrese tarjeta circulaci&#243n"></div>
					</div><!--Fin del  -->

					<div class="row">
					  <div class="col-md-5"><label for="emiTarjeVehi" class="controllabel hidden-xs">Fecha de Emisi&#243n de tarjeta</label> </div>
					  <div class="col-md-3"><input type="text" class="form-control" size="25" id="emiTarjeVehi"
									value="dd/mm/aaaa" placeholder="Fecha de Emision de la tarjeta"></div>
					</div><!--Fin del  -->

					<div class="row">
					  <div class="col-md-5"><label for="emiPlacaVehi" class="controllabel hidden-xs">Fecha de Emisi&#243n de placas</label> </div>
					  <div class="col-md-3"><input type="text" class="form-control" size="25" id="emiPlacaVehi"
									value="dd/mm/aaaa" placeholder="Fecha de Emisi&#243n de placas"></div>
					</div><!--Fin del  -->

					<div class="row">
					  <div class="col-md-5"><label for="motorVehi" class="controllabel hidden-xs">Motor #</label> </div>
					  <div class="col-md-3"><input type="text" class="form-control" size="25" id="motorVehi"
									placeholder="N&#250mero de Motor"></div>
					</div><!--Fin del  -->


					<div class="row">
					  <div class="col-md-5"><label for="kiloVehi" class="controllabel hidden-xs">Kilometraje actual</label> </div>
					  <div class="col-md-3"><input type="text" class="form-control" size="25" id="Vehi"
									placeholder="Ingrese  actual kilometraje"></div>
					</div><!--Fin del  -->


					
						
					<div class="row center-text">
						<br>
						
						<div class="col-xs-7 col-sm-7 col-md-7"> <input type="button" id="cancelar" value="Cancelar" 
							onclick="limpiar('#panel1');" ></div>
						<div class="col-xs-1 col-md-1"> <input type="button" value="Guardar">
						</div>
						<br>
					</div>
					
				</form>
			</div>
		</div>

</body>
</html>
