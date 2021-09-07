<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageUpdateRequest;
use App\Models\Page;
use Cviebrock\EloquentSluggable\Services\SlugService;


class PageController extends Controller
{
    protected $folder_name = 'admin.page.';
    function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pages = Page::orderByDesc('created_at')->get();
        return view($this->folder_name.'page-index', ['pages'=>$pages, 'n'=>1]);
    }

    public function edit(Page $page)
    {
        //
        // $pages = Page::findOrFail($id);
        // return $page;
        return view($this->folder_name.'page-update', ['page'=>$page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function update(PageUpdateRequest $request, Page $page)
    {
        //
        $page->fill($request->all());
        $page->slug = SlugService::createSlug(Page::class, 'slug', $page->title_tag);
        if($page->save()){
            return redirect()->route('page.index')->with('success', 'Successfully 1 Record Updated');
        }else{
            return back()->withInput()->with('error', 'Clould not update please try again');
        }
    }


    public function testSlug(Request $required)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $toSlug);
        return response()->json(['slug'=>$slug]);
    }
}
