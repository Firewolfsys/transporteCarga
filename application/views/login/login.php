<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
	<?php if (validation_errors()) : ?>
			<div class="col-md-12">
			<div class="space-6"></div>
				<<div class="alert alert-danger" role="alert" id ="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
				<?php if (isset($error)) : ?>
			<div class="col-md-12">
			<div class="space-6"></div>
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>
					
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
	
		<!-- bootstrap & fontawesome -->
		<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
		<link href="<?= base_url('assets/font-awesome/4.5.0/css/font-awesome.min.css') ?>" rel="stylesheet">

		<!-- text fonts -->
		<link href="<?= base_url('assets/css/fonts.googleapis.com.css') ?>" rel="stylesheet">

		<!-- ace styles -->
		<link href="<?= base_url('assets/css/ace.min.css') ?>" rel="stylesheet">

		<!--[if lte IE 9]>
			<link href="<?= base_url('assets/css/ace-part2.min.css') ?>" rel="stylesheet">
		<![endif]-->
		<link href="<?= base_url('assets/css/ace-rtl.min.css') ?>" rel="stylesheet">

		<!--[if lte IE 9]>
		  <link href="<?= base_url('assets/css/ace-ie.min.css') ?>" rel="stylesheet">
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?= base_url('assets/js/html5shiv.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/respond.min.js') ?>"></script>
		<![endif]-->
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-automobile white"></i>
									<span class="white" id="id-text2">Transportes de carga</span>
								</h1>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								
<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-key blue"></i>
												Ingrese su información
											</h4>

											<div class="space-6"></div>
											<?= form_open() ?>
											<!-- <form accept-charset="utf-8">-->
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" id="username" name="username" placeholder="Usuario">
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Recordarme</span>
														</label>
														<button type="submit"  class="width-35 pull-right btn btn-sm btn-primary" value="Login" >
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Entrar</span>
														</button>
														</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											<div class="space-6"></div>
										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div>
											</div>

											<div>
												<a href="#" data-target="#forgot-box" id="pruebacompleta" class="user-signup-link">
													Olvide mi contraseña
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div><!-- /.widget-body -->
					</div><!-- /.login-box -->
					<div class="center">
								<h4 class="blue" id="id-company-text">&copy; Transportes de carga</h4>
							</div>
					
					
