<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Support\CategorySupport;
use App\Support\ProductSupport;
use Illuminate\Http\Request;

class ProductController extends Controller
{
	protected $folder_name = 'admin.product.';
	protected $support;
	protected $categorySupport;
	function __construct(ProductSupport $support)
	{
		$this->middleware('auth');
		$this->support=$support;
		$this->categorySupport = new CategorySupport();
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view($this->folder_name.'product-index', ['products'=>$this->support->getAll(), 'n'=>1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view($this->folder_name.'product-create', ['categories'=>$this->categorySupport->getAll()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return $request;
        if($this->support->store($request))
        {
        	return redirect()->route('product.index')->with('success', 'Successfully 1 Product Added');
        }else{
        	return back()->withInput()->with('error', 'Could not be added please try again later');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
