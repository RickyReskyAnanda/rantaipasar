<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 		= 'A_logged_in';
$route['404_override'] 				= '';
$route['translate_uri_dashes'] 		= FALSE;

/*Produsen*/
$route['produsen']			= 'P_beranda';
$route['produsen/produk']	= 'P_produk';
$route['produsen/distributor']	= 'A_logged_in';
$route['produsen/produk/']	= 'A_logged_in';
$route['produsen/']	= 'A_logged_in';

/*Distributor*/
$route['distributor']	= 'A_logged_in';
$route['distributor']	= 'A_logged_in';
$route['distributor']	= 'A_logged_in';
$route['distributor']	= 'A_logged_in';
$route['distributor']	= 'A_logged_in';