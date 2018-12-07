<?php defined('BASEPATH') or exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
	<!--<![endif]-->

<?php
require_once 'head.php';
?>


	<body class="" style="background: #353944">
		<!-- BEGIN LOGO -->

		<!-- END LOGO -->
		<!-- BEGIN LOGIN -->
		<div class="content">

			<div class="col-md-offset-4 col-md-4">

		<div class="logo" style="margin-top: 120px">
			<a href="index.html">
				<h2>B2B</h2>
		</div>
			<!-- BEGIN REGISTRATION FORM -->
			<?php echo form_open('usuario/add'); ?>

				<h3 class="font-green"><strong>Registrarse</strong></h3>

			    <?php if (isset($cod_afiliado)): ?>
				 	<p class="hint" style="color: white"> Persona por la que fue recomendada: <?=$cod_afiliado?> </p>
					<input class="form-control placeholder-no-fix" type="hidden" name="afiliado" value="<?=$cod_afiliado?>" />
    			<?php endif;?>
				 <div class="form-group">
					<label class="control-label visible-ie8 visible-ie9">Identificación</label>
					<input class="form-control placeholder-no-fix" type="text" placeholder="DNI" name="dni" />
					<span class="text-danger"><?php echo form_error('dni'); ?></span>
				</div>
				 <div class="form-group">
					<label class="control-label visible-ie8 visible-ie9">Nombres</label>
					<input class="form-control placeholder-no-fix" type="text" placeholder="Nombres" name="nombre" />
					<span class="text-danger"><?php echo form_error('nombre'); ?></span>
				</div>
				<div class="form-group">
					<label class="control-label visible-ie8 visible-ie9">Apellidos</label>
					<input class="form-control placeholder-no-fix" type="text" placeholder="Apellidos" name="apellido" />
					<span class="text-danger"><?php echo form_error('apellido'); ?></span>
				</div>
				<div class="form-group">
					<label class="control-label visible-ie8 visible-ie9">Correo Electrónico</label>
					<input class="form-control placeholder-no-fix" type="email" placeholder="correo" name="correo" />
					<span class="text-danger"><?php echo form_error('correo'); ?></span>
				</div>
				<div class="form-group">
					<label class="control-label visible-ie8 visible-ie9">Usuario</label>
					<input class="form-control placeholder-no-fix" type="text" placeholder="nombre de usuario" name="usuario" />
					<span class="text-danger"><?php echo form_error('usuario'); ?></span>
				</div>
				<div class="form-group">
					<label class="control-label visible-ie8 visible-ie9">Contraseña</label>
					<input class="form-control placeholder-no-fix" type="password" placeholder="contraseña" name="clave" /> </div>
				<div class="form-group">
					<label class="control-label visible-ie8 visible-ie9">Repita su Contraseña</label>
					<input class="form-control placeholder-no-fix" type="password" placeholder="repita su contraseña" name="clave" /> </div>
				<div class="form-actions">
					<button type="button" id="register-back-btn" class="btn green btn-outline">Volver</button>
					<button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">Guardar</button>
				</div>
			<?php echo form_close(); ?>

		<center><div class="copyright"> <h5 style="color: white">2018 © Velautec.</h5> </div></center>

		</div>

			<!-- END REGISTRATION FORM -->
		</div>


<?php
require_once 'foot.php';
?>
	</body>

</html>
