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
$route['default_controller'] = 'Front_home';
$route['tentang'] 			 = 'Front_tentang';
$route['layanan'] 			 = 'Front_services';
$route['layanan/(:any)'] 	 = 'Front_services/layanan_detail/$1';
$route['blog'] 				 = 'Front_blog';
$route['blog/(:num)'] 		 = 'Front_blog/index/$1';
$route['blog-detail/(:any)'] 	= 'Front_blog/blog_detail/$1'; 
$route['info-event'] 			= 'Front_kegiatan';
$route['info-event/(:any)'] 	= 'Front_kegiatan/kegiatan_detail/$1';

$route['portofolio'] 			 = 'Front_gallery';
$route['portofolio/(:num)'] 	 = 'Front_gallery/index/$1';
$route['kontak'] 			 = 'Front_contact';
$route['contact/send']  	 = 'Front_contact/contact_send';
$route['produk'] 				 = 'Front_shop';
$route['produk/(:num)'] 		 = 'Front_shop/index/$1';

$route['produk-detail/(:any)'] = 'Front_shop/shop_detail/$1';

// BACKEND
$route['auth-karriz'] 			= 'Back_login';
$route['auth-karriz/proses'] 		= 'Back_login/proses';
$route['logout']			= 'Back_logout/logout';
$route['dashboard'] 		= 'Back_dashboard';

$route['master/kategori-blog']  	= 'Back_kat_blog';
$route['master/kategori-kegiatan']  = 'Back_kat_kegiatan';
$route['master/kategori-product']   = 'Back_kat_product';
$route['master/kategori-gallery']   = 'Back_kat_gallery';

$route['konten/slideshow'] 			= 'Back_slideshow';
$route['konten/slideshow/add']		= 'Back_slideshow/tambah_data';
$route['konten/slideshow/edit'] 	= 'Back_slideshow/edit_data';

$route['konten/blog'] 				= 'Back_blog';
$route['konten/blog/add']			= 'Back_blog/tambah_data';
$route['konten/blog/edit'] 			= 'Back_blog/edit_data';

$route['konten/kegiatan']			= 'Back_kegiatan';
$route['konten/kegiatan/add']		= 'Back_kegiatan/tambah_data';
$route['konten/kegiatan/edit'] 		= 'Back_kegiatan/edit_data';

$route['konten/gallery']			= 'Back_gallery';
$route['konten/gallery/add']		= 'Back_gallery/tambah_data';
$route['konten/gallery/edit'] 		= 'Back_gallery/edit_data';

$route['konten/service']			= 'Back_service';
$route['konten/service/add']		= 'Back_service/tambah_data';
$route['konten/service/edit'] 		= 'Back_service/edit_data';

$route['konten/product'] 		 	= 'Back_product';
$route['konten/product/add']	 	= 'Back_product/tambah_data';
$route['konten/product/edit'] 	 	= 'Back_product/edit_data';

$route['konten/promo']              = 'Back_promo';
$route['konten/promo/add']          = 'Back_promo/tambah_data';
$route['konten/promo/edit']       = 'Back_promo/edit_data';

$route['konten/client']				= 'Back_client';
$route['konten/client/add']			= 'Back_client/tambah_data';
$route['konten/client/edit'] 		= 'Back_client/edit_data';

$route['konten/testimoni']			= 'Back_testimoni';
$route['konten/testimoni/add']		= 'Back_testimoni/tambah_data';
$route['konten/testimoni/edit'] 	= 'Back_testimoni/edit_data';

$route['konten/contact'] 			= 'Back_contact';

$route['media'] 					= 'Back_media';
$route['inbox'] 					= 'Back_inbox';
// $route['user'] 						= 'Back_user';

$route['sitemap'] 					= 'Sitemap';
$route['page404'] 					= 'Errors/page_not_founf';
$route['404_override'] 		 = '';
$route['translate_uri_dashes'] = FALSE;
