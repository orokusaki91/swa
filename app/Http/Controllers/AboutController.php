<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
    	$page = \App\Page::where('slug', 'über-uns')->first();
    	$aboutUs = \App\PageContent::whereHas('page', function ($q) {
        	$q->where('slug', 'über-uns');
    	})->first();
    	return view('pages.about_us', compact('aboutUs', 'page'));
    }
}
