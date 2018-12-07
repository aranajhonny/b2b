<!DOCTYPE html>
<!--
Template Name: b2b - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/b2b-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/b2b-responsive-admin-dashboard-template/4021469?ref=keenthemes
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
        <title>B2B Lider | Inicio</title>
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
                                <a target="_blank" href="<?php echo $_SESSION['link_refer']; ?>" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
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
                                        <a href="logout">
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
                        <div class="page-title">
                            <h1>Afiliados Principales</h1>
                        </div>
                        <!-- END PAGE TITLE -->
                                            </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BASE CONTENT -->
                   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-blue-soft">
                                            <span data-counter="counterup" data-value="23"></span>
                                        </h3>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="status">
                                        <div class="status-title"> Tienes 23 Afiliados </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <small>Nivel del Usuario</small><font size=5 class="font-blue-soft">
<span data-counter="counterup" data-value="2">0</span></font>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-level-up"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 50%;" class="progress-bar progress-bar-success blue-sharp"></span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> progreso </div>
                                        <div class="status-number"> 50% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-body">
                                    <div class="mt-element-card mt-element-overlay">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1">
                                                        <img src="<?=base_url();?>assets/pages/img/avatars/team1.jpg" />
                                                        <div class="mt-overlay">
                                                            <ul class="mt-info">
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-magnifier"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-link"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mt-card-content">
                                                        <h3 class="mt-card-name">Mark Anthony</h3>
                                                        <p class="mt-card-desc font-grey-mint">Managing Director</p>
                                                        <div class="mt-card-social">
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-dribbble"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1 mt-scroll-down">
                                                        <img src="<?=base_url();?>assets/pages/img/avatars/team2.jpg" />
                                                        <div class="mt-overlay mt-top">
                                                            <ul class="mt-info">
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-magnifier"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-link"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mt-card-content">
                                                        <h3 class="mt-card-name">Denzel Wash</h3>
                                                        <p class="mt-card-desc font-grey-mint">Finance Director</p>
                                                        <div class="mt-card-social">
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-dribbble"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1 mt-scroll-up">
                                                        <img src="<?=base_url();?>assets/pages/img/avatars/team3.jpg" />
                                                        <div class="mt-overlay">
                                                            <ul class="mt-info">
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-magnifier"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-link"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mt-card-content">
                                                        <h3 class="mt-card-name">David Goodman</h3>
                                                        <p class="mt-card-desc font-grey-mint">Creative Director</p>
                                                        <div class="mt-card-social">
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-dribbble"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1 mt-scroll-left">
                                                        <img src="<?=base_url();?>assets/pages/img/avatars/team4.jpg" />
                                                        <div class="mt-overlay">
                                                            <ul class="mt-info">
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-magnifier"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-link"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mt-card-content">
                                                        <h3 class="mt-card-name">Lucy Ling</h3>
                                                        <p class="mt-card-desc font-grey-mint">HR Director</p>
                                                        <div class="mt-card-social">
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-dribbble"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-body">
                                    <div class="mt-element-card mt-element-overlay">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1">
                                                        <img src="<?=base_url();?>assets/pages/img/avatars/team1.jpg" />
                                                        <div class="mt-overlay">
                                                            <ul class="mt-info">
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-magnifier"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-link"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mt-card-content">
                                                        <h3 class="mt-card-name">Mark Anthony</h3>
                                                        <p class="mt-card-desc font-grey-mint">Managing Director</p>
                                                        <div class="mt-card-social">
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-dribbble"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1 mt-scroll-down">
                                                        <img src="<?=base_url();?>assets/pages/img/avatars/team2.jpg" />
                                                        <div class="mt-overlay mt-top">
                                                            <ul class="mt-info">
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-magnifier"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-link"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mt-card-content">
                                                        <h3 class="mt-card-name">Denzel Wash</h3>
                                                        <p class="mt-card-desc font-grey-mint">Finance Director</p>
                                                        <div class="mt-card-social">
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-dribbble"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1 mt-scroll-up">
                                                        <img src="<?=base_url();?>assets/pages/img/avatars/team3.jpg" />
                                                        <div class="mt-overlay">
                                                            <ul class="mt-info">
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-magnifier"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-link"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mt-card-content">
                                                        <h3 class="mt-card-name">David Goodman</h3>
                                                        <p class="mt-card-desc font-grey-mint">Creative Director</p>
                                                        <div class="mt-card-social">
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-dribbble"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1 mt-scroll-left">
                                                        <img src="<?=base_url();?>assets/pages/img/avatars/team4.jpg" />
                                                        <div class="mt-overlay">
                                                            <ul class="mt-info">
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-magnifier"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-link"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mt-card-content">
                                                        <h3 class="mt-card-name">Lucy Ling</h3>
                                                        <p class="mt-card-desc font-grey-mint">HR Director</p>
                                                        <div class="mt-card-social">
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-dribbble"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-body">
                                    <div class="mt-element-card mt-element-overlay">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1">
                                                        <img src="<?=base_url();?>assets/pages/img/avatars/team1.jpg" />
                                                        <div class="mt-overlay">
                                                            <ul class="mt-info">
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-magnifier"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-link"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mt-card-content">
                                                        <h3 class="mt-card-name">Mark Anthony</h3>
                                                        <p class="mt-card-desc font-grey-mint">Managing Director</p>
                                                        <div class="mt-card-social">
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-dribbble"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1 mt-scroll-down">
                                                        <img src="<?=base_url();?>assets/pages/img/avatars/team2.jpg" />
                                                        <div class="mt-overlay mt-top">
                                                            <ul class="mt-info">
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-magnifier"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-link"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mt-card-content">
                                                        <h3 class="mt-card-name">Denzel Wash</h3>
                                                        <p class="mt-card-desc font-grey-mint">Finance Director</p>
                                                        <div class="mt-card-social">
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-dribbble"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1 mt-scroll-up">
                                                        <img src="<?=base_url();?>assets/pages/img/avatars/team3.jpg" />
                                                        <div class="mt-overlay">
                                                            <ul class="mt-info">
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-magnifier"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-link"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mt-card-content">
                                                        <h3 class="mt-card-name">David Goodman</h3>
                                                        <p class="mt-card-desc font-grey-mint">Creative Director</p>
                                                        <div class="mt-card-social">
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-dribbble"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1 mt-scroll-left">
                                                        <img src="<?=base_url();?>assets/pages/img/avatars/team4.jpg" />
                                                        <div class="mt-overlay">
                                                            <ul class="mt-info">
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-magnifier"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn default btn-outline" href="javascript:;">
                                                                        <i class="icon-link"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mt-card-content">
                                                        <h3 class="mt-card-name">Lucy Ling</h3>
                                                        <p class="mt-card-desc font-grey-mint">HR Director</p>
                                                        <div class="mt-card-social">
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-social-dribbble"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
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
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script>
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
        <script src="<?=base_url();?>assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/horizontal-timeline/horozontal-timeline.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?=base_url();?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?=base_url();?>assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?=base_url();?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
