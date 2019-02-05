<!DOCTYPE html>
<html>
  <head>
    <title>Sistema de ventas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?=base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?=base_url();?>css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Sistema de ventas</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
                            <h6>Acceso al sistema</h6>
                        <?php if(validation_errors()!=""){?>
                        <div class="alert alert-danger">
                            <?=validation_errors();?>
                        </div>
                        <?php }?> 
						<form action="<?=base_url();?>login/verificar"method="post">
			                <input class="form-control" type="text" placeholder="usuario"name="nick">
			                <input class="form-control" type="password" placeholder="contrasena"name="contra">
			                <div class="action">
			                    <input type="submit"class="btn btn-primary signup" value="Ingresar" ></a>
							</div> 
						</form>               
			            </div>
			        </div>

			        <div class="already">
			            <p>sistema realizaso por rgs</p>
			            
			        </div>
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?=base_url();?>https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url();?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>js/custom.js"></script>
  </body>
</html>