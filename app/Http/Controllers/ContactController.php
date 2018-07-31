<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
    	$contact = \App\PageContent::whereHas('page', function ($q) {
        	$q->where('slug', 'kontakt');
    	})->first();
    	return view('pages.contact', compact('contact'));
    }
}
