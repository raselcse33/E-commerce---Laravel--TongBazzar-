<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use App\UserRegister;
use Cart;

class UserRegisterController extends Controller
{
	public function userRegistration(Request $request)
	{
		$request->validate([
			'name'=>'required',
			'email'=>'required|email|unique:user_registers',
			'password'=>'required',

		]);

		$userRegister = new UserRegister;
		$userRegister->name = $request->name;
		$userRegister->email = $request->email;
		$userRegister->password = Hash::make($request['password']);
		$userRegister->save();
		Session::flash('success', 'Registration Successfully and login please');
		return redirect()->back();
	}


	public function userLogin(Request $request)
	{

		$email = $request->email;
		$password = $request->password;

		$result = UserRegister::where('email',$email)->first();
		if($result){
			$registerName = $result->name;
			$registerEmail = $result->email;
			$registerId = $result->id;
			$registerPassword = $result->password;
			
			if(password_verify($password, $registerPassword)){

				Session::put('name', $registerName);
				Session::put('email', $registerEmail);
				Session::put('id', $registerId);
				Session::flash('success', 'Registration Successfully');
				return redirect()->route('shopHome');

			}else{
				Session::flash('error', 'Email Or name wrong');
				return redirect()->back();
			}
		}else{
			Session::flash('error', 'Email Or name wrong');
				return redirect()->back();
		}

	}

	public function logout(){
		Session::flush();
		Cart::destroy();
		Session::flash('success', 'Logout Successfully');
		return redirect()->route('shopHome');
	}


	public function userList()
	{
		$data['users'] = UserRegister::paginate(10);
		return view('admin.user.user_list',$data);
	}

	public function detailsUser($id)
	{
		$data['user'] = @UserRegister::find($id);
		return view('admin.user.user_details',$data);
	}
}
