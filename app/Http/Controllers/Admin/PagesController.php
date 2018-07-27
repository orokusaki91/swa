<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use App\PageCode;
use App\PageContent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}

	public function getPage($page_slug)
    {
    	$page = Page::where('slug', $page_slug)->first();
    	$pageContents = PageContent::where('page_id', $page->id)->get()->toArray();

    	return view('admin.' . $page_slug, compact('page', 'page_slug', 'pageContents'));
    }

    public function updatePage(Request $request)
    {
    	$pageContents = PageContent::where('page_id', $request->page_id)->get();
        $slug = Page::where('id', $request->page_id)->value('slug');

    	foreach ($pageContents as $key => $pageContent) {
    		$key = $key+1;
    		$title = 'title_' . $key;
    		$image = 'image_' . $key;
    		$image = uploadImage($request->$image, 'public/uploads/' . $slug);
    		$text = 'text_' . $key;
    		$pageContentUpdate = PageContent::findOrFail($pageContent->id);
    		$pageContentUpdate->title = $request->$title;
    		$pageContentUpdate->image = $image ? $image : $pageContentUpdate->image;
    		$pageContentUpdate->text = $request->$text;
    		$pageContentUpdate->save();
    	}

    	return redirect()->action('Admin\PagesController@getPage', ['page' => $slug]);
    }
}
