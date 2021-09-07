<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Special;
use Illuminate\Http\Request;

class SpecialController extends Controller
{
    protected $folder_name = 'admin.special.';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // getting last tody special
        $special = Special::with('products')->orderByDesc('created_at')->first();
        // return $special;
       // returning last today special
         return view($this->folder_name.'special-index', ['special'=>$special, 'n'=>1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $products = Product::orderByDesc('created_at')->get();
        return view($this->folder_name.'special-create', ['products'=>$products, 'n'=>1]);
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
        $id = $request->product_id;
        if(isset($request->product_id)){
            $count = count($request->product_id);
            if($count>0){
                $special = new Special();   
                $special->save();
                for ($i=0; $i <$count ; $i++) { 
                  $product = Product::findOrFail($id[$i]);
                  $product->special_id = $special->id;
                  $product->save();
                }
            }else{
                return back()->with('error', 'Please select at least one product to create today special');
            }
        }else{
            return back()->with('error', 'Please select at least one product to create today special');
        }
        return redirect()->route('special.index')->with('success', 'Successfully New Special Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function show(Special $special)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function edit(Special $special)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Special $special)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function destroy(Special $special)
    {
        //
    }
}
