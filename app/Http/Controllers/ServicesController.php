<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index() {
    	$service = \App\PageContent::whereHas('page', function ($q) {
        	$q->where('slug', 'services');
    	})->first();
    	return view('pages.services', compact('service'));
    }

    public function getService($slug)
    {
    	$slug = getServiceLinks()[$slug];

    	$service = \App\PageContent::whereHas('page', function ($q) use ($slug) {
        	$q->where('slug', $slug);
    	})->first();

    	return view('pages.' . $slug, compact('service'));
    }
}
