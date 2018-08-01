<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use App\Image;
use App\PageContent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PartnerReferencesController extends Controller
{
    public function createPartner($slug)
    {
        $page = Page::where('slug', $slug)->first();
        return view('admin.partner_new', compact('page'));
    }

    public function storePartner(Request $request, $slug)
    {
        $partnersCount = PageContent::where('page_id', 4)->count();
        $page = Page::where('slug', $slug)->first();

        // if ($servicesCount >= 5) {
        //     return redirect()->action('AdminController@getPage', ['page_slug' => $slug])->with('error', 'Sie haben die max. Anzahl erlaubten Seiten erreicht.');
        // }

        $pageContent = new PageContent;
        $pageContent->page_id = $page->id;
        $pageContent->title = $request->title_1;
        $pageContent->text = $request->url_1;
        $pageContent->save();

        $image = uploadImage($request->image_1, 'public/uploads/' . $slug, $pageContent);

        return redirect()->action('Admin\PagesController@getPage', ['page_slug' => $slug]);
    }

    public function editPartner($slug, $page_content_id)
    {
        $page = Page::where('slug', $slug)->first();
        $partner = PageContent::findOrFail($page_content_id);

        return view('admin.partner_edit', compact('pages', 'page', 'partner'));
    }

    public function updatePartner(Request $request, $slug, $page_content_id)
    {
        $pageContent = PageContent::findOrFail($page_content_id);
        $pageContent->title = $request->title_1;
        $pageContent->text = $request->url_1;
        $pageContent->save();

        $image = uploadImage($request->image_1, 'public/uploads/' . $slug, $pageContent);

        return redirect()->action('Admin\PagesController@getPage', ['page_slug' => $slug]);
    }

    public function deletePartner(Request $request, $slug, $page_content_id)
    {
        $partner = PageContent::findOrFail($page_content_id);
        $image = $partner->images()->first();

        if (Storage::has('public/uploads/' . $slug . '/' . $image->path)) {
            Storage::delete('public/uploads/' . $slug . '/' . $image->path);
        }
        
        $partner->delete();
        $image->delete();

        return redirect()->action('Admin\PagesController@getPage', ['page_slug' => $slug]);
    }
}
