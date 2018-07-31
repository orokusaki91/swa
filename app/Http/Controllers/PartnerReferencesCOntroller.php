<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerReferencesCOntroller extends Controller
{
    public function index() {
    	$slug = \Request::is('partner') ? 'partner' : 'referenzen';
    	$page = \App\Page::where('slug', $slug)->first();
    	$partner = \App\PageContent::whereHas('page', function ($q) use ($slug) {
        	$q->where('slug', $slug);
    	})->first();
    	return view('pages.partner', compact('partner', 'page'));
    }
}
