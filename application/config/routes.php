<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['admin/dashboard'] = 'admin/keHalamanDashboard';


$route['logout'] = 'admin/keHalamanDashboard';
$route['prosesLogin'] = 'admin/login';
$route['login'] = 'admin/keHalamanLogin';


$route['konfirmasi'] = 'Guest/keHalamanKonfirmasi';
$route['default_controller'] = 'Guest/keHalamanDepan';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


