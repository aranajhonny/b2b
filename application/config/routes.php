<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['sesiones'] = 'sesiones';
$route['login'] = 'sesiones/index';
$route['logout'] = 'sesiones/logout';
$route['registro'] = 'sesiones/reg';
$route['usuarios'] = 'usuario/referidos';
$route['registro/(:any)'] = 'sesiones/reg_afiliado/$1';
$route['consultar/(:any)'] = 'usuario/consultar/$1';
$route['admin/editar/(:any)'] = 'usuario/editar/$1';
$route['agregar_referido'] = 'usuario/agregar_referido';
$route['pedido'] = 'usuario/realizar_pedido';
$route['listado_referidos'] = 'usuario/listado_referidos';
$route['cat_referidos'] = 'usuario/arbol_referidos';
$route['usuario'] = 'usuario/add';
$route['cliente'] = 'home/cliente';
$route['admin'] = 'home/admin';
$route['verificar/(:any)'] = 'sesiones/verificar/$1';
$route['(:any)'] = 'index/$1';

$route['default_controller'] = 'home/cliente';
// $route['404_override'] = '';
// $route['translate_uri_dashes'] = FALSE;
