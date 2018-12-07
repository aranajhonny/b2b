<!DOCTYPE html>
<!--
Template Name: B2B - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/B2B-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/B2B-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
		<!--<![endif]-->
		<!-- BEGIN HEAD -->

		<head>
				<meta charset="utf-8" />
				<title>B2B | Referidos</title>
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta content="width=device-width, initial-scale=1" name="viewport" />
				<meta content="" name="description" />
				<meta content="" name="author" />
				<!-- BEGIN GLOBAL MANDATORY STYLES -->
				<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
				<link href="<?=base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
				<link href="<?=base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
				<link href="<?=base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
				<link href="<?=base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
				<!-- END GLOBAL MANDATORY STYLES -->
				<!-- BEGIN THEME GLOBAL STYLES -->
				<link href="<?=base_url();?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
				<link href="<?=base_url();?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
				<!-- END THEME GLOBAL STYLES -->
				<!-- BEGIN THEME LAYOUT STYLES -->
				<link href="<?=base_url();?>assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
				<link href="<?=base_url();?>assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
				<link href="<?=base_url();?>assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
				<!-- END THEME LAYOUT STYLES -->
				<link rel="shortcut icon" href="favicon.ico" /> </head>
		<!-- END HEAD -->

		<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
				<!-- BEGIN HEADER -->
				<div class="page-header navbar navbar-fixed-top">
						<!-- BEGIN HEADER INNER -->
						<div class="page-header-inner ">
								<!-- BEGIN LOGO -->
								<div class="page-logo">
										<a href="">
												<h2>B2B</h2>
										<div class="menu-toggler sidebar-toggler">
												<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
										</div>
								</div>
								<!-- END LOGO -->
								<!-- BEGIN RESPONSIVE MENU TOGGLER -->
								<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
								<!-- END RESPONSIVE MENU TOGGLER -->

								<!-- BEGIN PAGE TOP -->
								<div class="page-top">
										<!-- BEGIN HEADER SEARCH BOX -->
										<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
										<form class="search-form" action="page_general_search_2.html" method="GET">
												<div class="input-group">
														<input type="text" class="form-control input-sm" placeholder="Search..." name="query">
														<span class="input-group-btn">
																<a href="javascript:;" class="btn submit">
																		<i class="icon-magnifier"></i>
																</a>
														</span>
												</div>
										</form>
										<!-- END HEADER SEARCH BOX -->
										<!-- BEGIN TOP NAVIGATION MENU -->
										<div class="top-menu">
												<ul class="nav navbar-nav pull-right">
														<li class="separator hide"> </li>
														<!-- BEGIN NOTIFICATION DROPDOWN -->
														<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
														<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
																<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
																		<i class="icon-bell"></i>
																		<span class="badge badge-success"> 5 </span>
																</a>
																<ul class="dropdown-menu">
																		<li class="external">
																				<h3>
																						<span class="bold">5 notificaciones </h3>
																				<a href="page_user_profile_1.html">Ver todas</a>
																		</li>
																		<li>
																				<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
																						<li>
																								<a href="javascript:;">
																										<span class="time">Justo ahora</span>
																										<span class="details">
																												<span class="label label-sm label-icon label-success">
																														<i class="fa fa-plus"></i>
																												</span> Nuevo usuario registrado. </span>
																								</a>
																						</li>
																						<li>
																								<a href="javascript:;">
																										<span class="time">3 min.</span>
																										<span class="details">
																												<span class="label label-sm label-icon label-danger">
																														<i class="fa fa-bolt"></i>
																												</span> Usuario Eliminado. </span>
																								</a>
																						</li>
																						<li>
																								<a href="javascript:;">
																										<span class="time">10 min</span>
																										<span class="details">
																												<span class="label label-sm label-icon label-success">
																														<i class="fa fa-plus"></i>
																												</span> Nuevo usuario registrado. </span>
																								</a>
																						</li>
																						<li>
																								<a href="javascript:;">
																										<span class="time">14 hrs</span>
																										<span class="details">
																												<span class="label label-sm label-icon label-warning">
																														<i class="fa fa-bell-o"></i>
																												</span> Usuario modificado. </span>
																								</a>
																						</li>
																						<li>
																								<a href="javascript:;">
																										<span class="time">2 days</span>
																										<span class="details">
																												<span class="label label-sm label-icon label-success">
																														<i class="fa fa-plus"></i>
																												</span> Nuevo usuario registrado. </span>
																								</a>
																						</li>
																				</ul>
																		</li>
																</ul>
														</li>
														<!-- END NOTIFICATION DROPDOWN -->
														<li class="separator hide"> </li>
														<!-- BEGIN USER LOGIN DROPDOWN -->
														<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
														<li class="dropdown dropdown-user dropdown-dark">
																<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
																		<span class="username username-hide-on-mobile"> <?php echo $_SESSION['link_refer']; ?> </span>
																		<!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
																		<img alt="" class="img-circle" src="<?=base_url();?>assets/layouts/layout4/img/avatar9.jpg" /> </a>
																<ul class="dropdown-menu dropdown-menu-default">
																		<li>
																				<a href="#">
																						<i class="icon-user"></i> Mi Perfil </a>
																		</li>
																		<li class="divider"> </li>
																		<li>
																				<a href="#">
																						<i class="icon-lock"></i> Bloquear Pantalla </a>
																		</li>
																		<li>
																				<a href="login">
																						<i class="icon-logout"></i> Salir </a>
																		</li>
																</ul>
														</li>
														<!-- END USER LOGIN DROPDOWN -->
												</ul>
										</div>
										<!-- END TOP NAVIGATION MENU -->
								</div>
								<!-- END PAGE TOP -->
						</div>
						<!-- END HEADER INNER -->
				</div>
				<!-- END HEADER -->
				<!-- BEGIN HEADER & CONTENT DIVIDER -->
				<div class="clearfix"> </div>
				<!-- END HEADER & CONTENT DIVIDER -->
				<!-- BEGIN CONTAINER -->
				<div class="page-container">
						<!-- BEGIN SIDEBAR -->
						<div class="page-sidebar-wrapper">
								<!-- BEGIN SIDEBAR -->
								<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
								<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
								<div class="page-sidebar navbar-collapse collapse">
										<!-- BEGIN SIDEBAR MENU -->
										<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
										<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
										<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
										<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
										<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
										<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
										<ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
												<li class="nav-item start active ">
														<a href="principio_lider" class="nav-link nav-toggle">
																<i class="icon-home"></i>
																<span class="title">Inicio</span>
																<span class="selected"></span>
														</a>
												</li>
												<li class="heading">
														<h3 class="uppercase">Vendedores</h3>
												</li>
												<li class="nav-item  ">
														<a href="agregar_referido" class="nav-link nav-toggle">
																<i class="fa fa-user-plus"></i>
																<span class="title">Agregar Referido</span>
														</a>
												</li>
						<li class="nav-item  ">
							<a href="listado_referidos" class="nav-link nav-toggle">
								<i class="icon-users"></i>
								<span class="title">Mis Referidos</span>
								<!-- <span class="arrow"></span> -->
							</a>
