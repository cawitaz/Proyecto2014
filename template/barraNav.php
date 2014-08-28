
  <!-- BARRA DE NAVEGACION  -->
<nav  class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  
  <div class="navbar-header " >

    <span class="navbar-brand  text-right" ><strong>Control de Flota</strong></span> 
    <button type="button" class="navbar-toggle text-left" data-toggle="collapse" data-target=".navbar-ex6-collapse">
      <span class="sr-only"> </span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex6-collapse navbar-inverse">
    <ul class="nav navbar-nav">
      <!--  Iniciamos con el menú-->
      <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
              
      <!--Inicio de Modulo Gestión de Usuarios-->
      <li class="dropdown " id="menu_usuario">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-user"></span>
          Usuarios <b class="caret"></b>
        </a>
        <ul class="dropdown-menu" >
          <li><a href="#">Agregar vehículo</a></li>
          <li><a href="#">Eliminar vehículo</a></li>
          <li><a href="#">Modificar datos</a></li>
          <li><a href="#">Consultar datos</a></li>
        </ul>
      </li> <!--Fin de Modulo-->



      <!--Inicio de Modulo Vehículo-->
      <li class="dropdown" id="menu_vehiculo" role="menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-road"></span>
          Vehículo<span class="caret"></span></a>
        <ul class="dropdown-menu">

          <!-- Creando un submenu Gestion de vehiculo-->

          <li class="dropdown-submenu"> <a href="#">Gesti&#243n de Vehículo</a>
            <ul class="dropdown-menu">
              <li><a href="#">Agregar vehículo</a></li>
              <li><a href="#">Eliminar vehículo</a></li>
             
              <li><a href="#">Modificar vehículo</a></li>
              <li><a href="#">Eliminar vehículo</a></li>
            </ul>
          </li>

          <!-- Submenu peticion de vehiculo -->
          <li class="dropdown-submenu"> <a href="#">Ver peticion de vehículo</a>
            <ul class="dropdown-menu">
            
              <li><a href="#">Asignar vehículo</a></li>
              <li><a href="#">Redactar Permiso</a></li>
              <li><a href="#">Desplegar estado</a></li>
            </ul>
          </li>

          <!-- Submenu Gestionar poliza -->
          <li class="dropdown-submenu"> <a href="#">Gestionar Poliza</a>
            <ul class="dropdown-menu">
            
            <li><a href="#">Ingresar p&#243liza</a></li>
            <li><a href="#">Modificar p&#243liza</a></li>
            <li><a href="#">Eliminar p&#243liza</a></li>
           </ul>
          </li>

          <!-- Submenu Gestionar poliza -->
          <li class="dropdown-submenu"> <a href="#">Gestionar Bitacora</a>
            <ul class="dropdown-menu">
            <li><a href="#">Bitacora</a></li>
            <li><a href="#">Ingresar registro</a></li>
            <li><a href="#">Modificar registro</a></li>
            </ul>
          </li>


          <!-- Submenu Gestionar esquela -->
          <li class="dropdown-submenu"> <a href="#">Gestionar Esquelas</a>
            <ul class="dropdown-menu">
              <li><a href="#">Ingresar esquelas</a></li>
              <li><a href="#">Modificar datos de esquela</a></li>
            </ul>
          </li>

          <li class="divider"></li>
          
          <li><a href="#">Cambio de estado</a></li>
          
        </ul>
      </li><!--Fin de Modulo-->



      <!--Inicio de Modulo conductores-->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-hand-right"></span>
          Conductores<b class="caret"></b></a>

        <ul class="dropdown-menu">

          <!-- Submenu Gestionar conductor -->
          <li class="dropdown-submenu"> <a href="#">Gestionar Conductor</a>
            <ul class="dropdown-menu">
              <li><a href="#">Ingresar Conductor</a></li>
              <li><a href="#">Eliminar Conductor</a></li>
              <li><a href="#">Modificar Conductor</a></li>
              <li><a href="#">Consultar Conductor</a></li>
            </ul>
          </li>

          <li class="divider"></li>

          <li><a href="#">Desplegar Conductor</a></li>
          <li><a href="#">Autorizar o Rechazar</a></li>
          
          
        </ul>
      </li><!--Fin de Modulo conductor-->


      <!--Inicio de Modulo Inventario-->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-barcode"></span>
          Inventario<b class="caret"></b></a>

        <ul class="dropdown-menu">
          <li><a href="#">Ver inventario taller</a></li>
          <li><a href="#">Actualizar inventario</a></li>
                      
          <li class="divider"></li>
          <li><a href="#">Ver estado de compra</a></li>
          <li><a href="#">Elaborar petici&#243n de compra</a></li>
          
          <li class="divider"></li>
          <li><a href="#">Ingresar Artículo</a></li>
          <li><a href="#">Modificar Artículo</a></li>
          
        </ul>
      </li><!--Fin de Modulo-->


      <!--Inicio de Mantenimiento-->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-wrench"></span>
          Mantenimiento <b class="caret"></b></a>

        <ul class="dropdown-menu">
          <li><a href="#">Gestionar hoja de vida</a></li>
          <li class="divider"></li>
          <!-- Submenu Mantenimiento y reparacion -->
          <li class="dropdown-submenu"> <a href="#">Reparaci&#243n/Mantenimiento</a>
            <ul class="dropdown-menu">
              <li><a href="#">Registro materiales utilizados</a></li>
              <li><a href="#">Registro trabajo realizado</a></li>
            </ul>
          </li><!--Fin de Modulo-->


          <li class="divider"></li>
          <li><a href="#">Desplegar solicitud de reparación</a></li>
          <li><a href="#">Autorizar y Rechazar</a></li>
          
        </ul>
      </li><!--Fin de Modulo manto-->



      <!--Inicio de Modulo Reportes-->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-folder-open"></span>
          Reportes <b class="caret"></b></a>

        <ul class="dropdown-menu">
          <li><a href="#">Generar reporte</a></li>
          <li><a href="#">Busqueda Personalizada</a></li>
        </ul>
      </li><!--Fin de Modulo-->

    </ul>
  </div>
    <!-- /.navbar-collapse -->



    <div class="panel-body text-right">
        
        <a  class="dropdown-toggle " data-toggle="dropdown">
          <span class="glyphicon glyphicon-user"></span>
          Usuario <b class="caret"></b>
        </a>

        <ul class="dropdown-menu dropdown-menu-right">
          <li><a href="#">
            <span class="glyphicon .glyphicon-cog"> Perfil</span>
          </a></li>
          <li class="divider"></li>          
          <li>
            <a href="index.php" ><span class="glyphicon glyphicon-off"> Salir</span></a>
          </li>
        </ul>
      </li>
    </div>




</nav>  <!--FIN BARRA DE NAVEGACION  -->
