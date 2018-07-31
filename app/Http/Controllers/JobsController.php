<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index() {
    	$page = \App\Page::where('slug', 'job')->first();
    	$job = \App\PageContent::whereHas('page', function ($q) {
        	$q->where('slug', 'jobs');
    	})->first();
    	return view('pages.jobs', compact('job', 'page'));
    }
}
