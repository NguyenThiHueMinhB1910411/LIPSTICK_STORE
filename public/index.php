<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require __DIR__ . '/../bootstrap.php';

define('APPNAME', 'Lipstick');

session_start();

$router = new \Bramus\Router\Router();
$router->get('/logout', '\App\Controllers\Auth\LoginController@logout');
$router->get('/register', '\App\Controllers\Auth\RegisterController@showRegisterForm');
$router->post('/register', '\\App\Controllers\Auth\RegisterController@register');
$router->get('/login', '\App\Controllers\Auth\LoginController@showLoginForm');
$router->post('/login', '\App\Controllers\Auth\LoginController@login');

// Contact routes
$router->get('/', '\App\Controllers\HomeController@index');
$router->get('/home', '\App\Controllers\HomeController@index');
$router->get('/about', '\App\Controllers\HomeController@about');
$router->post('/search', '\App\Controllers\HomeController@search');

// $router->get('/all', '\App\Controllers\HomeController@all');
// products
$router->get('/all', '\App\Controllers\HomeController@all');
$router->get('/cream', '\App\Controllers\HomeController@cream');
$router->get('/matte', '\App\Controllers\HomeController@matte');
$router->get('/gloss', '\App\Controllers\HomeController@gloss');


// detail ( chi tiet san pham)
$router->get('/detail_products', '\App\Controllers\HomeController@detail_products');
$router->get('/deleteCart', '\App\Controllers\HomeController@deleteCart');

$router->set404('\App\Controllers\Controller@sendNotFound');
//cart
$router->get('/cart', '\App\Controllers\HomeController@cart');
//addcart
$router->get('/addcart', '\App\Controllers\HomeController@addcart');
$router->post('/addcart', '\App\Controllers\HomeController@addcart');
$router->get('/add', '\App\Controllers\HomeController@add');
$router->get('/receipt', '\App\Controllers\HomeController@receipt');
//pay
$router->get('/pay', '\App\Controllers\HomeController@pay');
$router->post('/pay', '\App\Controllers\HomeController@pay');



// admin
$router->get('/admin', '\App\Controllers\AdminController@index');
$router->get('/order_mng', '\App\Controllers\AdminController@order_mng');
$router->get('/customer_mng', '\App\Controllers\AdminController@customer_mng');
$router->get('/product_mng', '\App\Controllers\AdminController@product_mng');
$router->post('/search_admin', '\App\Controllers\AdminController@search_admin');
$router->get('/delete_product', '\App\Controllers\AdminController@delete_product');
$router->get('/accept', '\App\Controllers\AdminController@accept_receipt');
$router->get('/cancel', '\App\Controllers\AdminController@cancel_receipt');
$router->post('/add_product', '\App\Controllers\AdminController@add_product');
$router->post('/edit_product', '\App\Controllers\AdminController@edit_product');



$router->run();