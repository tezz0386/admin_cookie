<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Support\CategorySupport;
use App\Support\ProductSupport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function store(ProductRequest $request)
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
        return view($this->folder_name.'product-show', ['product'=>$product]);
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
        return view($this->folder_name.'product-update', ['product'=>$product, 'categories'=>$this->categorySupport->getAll()]);
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
        // if($request->file('image')=='')
        // {
        //     return "Empty";
        // }else{
        //     return "full";
        // }
        $validator = Validator::make($request->all(), [
            'title'=>'required|unique:products,title,'.$product->id,
        ], 
        $message=[
            'title.required'=>'The Title Field could not be empty',
            'title.unique'=>'The Title must be unique, if not exist on active list then refer to the trashed list',
        ]);
        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $this->support->update($request, $product);
        return redirect()->route('product.index')->with('success', 'Successfully 1 product Updated');
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
       if($product->delete()){
        return redirect()->route('product.index')->with('success', 'Successfully 1 Record Deleted');
       }else{
        return back()->with('error', 'Could not deleted please try again later');
       }
    }

    public function getTrash()
    {
        $products = Product::onlyTrashed()->orderByDesc('deleted_at')->get();
        return view($this->folder_name.'product-trash-index', ['products'=>$products, 'n'=>1]);
    }
    public function restore($id)
    {
        $product = Product::onlyTrashed()->where('id', $id)->first();
        if($product->restore())
        {
            return redirect()->route('product.index')->with('success', 'Successfully 1 Product Restores');
        }
    }
    public function delete($id)
    {
        $product = Product::onlyTrashed()->where('id', $id)->first();
        $this->support->delete($product);
        return redirect()->route('product.getTrash')->with('success', 'Succesfuly 1 Product from Trash Permanently Deleted');
    }
}
