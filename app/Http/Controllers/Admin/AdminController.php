<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\User;

class AdminController extends Controller
{
	public function getLogOut()
	{
		if( Auth::check() ) Auth::logout();

		return redirect('login');
	}

    public function getBlank()
    {
    	return redirect('admin/home');
    }

    public function getHome()
    {
    	return view('admin.home');
    }
}
