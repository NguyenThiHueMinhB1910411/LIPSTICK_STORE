<?php

namespace App\Controllers;

use App\Models\cart;
use App\Models\detail_cart;
use App\Models\Product;

use App\SessionGuard as Guard;
use PDOException;

class HomeController extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	// public function __construct()
	// {
	// if (!Guard::isUserLoggedIn()) {
	// 	redirect('/login');
	// }
	// }

	public function index()
	{

		$this->sendPage('home');
	}
	// about us
	public function about()
	{
		$this->sendPage('about');
	}
	// login
	public function login()
	{
		$this->sendPage('login');
	}
	public function admin()
	{
		$this->sendPage('admin');
	}
	public function add()
	{
		$this->sendPage('add');
	}
	// ***************** products*****************//

	// public function cream()
	// {

	// 	$this->sendPage('cream', ['products' => Product::where('id_category', 'L01')->get()]);
	// }
	// public function matte()
	// {
	// 	$this->sendPage('matte', ['products' => Product::where('id_category', 'L02')->get()]);
	// }
	// public function gloss()
	// {
	// 	$this->sendPage('gloss', ['products' => Product::where('id_category', 'L03')->get()]);
	// }
	// public function all()
	// {
	// 	$this->sendPage('all', ['products' => Product::all()]);
	// }
	public function cart()

	{
		if (!Guard::isUserLoggedIn()) {
			redirect('/login');
		}
		$id_cart = cart::where('id', Guard::users()->id)->first()->id_cart;
		$this->sendPage('cart', ['cart' => detail_cart::join('products', 'products.id_products', '=', 'detail_cart.id_products')->where('id_cart', $id_cart)->get()]);
	}
	public function addcart()

	{
		if (!Guard::isUserLoggedIn()) {
			redirect('/login');
		}


		$id_cart = cart::where('id', Guard::users()->id)->first()->id_cart;

		try {
			detail_cart::create([
				'id_cart' => $id_cart,
				'number' => 1,
				'id_products' => $_GET['id']
			]);
		} catch (PDOException $pd) {
			$number = detail_cart::where('id_cart', $id_cart)->where('id_products', $_GET['id'])->first()->number;
			detail_cart::where('id_cart', $id_cart)->where('id_products', $_GET['id'])->update(['number' => ($number + 1)]);
		}
		redirect('/all');
	}
	// xem chi tiet (detail)//


	public function detail()
	{
		$this->sendPage('detail');
	}
	public function logout()
	{
		$this->sendPage('logout');
	}
}