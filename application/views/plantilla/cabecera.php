</head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="<?=base_url();?>">Sistema Tienda tien</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <!-- <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div> -->
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$this->session->userdata("nombre");?><b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                        	<!--  <li><a href="profile.html">Profile</a></li>-->
	                          <li><a href="<?=base_url();?>login/salir">Salir</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2"><!--Inicio de Menu-->
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="<?=base_url();?>"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
                    <!--<li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
                    <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                    <li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                    <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                    <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                    <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>-->
						  <?php if(in_array($this->session->userdata("nivel"),[1,2])){?> 
						  <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Producto
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="<?=base_url();?>producto/nuevo">Nuevo Producto</a></li>
                            <li><a href="<?=base_url();?>producto/listar">Listar Productos</a></li>
                        </ul>
						  </li>
						  <?php }?>
						  <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-user"></i> Usuario
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="<?=base_url();?>usuario/nuevo">Nuevo Usuario</a></li>
                            <li><a href="<?=base_url();?>usuario/listar">Listar Usuarios</a></li>
                        </ul>
						  </li>
						  <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-user"></i> venta
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="<?=base_url();?>venta/nuevo">Nuevo venta</a></li>
                            <li><a href="<?=base_url();?>venta/listar">Listar nueva venta</a></li>
                        </ul>
						  </li>
						  <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-user"></i> reporte
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="<?=base_url();?>reporte/general">reporte general</a></li>
                            <li><a href="<?=base_url();?>reporte/estadistica">estadistica</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div><!--Fin de Menu-->
		  <div class="col-md-10">
		  	<div class="row">
				<div class="col-md-12">
                    <div class="content-box-header">
                        <div class="panel-title">"<?=$titulo;?>"</div>
					</div>
                    <div class="content-box-large box-with-header"><!--Inicio del Contenido-->