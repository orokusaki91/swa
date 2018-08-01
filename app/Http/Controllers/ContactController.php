<?php

namespace App\Http\Controllers;

use Mail;
use Session;
use Validator;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
    	$contact = \App\PageContent::whereHas('page', function ($q) {
        	$q->where('slug', 'kontakt');
    	})->first();
    	return view('pages.contact', compact('contact'));
    }

    public function post(Request $request) {
    	$validator = Validator::make($request->all(), [
            'name' => 'required|max:190',
            'email' => 'required|email|max:190',
            'phone' => 'required|max:190',
            'company_name' => 'required|max:190',
            'message' => 'required',
        ], [
            'required' => 'Dieses Feld ist erforderlich',
            'email' => 'Bitte geben Sie eine gültige Emailadresse ein',
            'max' => 'Dieses Feld darf nicht mehr als 190 Zeichen beinhalten',
        ]);

        if ($validator->passes()) {
            try {
	            Mail::to('disabledbyfb@gmail.com')->send(new ContactMail($request));
	        	Session::flash('success', 'Vielen Dank für Ihre Nachricht. Wir melden uns innert 48 Stunden bei Ihnen.');
	        } catch (Exception $e) {
	            Session::flash('error', 'Etwas ist schief gelaufen. Bitte versuchen Sie es erneut.');
                return response()->json([
                    'status' => false
                ]);
	        }

        	return response()->json([
	        	'status' => true
	        ]);
        } else {
    	    return response()->json([
                'errors' => $validator->getMessageBag()->toArray()
            ]);
        }
    }
}
