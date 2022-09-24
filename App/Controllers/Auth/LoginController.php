<?php

namespace App\Controllers\Auth;

use App\Models\users;
use App\Controllers\Controller;
use App\Models\account;
use App\SessionGuard as Guard;

class LoginController extends Controller
{
	public function showLoginForm()
	{
		if (Guard::isUserLoggedIn()) {
			redirect('/home');
		}
		$this->sendPage('auth/login');
	}

	public function login()
	{
		$user_credentials = $this->filterUserCredentials($_POST);
		$errors = [];
		$user = account::where('email', $user_credentials['email'])->first();
		if (!$user) {
			// Người dùng không tồn tại...
			$errors['email'] = 'Invalid email';
		} else if (Guard::login($user, $user_credentials)) {
			if($user_credentials['email'] == 'admin@gmail.com'){
				redirect('/admin');
			}
			// Đăng nhập thành công...
			else{redirect('/home');}
		} 
		else {
			// Sai mật khẩu...
			$errors['password'] = 'Invalid password';
		}
		$this->sendPage('/auth/login', ['errors' => $errors]);
	}

	public function logout()
	{
		Guard::logout();
		redirect('/login');
	}

	protected function filterUserCredentials(array $data)
	{
		return [
			'email' => filter_var($data['email'], FILTER_VALIDATE_EMAIL),
			'password' => $data['password'] ?? null
		];
	}
}