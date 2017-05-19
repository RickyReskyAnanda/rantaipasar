<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 		= 'A_logged_in';
$route['404_override'] 				= '';
$route['translate_uri_dashes'] 		= FALSE;

/*Produsen*/
$route['produsen']			= 'P_beranda';
$route['produsen/produk']	= 'P_produk';
$route['produsen/distributor']	= 'P_distributor';
$route['produsen/produk']	= 'P_produk';
$route['produsen/mutasi']	= 'P_mutasi';
$route['produsen/cari-distributor']	= 'A_logged_in';
$route['produsen/notifikasi']	= 'P_notifikasi';

/*Distributor*/
$route['distributor']	= 'D_beranda';
$route['distributor/cari-produsen']	= 'D_cari_produsen';
$route['distributor/notifikasi']	= 'D_notifikasi';
$route['distributor/daftar-produsen']	= 'D_produsen';
