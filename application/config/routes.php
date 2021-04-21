<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller']    = 'HomeController';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

// Home
$route['lpaket']                = 'HomeController/vPaket';
$route['lorder']                = 'HomeController/vOrder';


// KLIEN
$route['klien']                 = 'KlienController/vKlien';
$route['klien/store']           = 'KlienController/store';
$route['klien/edit']            = 'KlienController/edit';
$route['klien/ajxGet']          = 'KlienController/ajxGet';
$route['klien/changeStatus']    = 'KlienController/changeStatus';

// User
$route['user']                  = 'UserController/vUser';
$route['user/store']            = 'UserController/store';
$route['user/changeStatus']     = 'UserController/changeStatus';
$route['user/edit']             = 'UserController/edit';
$route['user/ajxGet']           = 'UserController/ajxGet';

// Paket
$route['paket']                  = 'PaketController/vPaket';
$route['paket/store']            = 'PaketController/store';
$route['paket/edit']             = 'PaketController/edit';
$route['paket/ajxGet']           = 'PaketController/ajxGet';
$route['paket/delete']           = 'PaketController/delete';

// Proyek Pemesanan
$route['pemesanan']              = 'ProyekController/vPemesanan';
$route['pemesanan/store']        = 'ProyekController/store';
$route['pemesanan/edit']         = 'ProyekController/edit';
$route['pemesanan/ajxGet']       = 'ProyekController/ajxGet';
$route['pemesanan/delete']       = 'ProyekController/delete';

// Proyek Inventaris Barang
$route['inventaris']              = 'InventarisController/vInventaris';
$route['inventaris/store']        = 'InventarisController/store';
$route['inventaris/edit']         = 'InventarisController/edit';
$route['inventaris/ajxGet']       = 'InventarisController/ajxGet';
$route['inventaris/delete']       = 'InventarisController/delete';

// Proyek Surat Kontrak Kerja
$route['skk']              = 'SkkController/vSKK';
$route['skk/store']        = 'SkkController/store';
$route['skk/edit']         = 'SkkController/edit';
$route['skk/ajxGet']       = 'SkkController/ajxGet';
$route['skk/delete']       = 'SkkController/delete';

// Proyek Pemasukan
$route['pemasukan']        = 'PemasukanController/vPemasukan';
$route['pemasukan/store']  = 'PemasukanController/store';
$route['pemasukan/edit']   = 'PemasukanController/edit';
$route['pemasukan/ajxGet'] = 'PemasukanController/ajxGet';

// Proyek Pengeluaran
$route['pengeluaran']        = 'PengeluaranController/vPengeluaran';
$route['pengeluaran/store']  = 'PengeluaranController/store';
$route['pengeluaran/edit']   = 'PengeluaranController/edit';
$route['pengeluaran/ajxGet'] = 'PengeluaranController/ajxGet';

// Proyek Nota Pembayaran
$route['notapembayaran']                = 'NotaPembayaranController/vPembayaran';
$route['notapembayaran/store']          = 'NotaPembayaranController/store';
$route['notapembayaran/edit']           = 'NotaPembayaranController/edit';
$route['notapembayaran/ajxGet']         = 'NotaPembayaranController/ajxGet';
$route['notapembayaran/changeStatus']   = 'NotaPembayaranController/changeStatus';

// Proyek Nota Pengiriman
$route['notapengiriman']                = 'NotaPengirimanController/vPembayaran';
$route['notapengiriman/store']          = 'NotaPengirimanController/store';
$route['notapengiriman/edit']           = 'NotaPengirimanController/edit';
$route['notapengiriman/ajxGet']         = 'NotaPengirimanController/ajxGet';
$route['notapengiriman/changeStatus']   = 'NotaPengirimanController/changeStatus';
