	<div class="panel panel-primary">
			<div class="panel-heading "><h4>Ingresar nuevo art&#237;culo</h4></div>
			<div class="panel-body" align="center">
				<!-- Inicio del formulario -->
				<form class="form-horizontal form-inline" role="form">

				<!-- Inicio de los objetos del formulario mediante filas -->
				<div class="row">
				  <div class="col-md-5"><label for="idconductor"  class="controllabel hidden-xs">Id  art&#237;culo</label>
				  </div>
				  <div class="col-md-3"><input id="idconductor" type="text" readonly="readonly" class="form-control form-text" 
				  	size="25" value="Id_conductor"></div>
				</div>

				<div class="row"><!-- Id Solicitud Compra -->
					<div class="col-md-5">
						<label for="idSolicitud"  class="controllabel hidden-xs">Solicitud de compra</label>
					</div>
					<div class="col-md-3">
						<select id="idSolicitud" class="form-control">
							<option value="">Solicitud de compra 1</option>
						    <option value="">Solicitud de compra 2</option>
						</select>
					</div>
				</div> 
				
				<div class="row"><!-- Nombre de artículos -->
					<div class="col-md-5">
						<label for="nomArticulo"  class="controllabel hidden-xs">Art&#237;culo</label>
					</div>
					<div class="col-md-3">
						<select id="nomArticulo" class="form-control">
							<option value="">Nombre de artículo 1</option>
						    <option value="">Nombre de artículo 2</option>
						</select>
					</div>
				</div> 

				<!-- Precio del artículo. Este valor no se debe capturar ya que este es unico 
				y se encuentra en su orden de compra correspondiente -->

				<!--Cantidad del artículo. Este valor se encuentra en la orden de compra -->

				<div class="row"><!--Fecha -->
					<div class="col-md-5"><label for="fechaCompra" class="controllabel hidden-xs">Fecha de Compra</label>
					</div>
					<div class="col-md-3"><input id="fechaCompra" type="text" class="form-control form-text" 
				  	 size="25" value="dd/mm/aaaa" placeholder="Ingrese fecha de compra"></div>
				</div> 
				
				<!-- Botones -->
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