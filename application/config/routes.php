<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'user/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'user/login';
$route['register'] = 'user/register';
$route = Luthier\Route::getRoutes();
