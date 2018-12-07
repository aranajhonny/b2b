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
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>B2B Lider | Agregar Referido</title>
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
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                        <img src="<?=base_url();?>assets/layouts/layout4/img/logo-light.png" alt="logo" class="logo-default" /> </a>
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
                                    <span class="username username-hide-on-mobile"> Nick </span>
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
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-users"></i>
                                <span class="title">Mis Referidos</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
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
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="realizar_pedido.html" class="nav-link nav-toggle">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="title">Realizar Pedido</span>
                            </a>
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
                    <div class="page-head"></div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered" id="form_wizard_1">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class=" icon-user font-red"></i>
                                        <span class="caption-subject font-red bold uppercase"> Realizar Pedido -
                                            <span class="step-title"> Paso 1 de 3 </span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                <form class="form-horizontal" role="form" action="guardar_referido" id="submit_form" method="POST">
                                        <div class="form-wizard">
                                            <div class="form-body">
                                                <ul class="nav nav-pills nav-justified steps">
                                                    <li>
                                                        <a href="#tab1" data-toggle="tab" class="step">
                                                            <span class="number"> 1 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Selecione un Paquete </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab2" data-toggle="tab" class="step">
                                                            <span class="number"> 2 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Datos Personales </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab3" data-toggle="tab" class="step active">
                                                            <span class="number"> 3 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Estado </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div id="bar" class="progress progress-striped" role="progressbar">
                                                    <div class="progress-bar progress-bar-success"> </div>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="alert alert-danger display-none">
                                                        <button class="close" data-dismiss="alert"></button> Tienes algunos errores. Por favor chequea abajo. </div>
                                                    <div class="alert alert-success display-none">
                                                        <button class="close" data-dismiss="alert"></button> Se ha validado de forma exitosa! </div>
                                                    <div class="tab-pane active" id="tab1">
                                                        <h3 class="block">Selecione el combo que desea comprar</h3>
                                                           <div class="portlet-body">
                             <div class="row">
                             <div class="col-md-12">
                                <div class="portlet-body">
                                    <div class="mt-element-card mt-element-overlay">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1 mt-scroll-left">
                                                        <img src="<?=base_url();?>assets/img/kartox-caja-con-solapas_5.jpg" />
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
                                                        <h3 class="mt-card-name"> 120 S/.</h3>
                                                        <div class="mt-card-social">
                                                            <ul>
                                                              <div class="col-md-11">
                                                                <div class="md-radio-inline">
                                                                    <div class="md-radio">
                                                                        <input type="radio" id="paquete_1" name="pedido" class="md-radiobtn" value="paquete_1">
                                                                        <label for="paquete_1">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span> Paquete N° 1 </label>
                                                                    </div>  
                                                              </div>
                                                            </div>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1 mt-scroll-left">
                                                        <img src="<?=base_url();?>assets/img/kartox-caja-con-solapas_5.jpg" />
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
                                                        <h3 class="mt-card-name"> 130 S/.</h3>
                                                        <div class="mt-card-social">
                                                            <ul>
                                                              <div class="col-md-11">
                                                                <div class="md-radio-inline">
                                                                    <div class="md-radio">
                                                                        <input type="radio" id="paquete_2" name="pedido" class="md-radiobtn" value="paquete_2">
                                                                        <label for="paquete_2">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span> Paquete N° 2 </label>
                                                                    </div>  
                                                              </div>
                                                            </div>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1 mt-scroll-left">
                                                        <img src="<?=base_url();?>assets/img/kartox-caja-con-solapas_5.jpg" />
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
                                                        <h3 class="mt-card-name"> 140 S/.</h3>
                                                        <div class="mt-card-social">
                                                            <ul>
                                                              <div class="col-md-11">
                                                                <div class="md-radio-inline">
                                                                    <div class="md-radio">
                                                                        <input type="radio" id="paquete_3" name="pedido" class="md-radiobtn" value="paquete_3">
                                                                        <label for="paquete_3">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span> Paquete N° 3 </label>
                                                                    </div>  
                                                              </div>
                                                            </div>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1 mt-scroll-left">
                                                        <img src="<?=base_url();?>assets/img/kartox-caja-con-solapas_5.jpg" />
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
                                                        <h3 class="mt-card-name"> 150 S/.</h3>
                                                        <div class="mt-card-social">
                                                            <ul>
                                                              <div class="col-md-11">
                                                                <div class="md-radio-inline">
                                                                    <div class="md-radio">
                                                                        <input type="radio" id="paquete_4" name="pedido" class="md-radiobtn" value="paquete_4">
                                                                        <label for="paquete_4">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span> Paquete N° 4 </label>
                                                                    </div>  
                                                              </div>
                                                            </div>
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
                                                 </div></div>
                                                    <div class="tab-pane" id="tab2">
                                                        <h3 class="block">Proporciona la información de Contacto</h3>
                                                        <div class="form-group form-md-line-input">
                                                            <label class="control-label col-md-3">Nombre
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" required="" class="form-control" name="nombre" />
                                                                <span class="help-block"> Ingrese su nombre completo </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <label class="control-label col-md-3">Apellido
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" required class="form-control" name="apellido" />
                                                                <span class="help-block"> Ingrese su apellido completo </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <label class="control-label col-md-3">Direcion
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" required class="form-control" name="direccion" />
                                                                <span class="help-block"> Ingrese su direccion donde vive </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <label class="control-label col-md-3">Región
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="region" />
                                                                <span class="help-block"> Región donde vive </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <label class="control-label col-md-3">Teléfono Celular
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="number" class="form-control" name="phone" />
                                                                <span class="help-block"> Número de celular </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <label class="control-label col-md-3">Teléfono Fijo
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="number" required class="form-control" name="telefonoF" />
                                                                <span class="help-block"> Número de casa </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-md-line-input">
                                                            <label class="control-label col-md-3">E-mail
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" required class="form-control" name="email" />
                                                                <span class="help-block"> Correo Electrónico </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab3">
                                                        <h3 class="block"> Confirmar Datos:</h3>
                                                       <div class="row">
                        <div class="col-md-12">
                            <!-- Begin: life time stats -->
                            <div class="portlet light portlet-fit portlet-datatable bordered">
                                <div class="portlet-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_1">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="portlet yellow-crusta box">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-cogs"></i>Order Details </div>
                                                                <div class="actions">
                                                                    <a href="javascript:;" class="btn btn-default btn-sm">
                                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Order #: </div>
                                                                    <div class="col-md-7 value"> 12313232
                                                                        <span class="label label-info label-sm"> Email confirmation was sent </span>
                                                                    </div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Order Date & Time: </div>
                                                                    <div class="col-md-7 value"> Dec 27, 2013 7:16:25 PM </div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Order Status: </div>
                                                                    <div class="col-md-7 value">
                                                                        <span class="label label-success"> Closed </span>
                                                                    </div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Grand Total: </div>
                                                                    <div class="col-md-7 value"> $175.25 </div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Payment Information: </div>
                                                                    <div class="col-md-7 value"> Credit Card </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                                    <div class="row">
                                                    <div class="col-md-6"> </div>
                                                    <div class="col-md-6">
                                                        <div class="well">
                                                            <div class="row static-info align-reverse">
                                                                <div class="col-md-8 name"> Sub Total: </div>
                                                                <div class="col-md-3 value"> $1,124.50 </div>
                                                            </div>
                                                            <div class="row static-info align-reverse">
                                                                <div class="col-md-8 name"> Shipping: </div>
                                                                <div class="col-md-3 value"> $40.50 </div>
                                                            </div>
                                                            <div class="row static-info align-reverse">
                                                                <div class="col-md-8 name"> Grand Total: </div>
                                                                <div class="col-md-3 value"> $1,260.00 </div>
                                                            </div>
                                                            <div class="row static-info align-reverse">
                                                                <div class="col-md-8 name"> Total Paid: </div>
                                                                <div class="col-md-3 value"> $1,260.00 </div>
                                                            </div>
                                                            <div class="row static-info align-reverse">
                                                                <div class="col-md-8 name"> Total Refunded: </div>
                                                                <div class="col-md-3 value"> $0.00 </div>
                                                            </div>
                                                            <div class="row static-info align-reverse">
                                                                <div class="col-md-8 name"> Total Due: </div>
                                                                <div class="col-md-3 value"> $1,124.50 </div>
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
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <a href="javascript:;" class="btn default button-previous">
                                                            <i class="fa fa-angle-left"></i> Volver </a>
                                                        <a href="javascript:;" class="btn btn-outline green button-next"> Continuar
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                        <button type="submit" class="btn green button-submit"> Guardar
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </for>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- END SAMPLE FORM PORTLET-->

                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
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
        <script src="<?=base_url();?>assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?=base_url();?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?=base_url();?>assets/pages/scripts/form-wizard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?=base_url();?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
</body>
</html>