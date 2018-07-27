<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index() {
    	$partner = \App\PageContent::whereHas('page', function ($q) {
        	$q->where('slug', 'partner');
    	})->first();
    	return view('pages.partner', compact('partner'));
    }
}
