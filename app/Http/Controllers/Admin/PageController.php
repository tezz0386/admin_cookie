<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageUpdateRequest;
use App\Models\Page;
use App\Support\MessageSupport;
use Cviebrock\EloquentSluggable\Services\SlugService;


class PageController extends Controller
{
    protected $folder_name = 'admin.page.';
    protected $messageSupport;
    function __construct(MessageSupport $messageSupport)
    {
        $this->middleware('auth');
        $this->messageSupport = $messageSupport;
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
        return view($this->folder_name.'page-index', ['pages'=>$pages, 'n'=>1, 'messages'=>$this->messageSupport->getOnlyNotRead()]);
    }

    public function edit(Page $page)
    {
        //
        // $pages = Page::findOrFail($id);
        // return $page;
        return view($this->folder_name.'page-update', ['page'=>$page, 'messages'=>$this->messageSupport->getOnlyNotRead(), 'n'=>1]);
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
