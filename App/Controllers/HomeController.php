<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\cart;
use App\Models\users;
use App\Models\detail_cart;


use App\Models\receipt;
use App\Models\detail_receipt;
use App\Models\Product;
use Illuminate\Support\Facades\Date;

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
	// public function admin()
	// {
	// 	$this->sendPage('admin');
	// }
	public function search()
	{
		if (isset($_POST['search']) && $_POST['search'] != '') {
			$this->sendPage('layouts/search', ['result' => Product::where('name_products', 'like', '%' . $_POST['search'] . '%')->get()]);
		} else {
			redirect('/home');
		}
	}
	public function search_admin()
	{
		if (isset($_POST['search_admin']) && $_POST['search_admin'] != '') {
			$this->sendPage('search_admin', ['result' => Product::where('name_products', 'like', '%' . $_POST['search_admin'] . '%')->get()]);
		} else {
			redirect('/admin');
		}
	}
	public function add()
	{
		$this->sendPage('add');
	}
	public function detail_products()
	{
		$this->sendPage('detail_products', ['product' => Product::where('id_products', $_GET['masp'])->first()]);
	}

	// ***************** products*****************//

	public function cream()
	{

		$this->sendPage('cream', ['products' => Product::where('id_category', 'L01')->get()]);
	}
	public function matte()
	{
		$this->sendPage('matte', ['products' => Product::where('id_category', 'L02')->get()]);
	}
	public function gloss()
	{
		$this->sendPage('gloss', ['products' => Product::where('id_category', 'L03')->get()]);
	}
	public function all()
	{
		$this->sendPage('all', ['products' => Product::all()]);
	}

	// hoa don
	public function receipt()
	{
		$this->sendPage('receipt');
	}
	// public function cart()
	// {
	// 	if (!Guard::isUserLoggedIn()) {
	// 		redirect('/login');
	// 	}
	// 	$id_cart = cart::join('users', 'users.id', '=', 'cart.id')->where('email', Guard::users()->email)->first()->id_cart;
	// 	$this->sendPage('cart/cart', ['carts' => detail_cart::join('products', 'products.id_products', '=', 'detail_cart.id_products')->where('id_cart', $id_cart)->get()]);
	// }

	// public function addCart()
	// {
	// 	$id_cart = cart::where('id', Guard::users()->id)->first()->id_cart;
	// 	try {
	// 		detail_cart::create([
	// 			'id_cart' => $id_cart,
	// 			'number' => 1,
	// 			'id_products' => $_GET['id']
	// 		]);
	// 	} catch (PDOException $pd) {
	// 		$number = detail_cart::where('id_cart', $id_cart)->where('id_products', $_GET['id'])->first()->number;
	// 		detail_cart::where('id_cart', $id_cart)->where('id_products', $_GET['id'])->update(['number' => ($number + 1)]);
	// 	}
	// 	redirect('/cart');
	// }

	// cmt gio hang old da chay duoc
	// gio hang
	public function cart()

	{
		if (!Guard::isUserLoggedIn()) {
			redirect('/login');
		}
		$id_cart = cart::where('id', Guard::users()->id)->first()->id_cart;
		$this->sendPage('cart', ['carts' => detail_cart::join('products', 'products.id_products', '=', 'detail_cart.id_products')->where('id_cart', $id_cart)->get()]);
	}
	public function addcart()

	{
		if (!Guard::isUserLoggedIn()) {
			redirect('/login');
		}
		$number = 1;
		$id_products = $_GET['id'];

		$id_cart = cart::where('id', Guard::users()->id)->first()->id_cart;
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$number = $_POST['number'];
			$id_products = $_POST['masp'];
		}
		try {
			detail_cart::create([
				'id_cart' => $id_cart,
				'number' => $number,
				'id_products' => $id_products
			]);
		} catch (PDOException $pd) {
			$numbers = detail_cart::where('id_cart', $id_cart)->where('id_products', $_GET['id'])->first()->number;
			detail_cart::where('id_cart', $id_cart)->where('id_products', $id_products)->update(['number' => ($numbers + $number)]);
		}
		redirect('/cart');
	}

	// ham xoa san pham trong gio hang
	public function deleteCart()
	{
		$cart = cart::join('users', 'users.id', '=', 'cart.id')->where('email', Guard::users()->email)->first()->id_cart;
		detail_cart::where('id_cart', $cart)->where('id_products', $_GET['masp'])->delete();
		redirect('/cart');
	}
	// ham thanh toan
	public function pay()
	{
		$cart = cart::join('users', 'users.id', '=', 'cart.id')->where('email', Guard::users()->email)->first();
		$receipt = receipt::create([
			'date_create_receipt' => Date::now(7),
			'total' => $_POST['total'],
			'id' => $cart->id,
			'address' => $_POST['address'],
			'stastus_payment' => 'Chưa thanh toán',
			'status_receipt' => 'Đang xác nhận'
		]);
		foreach (detail_cart::where('id_cart', $cart->id_cart)->get() as $cart) {
			detail_receipt::create([
				'id_receipt' => $receipt->id_receipt,
				'id_products' => $cart->id_products,
				'number_product' => $cart->number_products
			]);
			detail_cart::where('id_products', $cart->id_products)->where('id_cart', $cart->id_cart)->delete();
		}
		redirect('/cart');












		// thanh toan

		// public function pay()

		// {
		// 	if (!Guard::isUserLoggedIn()) {
		// 		redirect('/login');
		// 	}
		// 	$id_cart = cart::where('id', Guard::users()->id)->first()->id_cart;
		// 	$carts = detail_cart::join('products', 'products.id_products', '=', 'detail_cart.id_products')->where('id_cart', $id_cart)->get();
		// 	foreach ($carts as $cart) {
		// 		detail_cart::where('id_products', $cart->id_products)->where('id_cart', $cart->id_cart)->delete();
		// 	}

		// 	redirect('/cart');
		// }












	}
}