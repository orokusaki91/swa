<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index() {
    	$job = \App\PageContent::whereHas('page', function ($q) {
        	$q->where('slug', 'jobs');
    	})->first();
    	return view('pages.jobs', compact('job'));
    }
}
