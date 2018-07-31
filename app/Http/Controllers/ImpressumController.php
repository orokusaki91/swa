<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImpressumController extends Controller
{
    public function index() {
    	$impressum = \App\PageContent::whereHas('page', function ($q) {
        	$q->where('slug', 'impressum');
    	})->first();
    	return view('pages.impressum', compact('impressum'));
    }
}
