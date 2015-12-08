<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'Users';

// Users controller
$route['register'] = 'Users/register';
$route['login'] = 'Users/login';


// Dashboards controller
$route['/dashboards'] = 'Dashboards/index';
$route['/users/show/(:any)'] = 'Users/show/$1';
$route['messages/create'] = 'Dashboards/create_messages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
