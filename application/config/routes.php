<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Default
$route['default_controller'] = 'User';

//User
$route['user/(:any)'] = 'User/$1';
$route['home'] = 'User/index';
$route['bantuan'] = 'User/bantuan';
$route['kategori/(:any)'] = 'User/kategori/$1';
$route['berita/(:any)'] = 'User/post/$1';
$route['pengaturan'] = 'User/pengaturan';

//Auth
$route['login'] = 'Auth/login';
$route['daftar'] = 'Auth/daftar';
$route['logout'] = 'Auth/logout';
$route['auth/(:any)'] = 'Auth/$1';

//admin daerah
$route['admin-daerah/home'] = 'Admin_daerah';

//admin pusat
$route['hapus_artikel/(:any)'] = 'Admin_pusat/hapus_artikel/$1';
$route['admin-pusat/do_upload'] = 'Admin_pusat/do_upload';
$route['admin-pusat/home'] = 'Admin_pusat';
$route['admin-pusat/permintaan-bantuan'] = 'Admin_pusat/permintaan_bantuan';
$route['admin-pusat/artikel'] = 'Admin_pusat/artikel';
$route['admin-pusat/tulis_artikel'] = 'Admin_pusat/tulis_artikel';
$route['admin-pusat/admin-daerah'] = 'Admin_pusat/admin-daerah';


//bantuan
$route['bantuan/(:any)'] = 'bantuan/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
