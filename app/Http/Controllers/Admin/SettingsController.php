<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function index()
	{
		$user = Auth::user();
		return view('admin.settings', compact('user'));
	}

	public function update(Request $request)
	{
		$this->validate($request, [
			'c_name' => 'required',
			'c_address' => 'required',
			'c_phone' => 'required',
			'c_email' => 'required|email',
		]);

		$user = Auth::user();
		$user->c_name = $request->c_name;
		$user->c_address = $request->c_address;
		$user->c_email = $request->c_email;
		$user->c_phone = $request->c_phone;
		$user->save();
		
		return redirect()->back();
	}
}
