<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'beranda';
$route['dashboard'] = 'beranda';
$route['home'] = 'beranda';
$route['produk'] = 'beranda/produk';
$route['produk/Insektisida'] = 'beranda/produk1';
$route['produk/insektisida'] = 'beranda/produk1';
$route['produk/Herbisida'] = 'beranda/produk2';
$route['produk/herbisida'] = 'beranda/produk2';
$route['produk/Fungisida'] = 'beranda/produk3';
$route['produk/fungisida'] = 'beranda/produk3';
$route['galleri'] = 'beranda/galeri';
$route['tentang-kami'] = 'beranda/tentang';
$route['404_override'] = 'Notfounde';
$route['translate_uri_dashes'] = FALSE;

/*
| -------------------------------------------------------------------------
| Sample REST API Routes
| -------------------------------------------------------------------------
*/

$route['api/example/users/(:num)'] = 'api/example/users/id/$1'; // Example 4
$route['api/example/users/(:num)(\.)([a-zA-Z0-9_-]+)(.*)'] = 'api/example/users/id/$1/format/$3$4'; // Example 8