<!-- 							<ul class="sub-menu">
								<li class="nav-item  ">
									<a href="Referidos" class="nav-link ">
										<span class="title">Datos</span>
									</a>
								</li>
								<li class="nav-item  ">
									<a href="pedidos" class="nav-link ">
										<span class="title">Pedidos</span>
									</a>
								</li>
							</ul> -->
						</li>
												<li class="nav-item  ">
														<a href="bonos_ganancias" class="nav-link nav-toggle">
																<i class="fa fa-money"></i>
																<span class="title">Bonos/Ganancias</span>
														</a>
												</li>
												<li class="heading">
														<h3 class="uppercase">Ajustes</h3>
												</li>
												<li class="nav-item  ">
												 <a href="perfil.html" class="nav-link nav-toggle">
														<i class="icon-user"></i>
														<span class="title">Perfil</span>
												 </a>
												</li>
										</ul>
										<!-- END SIDEBAR MENU -->
								</div>
								<!-- END SIDEBAR -->
						</div>
						<!-- END SIDEBAR -->
						<!-- BEGIN CONTENT -->
						<div class="page-content-wrapper">
								<!-- BEGIN CONTENT BODY -->
								<div class="page-content">
										<!-- BEGIN PAGE HEAD-->
										<div class="page-head">
												<!-- BEGIN PAGE TITLE -->
												<!-- END PAGE TITLE -->
										 </div>
										<!-- END PAGE HEAD-->
										<!-- BEGIN PAGE BASE CONTENT -->
										<div class="row">
												<div class="col-md-12">
														<!-- BEGIN EXAMPLE TABLE PORTLET-->
														<div class="portlet light bordered">
																<div class="portlet-title">
																		<div class="caption font-dark">
																				<i class="icon-user font-dark"></i>
																				<span class="caption-subject bold uppercase"> Lista de referidos</span>
																		</div>
																		<div class="actions">
																		</div>
																</div>
																<div class="portlet-body">
																		<div class="table-toolbar">
																				<div class="row">
																						<div class="col-md-6">
																								<div class="btn-group">

																										<a id="sample_editable_1_new" class="btn sbold green" href="agregar_referido"> Agregar referido
																												<i class="fa fa-plus"></i>
																										</a>

																								</div>
																						</div>
																						<div class="col-md-6">
																								<div class="btn-group pull-right">
																										<button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Reportes
																												<i class="fa fa-angle-down"></i>
																										</button>
																										<ul class="dropdown-menu pull-right">
																												<li>
																														<a href="javascript:;">
																																<i class="fa fa-print"></i> Imprimir </a>
																												</li>
																												<li>
																														<a href="javascript:;">
																																<i class="fa fa-file-pdf-o"></i> Guardar como PDF </a>
																												</li>
																										</ul>
																								</div>
																						</div>
																				</div>
																		</div>
																		<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
																				<thead>
																						<tr>
																								<th>
																										<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
																												<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
																												<span></span>
																										</label>
																								</th>
																								<th> Nombres </th>
																								<th> DNI </th>
																								<th> Correo </th>
																								<th> Estado </th>
																								<th> Referido Por </th>
																								<th> Acciones </th>
																						</tr>
																				</thead>
																				<tbody>
																					<?php if (isset($usuarios)) {?>
                           																<?php foreach ($usuarios as $usuario): ?>
																						<tr class="odd gradeX">
																								<td>
																										<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
																												<input type="checkbox" class="checkboxes" value="1" />
																												<span></span>
																										</label>
																								</td>
																								<td> <?php echo $usuario['usuario'] ?></td>
																								<td> <?php echo $usuario['dni'] ?></td>
																								<td>
																										<a href="<?php echo $usuario['correo'] ?>"> <?php echo $usuario['correo'] ?> </a>
																								</td>
																								<td>
																										<span class="label label-sm label-success"> <?php echo $usuario['status'] ?> </span>
																								</td>
																								<td class="center"> <?php echo $usuario['referido_por'] ?> </td>
																								<td>
																										<div class="btn-group">
																												<button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Opciones
																														<i class="fa fa-angle-down"></i>
																												</button>
																												<ul class="dropdown-menu pull-left" role="menu">
																														<li>
																																<a href="<?php echo base_url() . 'consultar/' . $usuario['usuario'] ?>">
																																		 Consultar </a>
																														</li>
																												</ul>
																										</div>
																								</td>
																						</tr>
																					 <?php endforeach;?>
                          												<?php }?>
																				</tbody>
																		</table>
																</div>
														</div>
														<!-- END EXAMPLE TABLE PORTLET-->
												</div>
										</div>
								</div>
								<!-- END CONTENT BODY -->
						</div>
						<!-- END CONTENT -->
				</div>
				<!-- END CONTAINER -->
				<!-- BEGIN FOOTER -->
				<div class="page-footer">
						<div class="page-footer-inner"> 2018 &copy; Desarrollado por
								<a target="_blank" href="http://keenthemes.com">Velautec</a>
						<div class="scroll-to-top">
								<i class="icon-arrow-up"></i>
						</div>
				</div>
				<!-- END FOOTER -->
				<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
				<!-- BEGIN CORE PLUGINS -->
				<script src="<?=base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
				<script src="<?=base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
				<script src="<?=base_url();?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
				<script src="<?=base_url();?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
				<script src="<?=base_url();?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
				<script src="<?=base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
				<!-- END CORE PLUGINS -->
				<!-- BEGIN PAGE LEVEL PLUGINS -->
				<script src="<?=base_url();?>assets/global/scripts/datatable.js" type="text/javascript"></script>
				<script src="<?=base_url();?>assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
				<script src="<?=base_url();?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
				<!-- END PAGE LEVEL PLUGINS -->
				<!-- BEGIN THEME GLOBAL SCRIPTS -->
				<script src="<?=base_url();?>assets/global/scripts/app.min.js" type="text/javascript"></script>
				<!-- END THEME GLOBAL SCRIPTS -->
				<!-- BEGIN PAGE LEVEL SCRIPTS -->
				<script src="<?=base_url();?>assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
				<!-- END PAGE LEVEL SCRIPTS -->
				<!-- BEGIN THEME LAYOUT SCRIPTS -->
				<script src="<?=base_url();?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
				<script src="<?=base_url();?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
				<script src="<?=base_url();?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
				<!-- END THEME LAYOUT SCRIPTS -->
		</body>

</html>
