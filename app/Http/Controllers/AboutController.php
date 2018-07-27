<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
    	$about_is = \App\PageContent::whereHas('page', function ($q) {
        	$q->where('slug', 'about_us');
    	})->first();
    	return view('pages.about_us', compact('about_is'));
    }
}
