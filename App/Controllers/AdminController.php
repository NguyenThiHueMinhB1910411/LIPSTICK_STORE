<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\receipt;
use App\Models\users;
use App\Models\Product;
use App\Models\cart;


use Illuminate\Support\Facades\Date;

class AdminController extends Controller
{


	public function index()
	{
		$this->sendPage('admin/admin');
	}
	public function add_product()
	
	{
		Product::create([
			'id_products' => $_POST['id_products'],
			'id_category' => $_POST['id_category'],
			'name_products' =>$_POST['name_products'],
			'price' =>$_POST['price'],
			'image' =>$_POST['filename'],
			
		]);
		$this->sendPage('admin/product_mng',['Product' => Product::all()]);
	}
	
	public function order_mng()
	{
		$this->sendPage('admin/order_mng', ['receipt' => receipt::all()]);
	}
	public function customer_mng()
	{
		$this->sendPage('admin/customer_mng', ['customer' => users::all()]);
	}
	public function product_mng()
	{
		$this->sendPage('admin/product_mng', ['Product' => Product::all()]);
	}

	public function search_admin()
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$this->sendPage('admin/product_mng', ['Product' => Product::where('name_products', 'like', '%' . $_POST['search_admin'] . '%')->get()]);
		} else {
			redirect('/product_mng');
		}
	}
	public function delete_product(){
		Product::where('id_products',$_GET['masp'])->delete();
		$this->sendpage('admin/product_mng', ['Product' => Product::all()]);
	}
	public function edit_product(){
		Product::where('id_products',$_POST['id_products'])->update([
			'name_products'=> $_POST['name_products'],
			'id_category' => $_POST['id_category'],
			'price' =>$_POST['price']
			
		]);
		$this->sendpage('admin/product_mng', ['Product' => Product::all()]);
	}
	public function accept_receipt(){
		receipt::where('id_receipt',$_GET['id'])->update([
			'status_receipt'=> 'Đã xác nhận'
		]);
		$this->sendPage('admin/order_mng', ['receipt' => receipt::all()]);
	}
	public function cancel_receipt(){
		receipt::where('id_receipt',$_GET['id'])->update([
			'status_receipt'=> 'Đã hủy'
		]);
		$this->sendPage('admin/order_mng', ['receipt' => receipt::all()]);
	}
	
}