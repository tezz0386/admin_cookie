<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use App\Support\SiteSupport;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    protected $folder_name = 'admin.site.banner.';
    protected $support;
    function __construct(SiteSupport $siteSupport)
    {
        $this->middleware('auth');
        $this->support = $siteSupport;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $banners = Banner::orderByDesc('created_at')->get();
        return view($this->folder_name.'banner-index', ['banners'=>$banners, 'n'=>1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view($this->folder_name.'banner-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request)
    {
        //
        $this->support->storeBanner($request);
        return redirect()->route('banner.index')->with('success', 'Successfully 1 banner has created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(banner $banner)
    {
        //
        return view($this->folder_name.'banner-update', ['banner'=>$banner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, banner $banner)
    {
        //
        $this->support->updateBanner($request, $banner);
        return redirect()->route('banner.index')->with('success', 'Successfully 1 Banner has Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(banner $banner)
    {
        //
        $this->support->bannerDelete($banner);
        return redirect()->route('banner.index')->with('success', 'Successfully 1 Bannes has deleted');
    }
}
