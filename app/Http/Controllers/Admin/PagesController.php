<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use App\Image;
use App\PageCode;
use App\PageContent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}

	public function getPage($page_slug)
    {
    	$page = Page::where('slug', $page_slug)->first();
    	$pageContents = PageContent::where('page_id', $page->id)->get();
        $pageContent = $pageContents->first();

        if ($pageContent) {
            $page_slug = $pageContents[0]['page_code_id'] == 1 ? 'dienstleinstungen' : $page_slug;
        }

        $page_slug = $page_slug == 'referenzen' ? 'partner' : $page_slug;

        return view('admin.' . $page_slug, compact('page', 'page_slug', 'pageContents', 'pageContent'));
    }

    public function updatePage(Request $request)
    {
    	$pageContents = PageContent::where('page_id', $request->page_id)->get();
        $page = Page::where('id', $request->page_id)->first();
        $slug = $page->slug;

        if ($slug == 'über-uns' || $slug == 'referenzen' || $slug == 'partner') {
            $pageContent = PageContent::where('page_id', $page->id)->first();
            $pageContent->text = $request->text;
            $pageContent->save();

            $image = uploadImage($request->images, 'public/uploads/' . $slug, $pageContent);
        } else {
            foreach ($pageContents as $key => $pageContent) {
                $key = $key+1;
                $title = 'title_' . $key;
                $image = 'image_' . $key;
                $header_text = 'header_text_' . $key;
                $text = 'text_' . $key;
                $pageContent = PageContent::findOrFail($pageContent->id);
                $pageContent->title = $request->$title;
                $pageContent->text = $request->$text;
                $pageContent->header_text = $request->$header_text;
                $pageContent->save();

                $image = uploadImage($request->$image, 'public/uploads/' . $slug, $pageContent);
            }
        }

        if (isset($pageContents) && $pageContents[0]->page_code_id == 1) {
            $page->name = $request->page_name;
            $page->slug = null;
            $page->save();
        }

    	return redirect()->action('Admin\PagesController@getPage', ['page' => $page->slug]);
    }


    public function deleteImage(Request $request){
        $media_id = $request->media_id;
        $media = Image::findOrFail($media_id);
        $page = Page::findOrFail($request->page_id);

        $storage = Storage::disk($media->storage);
        if ($storage->has('uploads/' . $page->slug . '/' . $media->path)) {
            $storage->delete('uploads/' . $page->slug . '/' . $media->path);
        }

        $media->delete();
        return ['success'=>1, 'msg'=>trans('app.media_deleted_msg')];
    }
}
