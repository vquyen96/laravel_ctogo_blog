<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
	use AuthenticatesUsers;

	protected $redirectTo = '/admin/home';

	public function getLogin()
	{
		return view('admin.auth.login');
	}

}
