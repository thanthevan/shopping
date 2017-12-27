<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'login/index';
$route['produce'] = 'produce/index';
$route['productcategories/index/(:any)/(:num)'] = 'productcategories/index/$1/$2';
