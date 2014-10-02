
	<div class="panel panel-default panel-primary" >
		<div class="panel-heading "><h4>Redactar petición de vehículos</h4>
		</div>
		<div class="panel-body" align="center">
			<!-- Inicio del formulario -->
			<form class="form-horizontal form-inline" role="form">
			
			<div class="row"> <!-- idPeticion gewnerado -->
				<div class="col-md-5 col-sm-5"><label for="idPeticion" class="controllabel hidden-xs">ID Petición</label>
				</div>
				<div class="col-md-4 col-sm-4"><input id="idPeticion" type="text" class="form-control form-text" 
					size="25" readonly="readonly" value="PP-0000001"></div>
			</div>

			<!-- Depto solicitante, en teoria es el depto del usuario que ingresa la información -->
			<div class="row"><!-- Depto solicitante -->
				<div class="col-md-5 col-sm-5"><label for="dptopeticion" class="controllabel hidden-xs">Departamento que solicita</label>
				</div>
				<div class="col-md-4 col-sm-4" id="dptopeticion" > 
				  	<select class="form-control" >
				        <option value="">Departamento 1</option>
				        <option value="">Departamento 2</option>
				    </select>
				</div>
			</div>

			<!-- Descripcion -->
			<div class="row">
				<div class="col-md-5 col-sm-5"><label for="razon" class="controllabel hidden-xs">Razón de préstamo</label>
				</div>
				<div class="col-md-4 col-sm-4">
					<textarea id="razon" rows="5" placeholder="Razón del préstamo">Razón de la solicitud</textarea>
				</div>
			</div>
			<div class="row"> <!-- Fecha Peticion -->
				<div class="col-md-5 col-sm-5"><label for="fechaPeticion" class="controllabel hidden-xs">Fecha de reserva del vehículo</label>
				</div>
				<div class="col-md-4 col-sm-4"><input id="fechaPeticion" type="text" class="form-control form-text" 
					size="25" readonly="readonly" value="dd/mm/aaaa"></div>
			</div>
			

			<br>
				
				<!-- Botones -->
				<div class="row center-text">
					<br>
					
					<div class="col-sm-4 col-md-4"> 
						<input type="button" id="cancelar" value="Cancelar" onclick="limpiar('#panel1');cargar('#panel1', 'template/inicio.php');" >
					</div>
					<div class="col-sm-4 col-md-4"> 
						<input type="button" id="imprimir" class="btn btn-default" value="Imprimir" >
					</div>
					<div class="col-md-1"> <input type="button" class="btn btn-default btn-primary" value="Guardar">
					</div>
					<br>
				</div>
			</form>
		</div> <!-- Fin del panel-body -->
	</div>
