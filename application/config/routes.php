<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Default
$route['default_controller'] = 'User';

//User
$route['user/(:any)'] = 'User/$1';
$route['home'] = 'User/index';
$route['bantuan'] = 'User/bantuan';
$route['berita/(:any)'] = 'User/post';

//Auth
$route['login'] = 'Auth/login';
$route['daftar'] = 'Auth/daftar';
$route['logout'] = 'Auth/logout';
$route['auth/(:any)'] = 'Auth/$1';

//admin daerah
$route['admin-daerah/home'] = 'Admin_pusat';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
