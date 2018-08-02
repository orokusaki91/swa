<?php

namespace App\Http\Controllers\Admin;

use App\SocialMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialMediaController extends Controller
{
    public function index()
	{
		$socialMedias = SocialMedia::all();
		return view('admin.social_media', compact('socialMedias'));
	}

	public function update(Request $request)
	{
		$this->validate($request, [
			'url.*' => 'required|url',
		]);

		$inputs = array_except($request->input(), ['_token', '_method']);

        foreach($inputs as $field => $values) {
            foreach ($values as $id => $value) {
            	$socialMedia = SocialMedia::find($id);
            	$socialMedia->$field = $value;
            	$socialMedia->save();
            }
        }
		
		return redirect()->back();
	}
}
