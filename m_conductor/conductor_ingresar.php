<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <div class="panel panel-primary">
            <div class="panel-heading "><h4>Ingresar nuevo conductor</h4></div>
            <div class="panel-body" align="center">
                <!-- Inicio del formulario -->
                <form class="form-horizontal form-inline" role="form">

                <!-- Inicio de los objetos del formulario mediante filas -->
                <div class="row">
                  <div class="col-md-5"><label for="idconductor"  class="controllabel hidden-xs">Id conductor</label>
                  </div>
                  <div class="col-md-3"><input id="idconductor" type="text" readonly="readonly" class="form-control form-text" 
                    size="25" placeholder="Id_conductor"></div>
                </div>


                <div class="row">
                    <div class="col-md-5"><label for="nombre" class="controllabel hidden-xs">Nombre</label>
                    </div>
                    <div class="col-md-3"><input id="nombre" type="text" class="form-control form-text" 
                     size="25" placeholder="Ingrese nombre del conductor"></div>
                </div> <!--Fin del nombre conductor -->


                <div class="row">
                  <div class="col-md-5"><label for="depto" class="controllabel hidden-xs">Departamento</label> </div>
                    <div class="col-md-3">
                        <select id="depto" class="form-control">
                            <option value="">Depto 1</option>
                            <option value="">Depto 2</option>
                        </select>
                    </div>
                </div> <!--Fin del depto -->

                <div class="row">
                    <div class="col-md-5"><label for="nombre" class="controllabel hidden-xs">Ingrese Tel&#233fono</label>
                    </div>
                    <div class="col-md-3"><input id="nombre" type="text" class="form-control form-text" 
                     size="25" placeholder="Ingrese Ingrese Tel&#233fono"></div>
                </div> <!--Fin del telefono -->

                <div class="row">
                    <div class="col-md-5"><label for="numLic" class="controllabel hidden-xs">N&#250mero de licencia</label>
                    </div>
                    <div class="col-md-3"><input id="numLic" type="text" class="form-control form-text" 
                     size="25" placeholder="Ingrese N&#250mero de licencia"></div>
                </div> <!--Fin del numero de licencia -->

                
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
            </div>
    </div>
</body>
</html>
