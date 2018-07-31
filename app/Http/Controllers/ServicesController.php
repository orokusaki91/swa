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
        $page = \App\Page::where('slug', $slug)->first();
    	$services = \App\PageContent::whereHas('page', function ($q) use ($slug) {
        	$q->where('slug', $slug);
    	})->get();


    	return view('pages.sub_services', compact('services', 'page'));
    }
}
