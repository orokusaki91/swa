<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferencesController extends Controller
{
    public function index() {
    	$reference = \App\PageContent::whereHas('page', function ($q) {
        	$q->where('slug', 'references');
    	})->first();
    	return view('pages.references', compact('reference'));
    }
}
