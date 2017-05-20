<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 		= 'A_logged_in';
$route['404_override'] 				= '';
$route['translate_uri_dashes'] 		= FALSE;

/*Produsen*/
$route['produsen']			= 'P_beranda';
	$route['produsen/profil']	= 'P_beranda/view_profil';
	$route['produsen/faq']		= 'P_beranda/view_faq';

$route['produsen/produk']	= 'P_produk';
	$route['produsen/produk/tambah']	= 'P_produk/view_tambah_produk';
	$route['produsen/produk/edit/:num']		= 'P_produk/view_edit_produk';

$route['produsen/distributor']	= 'P_distributor';
$route['produsen/produk']	= 'P_produk';
$route['produsen/mutasi']	= 'P_mutasi';
$route['produsen/cari-distributor']	= 'A_logged_in';

$route['produsen/pesanan']	= 'P_notifikasi/view_pemesanan';
$route['produsen/permintaan']	= 'P_notifikasi/view_permintaan';


//--------------------------------------pembagi---------------------------------------------//
/*Distributor*/
$route['distributor']	= 'D_beranda';
$route['distributor/profil']	= 'D_beranda/view_profil';
$route['distributor/invoice']	= 'D_notifikasi';
$route['distributor/tagihan']	= 'D_notifikasi/view_tagihan';

$route['distributor/produsen']	= 'D_produsen';
$route['distributor/produsen/produk/:num']	= 'D_produsen/view_daftar_produk';

$route['distributor/pencarian']	= 'D_cari_produsen';
$route['distributor/pencarian/detail/:num']	= 'D_cari_produsen/view_detail_produsen';
