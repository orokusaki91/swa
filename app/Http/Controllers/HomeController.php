<?php

namespace App\Http\Controllers;

use App\PageContent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$page = \App\Page::where('slug', 'home')->first();
    	$home = PageContent::whereHas('page', function ($q) {
        	$q->where('slug', 'home');
    	})->first();
    	return view('index', compact('home', 'page'));
    }
}
