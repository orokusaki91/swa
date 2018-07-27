<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$home = App\PageContent::whereHas('page', function ($q) {
        	$q->where('slug', 'home');
    	})->first();
    	return view('index', compact('home'));
    }
}
