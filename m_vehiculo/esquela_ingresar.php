<html>
<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript">

       
		//Inicialización de valores
		var urlparainsertar="./m_vehiculo/sql_insertar_esquela.php";
		
		var campos = {//Almacena los valores que necesitamos para realizar la consulta sql
				"idEsquela"		    : $('#idEsquela').val(),
				"conductor"        	: $('#conductor').val(),
				"motivo"	        : $('#motivo').val(),
				"esquela"	        : $('#esquela').val(),
				"fechaRecib"		: $('#fechaRecib').val(),
				"fechaVence"	    : $('#fechaVence').val(),
				"vehiculo"	        : $('#vehiculo').val(),
							};

		//Este método debe de ir en el onclick del button
		function ejecuta(){
			
			campos['idEsquela']=$('#idEsquela').val();
			campos['conductor']	    =$('#conductor').val();
			campos['motivo']	=$('#motivo').val();
			campos['esuqela']	=$('#esquela').val();
			campos['fechaRecib']	=$('#fechaRecib').val();
			campos['fechaVence']	    =$('#fechaVence').val();
			campos['vehiculo']	    =$('#vehiculo').val();

			//Para más información ver template/encabezado.php
			ejecutarconsulta(urlparainsertar, campos);
			reiniciarForm()
		};

		function cambiarColor (foco_si) {
       foco_si.style.background="#27b2f3";
        }
        function defectoColor (foco_no) {
        foco_no.style.background="white";
        }
       
       function reiniciarForm(){
			$("form")[0].reset();
			
		}


      </script>
	</head>
	<body>
	<div class="panel panel-primary" >
			<div class="panel-heading "><h4>Ingresar Esquela</h4></div>
			<div class="panel-body" align="center">
				<!-- Inicio del formulario -->
				<form class="form-horizontal form-inline" role="form">

				<!-- Inicio de los objetos del formulario mediante filas -->
				<div class="row">
				  <div class="col-md-5"><label for="idEsquela"  class="controllabel hidden-xs">N&#250mero de esquela</label>
				  </div>
				  <div class="col-md-3"><input id="idEsquela" type="text" class="form-control form-text" 
				  	size="25" title="numero de esquela" onfocus="cambiarColor(this)" onBlur="defectoColor (this)"placeholder="Ingrese N&#250mero de Esquela"></div>
				</div>

				<div class="row">
				  <div class="col-md-5"><label for="conductor" class="controllabel hidden-xs">Conductor </label>
				  </div>
				  <div class="col-md-3"> 
				  <select class="form-control" onfocus="cambiarColor(this)" onBlur="defectoColor (this)" id="conductor" title="seleccione un conductor">
				       <?php
                        
                        include ("conexion.php");

                        $sql = "SELECT * FROM FVAM_conductor_2014";
                        $stmt = sqlsrv_query( $conn, $sql );
                        if( $stmt === false) {
                        die( print_r( sqlsrv_errors(), true) );
                          }

                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                        echo"<option>";	
                        echo $row['AM_nombreConductor']."<br />";
                        echo"</option>";	
                        }
 
                         sqlsrv_free_stmt( $stmt);
                         ?>
				      </select>

				  	<!-- Combobox para los distintos conductores--></div>
				</div>

				<div class="row">
					<div class="col-md-5"><label for="motivo" class="controllabel hidden-xs">Motivo</label>
					</div>
					<div class="col-md-3"><textarea rows="3" tittle="razon de esuqela" id="motivo" type="text" class="form-control form-text" 
				  	 size="25"onfocus="cambiarColor(this)" onBlur="defectoColor (this)" placeholder="Ingrese motivo de la esquela"></textarea></div>
				</div>


				<div class="row">
				  <div class="col-md-5"><label for="esquela" class="controllabel hidden-xs">Monto </label>
				  </div>
				  <div class="col-md-3"  > 
				  	<select class="form-control" tittle=" elija tipop de Esquela" id="esquela"onfocus="cambiarColor(this)" onBlur="defectoColor (this)">
				        <option value="100">$ 11.43</option>
				        <option value="300">$ 34.29</option>
				        <option value="500">$ 57.14</option>
				      </select>

				  	<!-- Combobox para los distintos conductores--></div>
				</div>

				<div class="row">
				  <div class="col-md-5"><label for="fechaRecib" class="controllabel hidden-xs">Fecha de recibida</label> </div>
				  <div class="col-md-3"><input type="date" class="form-control" size="25" id="fechaRecib"
								value="dd/mm/aaaa" tiitle="seleccione Fecha" onfocus="cambiarColor(this)" onBlur="defectoColor (this)" placeholder="Ingrese fecha de recibido"></div>
				</div><!--Fecha de recibido -->

				<div class="row">
				  <div class="col-md-5"><label for="fechaVence" class="controllabel hidden-xs">Fecha de vencimiento</label> </div>
				  <div class="col-md-3"><input type="date" tittle="seleccione fecha" class="form-control" size="25" id="fechaVence"
								value="dd/mm/aaaa" onfocus="cambiarColor(this)" onBlur="defectoColor (this)" placeholder="Ingrese fecha de vencimiento"></div>
				</div><!--Fecha de vencimiento -->

                <div class="row">
				  <div class="col-md-5"><label for="vehiculo" class="controllabel hidden-xs">Vehiculo</label>
				  </div>
				  <div class="col-md-3" > 
				  <select class="form-control" onfocus="cambiarColor(this)" onBlur="defectoColor (this)" id="vehiculo" title="seleccione un vehiculo">
				       <?php
                        
                        include ("conexion.php");

                        $sql = "SELECT * FROM FVAM_vehiculo_2014";
                        $stmt = sqlsrv_query( $conn, $sql );
                        if( $stmt === false) {
                        die( print_r( sqlsrv_errors(), true) );
                          }

                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                        echo"<option>";	
                        echo $row['AM_idVehiculo']."<br />";
                        echo"</option>";	
                        }
 
                         sqlsrv_free_stmt( $stmt);
                         ?>
				      </select>

				  	<!-- Combobox para los distintos conductores--></div>
				</div>

				<!-- Botones Guardar y cancelar -->

				<div class="row center-text">
					<br>
					
					<div class="col-xs-7 col-sm-7 col-md-7"> <input type="button" id="cancelar" class="btn btn-default" value="Cancelar" 
						onclick="limpiar('#panel1');cargar('#panel1', 'template/inicio.php');" ></div>
					<div class="col-xs-1 col-md-1"> <input type="button" onclick="ejecuta();"class="btn btn-default btn-primary" value="Guardar">
					</div>
					<br>
				</div>
					
				</form>
			</div>
		</div>	
</body>
</html>