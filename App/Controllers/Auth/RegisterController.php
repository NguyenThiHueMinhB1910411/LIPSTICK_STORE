<?php

namespace App\Controllers\Auth;

use App\Models\account;
use App\Models\users;
use App\Models\cart;
use App\Controllers\Controller;
use App\SessionGuard as Guard;

class RegisterController extends Controller
{
	public function __construct()
	{
		if (Guard::isUserLoggedIn()) {
			redirect('/home');
		}
		parent::__construct();
	}

	public function showRegisterForm()
	{
		$this->sendPage('auth/register');
	}

	public function register()
	{

		$data = $this->filterUserData($_POST);
		$model_errors = account::validate($data);
		if (empty($model_errors)) {
			// Dữ liệu hợp lệ...
			$this->createUser($data);
		}

		// Dữ liệu không hợp lệ...
		$this->sendPage('auth/register', ['errors' => $model_errors]);
	}

	protected function filterUserData(array $data)
	{
		return [
			'username' => $data['username'] ?? null,
			'phone' => $data['phone'] ?? null,
			'email' => filter_var($data['email'], FILTER_VALIDATE_EMAIL),
			'password' => $data['pwd'] ?? null,
			'password_confirmation' => $data['cpwd'] ?? null

		];
	}

	protected function createUser($data)
	{
		account::create([
			'email' => $data['email'],
			'password' => $data['password']
		]);
		$user = users::create([
			'username' => $data['username'],
			'phone' => $data['phone'],
			'email' => $data['email']
		]);
		cart::create([
			'id' => $user->id
		]);
		redirect('/login');
	}
}