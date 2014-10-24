<!DOCTYPE html>
<html lang="es-ES">
<head>
	<script type="text/javascript">
		//Inicialización de valores
		var urlparainsertar="./m_usuario/sql_select_usuario_insertar.php";
		var checkboxValues = "";
		var continuar=0;
		var campos = {//Almacena los valores que necesitamos para realizar la consulta sql
				"idUsuario"		: $('#idUsuario').val(),
				"nomUsuario"	: $('#nomUsuario').val(),
				"apellUsuario"	: $('#apellUsuario').val(),
				"passUsuario"	: $('#passUsuario').val(),
				"emailUsuario"	: $('#emailUsuario').val(),
				"tipoUsuario"	: '0',
			};

		//Creamos password aleatorio
		function cambiopass () {
			var url_encabezado = "./m_usuario/generador.php";
			obtener(url_encabezado, '#passUsuario', new Array());
		}

		function nuevoId () {
			// body...
			var url_encabezado = "./m_usuario/idUsuarioCreado.php";
			var nom_apell={
				"nomUsuario"	: $('#nomUsuario').val(),
				"apellUsuario"	: $('#apellUsuario').val(),
			};
			obtener(url_encabezado, '#idUsuario', nom_apell);
		}

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
			campos['idUsuario']		=$('#idUsuario').val();
			campos['nomUsuario']	=$('#nomUsuario').val();
			campos['apellUsuario']	=$('#apellUsuario').val();
			campos['passUsuario']	=$('#passUsuario').val();
			campos['emailUsuario']	=$('#emailUsuario').val();

			comprobarCheckbox();
			if (continuar!=0) {
				//Para más información ver template/encabezado.php
				ejecutarconsulta(urlparainsertar, campos);
			};
		}
		

		//metodo con la finalidad de verificar si estan seleccionado los checkbox
		function comprobarCheckbox(){
			var i=0;
			var checkboxValues= new Array();
			continuar=0;

			$("input:checkbox:checked").each(function(){
				//cada elemento seleccionado
				checkboxValues[i] = $(this).val();
				//cambio de estado e incremento de valor
				continuar=1;
				i++;
			});

			//Asignamos valor a la variable tipoUsuario
			if (continuar == 1) {
				campos['tipoUsuario']=checkboxValues;
			};
		}

	</script>

</head>
<body>
	<div class="panel panel-primary" >
			<div class="panel-heading "><h4>Nuevo Usuario</h4></div>
			<div class="panel-body" align="center">
				<!-- Inicio del formulario -->
				<form class="form-horizontal form-inline" role="form">
					<!-- Inicio de los objetos del formulario mediante filas -->
					<div class="row">
					  <div class="col-md-5 col-sm-5"><label for="idUsuario"  class="controllabel hidden-xs">Nuevo ID</label>
					  </div>
					  <div class="col-md-4 col-sm-4"><input id="idUsuario" type="text" class="form-control form-text" 
					  	readonly="readonly" value="USER-001" size="25" value="Id del Usuario"></div>
					</div>

					<div class="row">
						<div class="col-md-5 col-sm-5"><label for="nomUsuario" class="controllabel hidden-xs">Nombre del usuario</label>
						</div>
						<div class="col-md-4 col-sm-4"><input type="text" class="form-control" size="25" id="nomUsuario"
							value="Carlos" onchange="nuevoId ();" placeholder="Ingrese nombre de usuario">
						</div>
					</div>

					<div class="row">
						<div class="col-md-5 col-sm-5"><label for="apellUsuario" class="controllabel hidden-xs">Apellido del usuario</label>
						</div>
						<div class="col-md-4 col-sm-4"><input type="text" class="form-control" size="25" id="apellUsuario"
							value="Arias" onchange="nuevoId ();" placeholder="Ingrese apellido del usuario">
						</div>
					</div>

					<div class="row">
						<div class="col-md-5 col-sm-5"><label for="passUsuario" class="controllabel hidden-xs">Nueva Contraseña</label>
						</div>
						<div class="col-md-2 col-sm-2"><input id="passUsuario" type="text" class="form-control form-text" 
					  	readonly="readonly" size="15" onchange="cambiopass();" value="<?php include "generador.php";?>"></div>
					  	
					  	<div class="col-md-1 col-sm-1 col-sm-offset-1">
					  		<button type="button" class="btn btn-default" onclick="cambiopass();">
					  			<span class="glyphicon glyphicon-repeat"></span> 
					  		</button>
					  		
					  	</div>
					</div>


					<div class="row">
						<div class="col-md-5 col-sm-5"><label for="emailUsuario" class="controllabel hidden-xs">Ingrese Email</label> </div>
						<div class="col-md-4 col-sm-4"><input type="email" class="form-control" size="25" id="emailUsuario"
							value="carlos_caal_29@yahoo.com" placeholder="Ingrese su Email"></div>
					</div><!--Fin del email -->

					<br>

					<div class="row">
						<div ><label for="tipoUsuario" class="controllabel">Tipo de usuario</label>
							</div>
						
							<div class="checkbox" id="tipoUsuario">
							  	<label class="checkbox"><input type="checkbox" id="chek[0]" value="1" checked> Administrador</label>
							  	<label class="checkbox" ><input type="checkbox" id="chek[1]" value="2"> Gerente Administrativo</label>
							  	<label class="checkbox" ><input type="checkbox" id="chek[2]" value="3"> Gerente de Servicio</label>
							  	<label class="checkbox" ><input type="checkbox" id="chek[3]" value="4"> Encargado de taller</label>
							  	<label class="checkbox" ><input type="checkbox" id="chek[4]" value="5"> Activo Fijo</label>
							  	<label class="checkbox" ><input type="checkbox" id="chek[5]" value="6"> Encargado de Almacén</label>
							  	<label class="checkbox" ><input type="checkbox" id="chek[6]" value="7"> Supervisor de conductores</label>
							</div>
					</div>

						
					<div class="row center-text">
						<br>
						<div class="col-xs-7 col-sm-7 col-md-7"> <input type="button" id="cancelar" class="btn btn-default" value="Cancelar" 
							onclick="limpiar('#panel1');cargar('#panel1', 'template/inicio.php');" ></div>
						<div class="col-xs-1 col-md-1">
							<input type="button" class="btn btn-default btn-primary" onclick="ejecuta();" value="Guardar">
						</div>
						<br>
					</div>

					
				</form>
			</div>
		</div>

</body>
</html>