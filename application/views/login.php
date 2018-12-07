<?php defined('BASEPATH') or exit('No direct script access allowed');?>

<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->

<?php
require_once 'head.php';
?>


	<body class=" login">
		<!-- BEGIN LOGO -->

		<div class="logo">
				<h2>B2B</h2>
		</div>

		<!-- END LOGO -->
		<!-- BEGIN LOGIN -->
		<div class="content">

			<!-- BEGIN LOGIN FORM -->
			<?php echo form_open(); ?>
				<h3 class="form-title font-green">Inicio de Sesión</h3>
				<div class="alert alert-danger display-hide">
					<button class="close" data-close="alert"></button>
					<span> Ingrese su nombre de usuario y contraseña. </span>
				</div>
				<div class="form-group">
					<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
					<label class="control-label visible-ie8 visible-ie9">Nombre de Usuario</label>
					<input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Usuario" name="usuario" /> </div>
				<div class="form-group">
					<label class="control-label visible-ie8 visible-ie9">Contraseña</label>
					<input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Clave" name="clave" /> </div>
				<div class="form-actions">
					<button type="submit" class="btn green uppercase">Ingresar</button>
					<a href="javascript:;" id="forget-password" class="forget-password">¿Olvidó su contraseña?</a>
				</div>
				<div class="create-account">
					<p>
						<a href="registro" id="register-btn" class="uppercase">Crear una cuenta</a>
					</p>
				</div>
			</form>
			<!-- END LOGIN FORM -->
			<!-- BEGIN FORGOT PASSWORD FORM -->
			<form class="forget-form" action="index.html" method="post">
				<h3 class="font-green">¿Olvidó su contraseña ?</h3>
				<p> Ingrese su Correo Electrónico </p>
				<div class="form-group">
					<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
				<div class="form-actions">
					<button type="button" id="back-btn" class="btn green btn-outline">Volver</button>
					<button type="submit" class="btn btn-success uppercase pull-right">Enviar</button>
				</div>
			</form>
			<!-- END FORGOT PASSWORD FORM -->
		</div>
		<div class="copyright"> 2018 © Velautec. </div>
		    <?php if (validation_errors()): ?>
      <div class="col-md-4 col-md-offset-4">
        <div class="alert alert-danger" role="alert">
          <?=validation_errors()?>
        </div>
      </div>
    <?php endif;?>
<?php if (isset($error)): ?>
      <br>
      <br>
      <div class="col-md-4 col-md-offset-4">
        <div class="alert alert-danger" role="alert">
          <center><?=$error?></center>
        </div>
      </div>
    <?php endif;?>
    <?php if (isset($msj)): ?>
      <br>
      <br>
      <div class="col-md-4 col-md-offset-4">
        <div class="alert alert-success" role="alert">
          <center><?=$msj?></center>
        </div>
      </div>
    <?php endif;?>

<?php
require_once 'foot.php';
?>
	</body>

</html>
