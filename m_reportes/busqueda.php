
	<div class="panel panel-default panel-primary" >
		<div class="panel-heading "><h4>Busqueda personalizada</h4>
		</div>
		<div class="panel-body" align="center">
			<!-- Inicio del formulario -->
			<form class="form-horizontal form-inline" role="form">
				<div class="row center-text">
					<br>
					<input type="text" id="idBuscar" placeholder="Busqueda">
					<div class="btn-group">
						<span class="glyphicon glyphicon-search"></span>
							</span> <input type="button" value="Buscar"> 
						
					</div>
					

				</div>
				<br>
				<!-- Inicio de los objetos del formulario mediante filas -->
				<div class="table-responsive">
					<h3>Seleccione </h3>
					<table id="tabla" class="table table-hover">						
						<tr>
							<td>
								<label class="checkbox"><input type="checkbox" id="chek1" value="1"> Administrador</label>
							</td>
							<td>
								<label class="checkbox" ><input type="checkbox" id="chek2" value="2"> Gerente Administrativo</label>
							</td>
							<td>
								<label class="checkbox" ><input type="checkbox" id="chek3" value="3"> Gerente de Servicio</label>
							</td>
						</tr>
						<tr>
							<td><label class="checkbox" ><input type="checkbox" id="chek4" value="4"> Encargado de taller</label></td>
							<td><label class="checkbox" ><input type="checkbox" id="chek5" value="5"> Activo Fijo</label></td>
							<td><label class="checkbox" ><input type="checkbox" id="chek6" value="6"> Encargado de Almacén</label></td>
						</tr>
						
					</table>
				</div>


				<div class="table-responsive">
					<h4>Resultados</h4>
					<table id="tabla" class="table table-hover">						
						<tr>
							<th>Elemento</th>
							<th>Elemento</th>
							<th>Elemento</th>
						</tr>
						<tr>
							<td>Columna 1</td>
							<td>Columna 1</td>
							<td>Columna 1</td>
						</tr>
						<tr>
							<td>Columna 1</td>
							<td>Columna 1</td>
							<td>Columna 1</td>
							
						</tr>
						
					</table>
				</div>


				<!-- Botones -->
				<div class="row center-text">
					<br>
					
					<div class="col-xs-7 col-sm-7 col-md-7"> <input type="button" id="cancelar" class="btn btn-default" value="Cancelar" 
						onclick="limpiar('#panel1');cargar('#panel1', 'template/inicio.php');" ></div>
					<div class="col-xs-1 col-md-1"> <input type="button" class="btn btn-default btn-primary" value="Guardar">
					</div>
					<br>
				</div>
			</form>
		</div> <!-- Fin del panel-body -->
	</div>
