<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function getUser()
    {
        $users = User::all();
        return view( 'admin.user',compact('users') );
    }

	public function postAddUser(Request $request){
		$user = new User;
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = bcrypt('Cphone123');
		$user->level = $request->level;
		$user->save();
		return back();
	}
	public function getDeleteUser($id){
		if( $id != 1 ){
			User::destroy($id);
			return back();
		}else{
			return back()->with('error','Không thể xóa admin');
		}
	}
}
