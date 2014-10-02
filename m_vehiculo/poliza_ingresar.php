
	<div class="panel panel-primary" >
			<div class="panel-heading "><h4>Ingresar p&#243;liza de veh&#237;culo</h4></div>
			<div class="panel-body" align="center">
				<!-- Inicio del formulario -->
				<form class="form-horizontal form-inline" role="form">

					<!-- Inicio de los objetos del formulario mediante filas -->
					<div class="row">
						<div class="col-md-5"><label for="idPoliza" class="controllabel hidden-xs">P&#243;liza</label>
						</div>
						<div class="col-md-4"><input id="idPoliza" type="text" class="form-control form-text" 
							size="25" placeholder="Ingrese p&#243;liza"></div>
					</div>

					<div class="row"><!-- Fecha sustraida del sistema -->
						<div class="col-md-5"><label for="fecha"  class="controllabel hidden-xs">Fecha </label>
						</div>
						<div class="col-md-4"><input id="fecha" type="text" class="form-control form-text" 
							size="25" value="dd/mm/aaaa" placeholder="Ingrese fecha"></div>
					</div>

					<div class="row"><!-- Solicitante -->
						<div class="col-md-5"><label for="vehiPoliza"  class="controllabel hidden-xs">
							Veh&#237;culo</label>
						</div>
						<div class="col-md-4">
							<select id="vehiPoliza" class="form-control">
						  		<option value="">veh&#237;culo 1</option>
						        <option value="">veh&#237;culo 2</option>
						    </select>
						</div>
					</div>
					<!-- Descripción de la póliza -->
					<div class="row">
						<div class="col-md-5"><label for="descrip" class="controllabel hidden-xs">Descripci&#243;n</label>
						</div>
						<div class="col-md-4">
							<textarea id="descrip" rows="5" placeholder="Descripcion"></textarea>
						</div>
					</div>

					<!-- Botones Guardar y cancelar -->

					<div class="row center-text">
						<br>
						
						<div class="col-xs-7 col-sm-7 col-md-7"> 
							<input type="button" id="cancelar" class="btn btn-default" value="Cancelar" onclick="limpiar('#panel1');cargar('#panel1', 'template/inicio.php');" >
						</div>
						<div class="col-xs-1 col-md-1"> 
							<input type="button" class="btn btn-default btn-primary" value="Guardar">
						</div>
						<br>
					</div>
					
				</form>
			</div>
	</div>
