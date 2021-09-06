<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUsRequest;
use App\Models\AboutUs;
use App\Support\SiteSupport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AboutUsController extends Controller
{
    protected $support;
    protected $folder_name = 'admin.site.about.';
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
        $abouts = $this->support->getAbouts();
        return view($this->folder_name.'about-index', ['abouts'=>$abouts, 'n'=>1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $site = $this->support->getSite();
        return view($this->folder_name.'about-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutUsRequest $request)
    {
        //
        $this->support->storeAbout($request);
        return redirect()->route('about.index')->with('success', 'Successfully 1 Record Added');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutUs $aboutUs, $id)
    {
        //
        $aboutUs = AboutUs::findOrFail($id);
        return view($this->folder_name.'about-update', ['aboutUs'=>$aboutUs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutUs $aboutUs, $id)
    {
        //
        $aboutUs = AboutUs::findOrFail($id);
         $validator = Validator::make($request->all(), [
            'heading'=>'required|unique:about_us,heading,'.$aboutUs->id,
            'description'=>'required',
            'image'=>'mimes:jpg,jpeg,png',
        ], 
        $message=[
            'heading.required'=>'The HEading Field Could not be empty',
            'heading.unique'=>'The Heading has already taken so please tray another',
            'description.rewuired'=>'Description Field Could not be empty',
            'image.mimes'=>'The Image type must be jpg, jpeg, or png',
        ]);
        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $this->support->updateAbout($request, $aboutUs);
        return redirect()->route('about.index')->with('success', 'Successfully 1 Record Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutUs $aboutUs, $id)
    {
        //
        $aboutUs = AboutUs::findOrFail($id);
        $this->support->deleteAbout($aboutUs);
        return redirect()->route('about.index')->with('success', 'Successfully 1 record Deleted');
    }
}
