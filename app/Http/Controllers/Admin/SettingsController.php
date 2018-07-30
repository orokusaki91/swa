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
}
