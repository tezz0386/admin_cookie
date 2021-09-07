<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SiteRequest;
use App\Models\Site;
use App\Support\MessageSupport;
use App\Support\SiteSupport;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    protected $support;
    protected $folder_name='admin.site.';
    protected $messageSupport;
    function __construct(SiteSupport $siteSupport, MessageSupport $messageSupport)
    {
        $this->middleware('auth');
        $this->support = $siteSupport;
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
        $site = Site::find(1);
        if(!$site){
            return view($this->folder_name.'site-create')->with('success', 'Please Manage your site information at first Applied');
        }
        return view($this->folder_name.'site-index', ['site'=>$site, 'messages'=>$this->messageSupport->getOnlyNotRead(), 'n'=>1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $site = Site::find(1);
        if($site){
          return redirect()->route('site.index', ['messages'=>$this->messageSupport->getOnlyNotRead()]);
        }
         return view($this->folder_name.'site-create', ['messages'=>$this->messageSupport->getOnlyNotRead(), 'n'=>1])->with('success', 'Please Manage your site information at first Applied');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiteRequest $request)
    {
        //
        $this->support->store($request);
        return redirect()->route('site.index')->with('success', 'Successfully Site Setting Managed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(Site $site)
    {
        //
        return view($this->folder_name.'site-index', ['site'=>$site, 'messages'=>$this->messageSupport->getOnlyNotRead(), 'n'=>1]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Site $site)
    {
        //
        // return $request;
        $this->support->update($request, $site);
        return redirect()->route('site.index')->with('success', 'Successfully Site Information Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        //
    }
}
