
  <!-- BARRA DE NAVEGACION  -->
<nav  class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  

  <div class="nav navbar-static-top">
        <div class="row ">
          <div class="col-xs-7 col-sm-9 col-md-10" id="Titulo">
            <div class="text-left" ><h4><strong>Control de Flota de Veh&#237;culos<span class="hidden-xs"> - Alcaldía Municipal de Mejicanos</span></strong></h4></div>
          </div>
          <div class="col-xs-4 col-sm-2  col-md-2 ">
            <div class="btn-group">
              <div type="button" class="dropdown-toggle"
                        data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>
                  Usuario <span class="caret"></span>
              </div>

              <ul class="dropdown-menu" >
                <li><a href="#"><span class="glyphicon glyphicon-wrench"> Perfil</span></a></li>
                <li class="divider"></li>
                <li><a href="index.php"><span class="glyphicon glyphicon-off"> Salir</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      
  </div>

  <div class="navbar-header " >

    
    <button id="menu" type="button" class="navbar-toggle text-left visible-xs " data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only"> </span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex6-collapse navbar-inverse">
    <ul class="nav navbar-nav">
      <!--  Iniciamos con el menu-->
      <li class="active"><a href="menu.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>

      <!--Inicio de Modulo Gestion de Usuarios-->
      <li class="dropdown " id="menu_usuario">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-user"></span>
          Usuarios <b class="caret"></b>
        </a>
        <ul class="dropdown-menu" >
          <li><a href="#" onclick="cargar('#panel1', 'm_usuario/usuario_crear.php');">Agregar usuario</a></li>
          <li><a href="#" onclick="cargar('#panel1', 'm_usuario/usuario_consultar.php');">Lista de Usuarios</a></li>
        </ul>
      </li> <!--Fin de Modulo-->



      <!--Inicio de Modulo Vehiculo-->
      <li class="dropdown" id="menu_vehiculo" role="menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-road"></span>
          Veh&iacute;culo<span class="caret"></span></a>
        <ul class="dropdown-menu">

          <!-- Creando un submenu Gestion de vehiculo-->

          <li class="dropdown-submenu"> <a href="#">Gesti&#243;n de Veh&iacute;culo</a>
            <ul class="dropdown-menu">
              <li><a href="#" onclick="cargar('#panel1','m_vehiculo/vehi_ingresar.php')">Agregar veh&iacute;culo</a></li>
              <li><a href="#" onclick="cargar('#panel1','m_vehiculo/vehi_lista.php')">Lista de veh&iacute;culo</a></li>
              
            </ul>
          </li>

          <!-- Submenu peticion de vehiculo -->
          <li class="dropdown-submenu"> <a href="#">Ver peticion de veh&iacute;culo</a>
            <ul class="dropdown-menu">
            
              <li><a href="#" onclick="cargar('#panel1','m_vehiculo/peticion_asignar.php')">Asignar veh&iacute;culo</a></li>
              <li><a href="#" onclick="cargar('#panel1','m_vehiculo/peticion_redactar.php')">Redactar Permiso</a></li>
              <li><a href="#" onclick="cargar('#panel1','m_vehiculo/peticion_estado.php')">Desplegar estado</a></li>
            </ul>
          </li>

          <!-- Submenu Gestionar poliza -->
          <li class="dropdown-submenu"> <a href="#">Gestionar Poliza</a>
            <ul class="dropdown-menu">
            
            <li><a href="#" onclick="cargar('#panel1','m_vehiculo/poliza_ingresar.php')">Ingresar p&#243;liza</a></li>
            <li><a href="#" onclick="cargar('#panel1','m_vehiculo/poliza_lista.php')">Lista p&#243;liza</a></li>
           </ul>
          </li>

          <!-- Submenu Gestionar bitacora -->
          <li class="dropdown-submenu"> <a href="#">Gestionar Bitacora</a>
            <ul class="dropdown-menu">
            <li><a href="#" onclick="cargar('#panel1','m_vehiculo/bitacora_ingresar.php')">Ingresar registro</a></li>
            <li><a href="#" onclick="cargar('#panel1','m_vehiculo/bitacora_lista.php')">Ver bitacora</a></li>
            </ul>
          </li>


          <!-- Submenu Gestionar esquela -->
          <li class="dropdown-submenu"> <a href="#">Gestionar Esquelas</a>
            <ul class="dropdown-menu">
              <li><a href="#" onclick="cargar('#panel1','m_vehiculo/esquela_ingresar.php')">Ingresar esquelas</a></li>
              <li><a href="#" onclick="cargar('#panel1','m_vehiculo/esquela_modificar.php')">Modificar datos de esquela</a></li>
            </ul>
          </li>

          <li class="divider"></li>
          
          <li><a href="#" onclick="cargar('#panel1','m_vehiculo/cambio_estado.php')">Cambio de estado</a></li>
          
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
              <li><a href="#" onclick="cargar('#panel1','m_conductor/conductor_ingresar.php')">Ingresar Conductor</a></li>
              <li><a href="#" onclick="cargar('#panel1','m_conductor/conductor_lista.php')">Lista de Conductor</a></li>
            </ul>
          </li>

          <li class="divider"></li>

          <li><a href="#" onclick="cargar('#panel1','m_conductor/desplegar.php')">Desplegar Conductor</a></li>
          <li><a href="#" onclick="cargar('#panel1','m_conductor/autorizar.php')">Autorizar o Rechazar</a></li>
          
          
        </ul>
      </li><!--Fin de Modulo conductor-->


      <!--Inicio de Modulo Inventario-->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-barcode"></span>
          Inventario<b class="caret"></b></a>

        <ul class="dropdown-menu">
          <li><a href="#" onclick="cargar('#panel1','m_inventario/taller_ver.php')">Ver inventario taller</a></li>
          <li><a href="#" onclick="cargar('#panel1','m_inventario/taller_actualizar.php')">Actualizar inventario</a></li>

          <li class="divider"></li>
          <li><a href="#" onclick="cargar('#panel1','m_inventario/compra_estado.php')">Ver estado de compra</a></li>
          <li><a href="#" onclick="cargar('#panel1','m_inventario/compra_peticion.php')">Elaborar petici&#243;n de compra</a></li>
          
          <li class="divider"></li>
          <li><a href="#" onclick="cargar('#panel1','m_inventario/articulo_ingresar.php')">Ingresar Art&iacute;culo</a></li>
          <li><a href="#" onclick="cargar('#panel1','m_inventario/articulo_modificar.php')">Modificar Art&iacute;culo</a></li>
          
        </ul>
      </li><!--Fin de Modulo-->


      <!--Inicio de Mantenimiento-->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-wrench"></span>
          Mantenimiento <b class="caret"></b></a>

        <ul class="dropdown-menu">
          <li><a href="#" onclick="cargar('#panel1','m_manto/hoja_vida.php')">Gestionar hoja de vida</a></li>
          <li class="divider"></li>
          <!-- Submenu Mantenimiento y reparacion -->
          <li class="dropdown-submenu"> <a href="#">Reparaci&#243;n/Mantenimiento</a>
            <ul class="dropdown-menu">
              <li><a href="#" onclick="cargar('#panel1','m_manto/registro_materiales.php')">Registro materiales utilizados</a></li>
              <li><a href="#" onclick="cargar('#panel1','m_manto/registro_trabajo.php')">Registro trabajo realizado</a></li>
            </ul>
          </li><!--Fin de Modulo-->


          <li class="divider"></li>
          <li><a href="#" onclick="cargar('#panel1','m_manto/manto_solicitud.php')">Desplegar solicitud de reparaci&#243;n</a></li>
          <li><a href="#" onclick="cargar('#panel1','m_manto/manto_autoriza.php')">Autorizar y Rechazar</a></li>
          
        </ul>
      </li><!--Fin de Modulo manto-->



      <!--Inicio de Modulo Reportes-->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-folder-open"></span>
          Reportes <b class="caret"></b></a>

        <ul class="dropdown-menu">
          <li><a href="#" onclick="cargar('#panel1','m_reportes/generar.php')">Generar reporte</a></li>
          <li><a href="#" onclick="cargar('#panel1','m_reportes/busqueda.php')">Busqueda Personalizada</a></li>
        </ul>
      </li><!--Fin de Modulo-->

       <!--Inicio de Modulo Reportes-->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-folder-open"></span>
          Ayuda <b class="caret"></b></a>

        <ul class="dropdown-menu">
          <li><a href="#" onclick="cargar('#panel1','m_reportes/ayuda_tecnica.php')">Información técnica</a></li>
          <li><a href="#" onclick="">Ayuda para Administrador</a></li>
          <li><a href="#" onclick="">Acerca Control de flota de vehículos 1.0</a></li>
        </ul>
      </li><!--Fin de Modulo-->

    </ul>
  </div>
    <!-- /.navbar-collapse -->




</nav>  <!--FIN BARRA DE NAVEGACION  -->
