<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryRequest;
use App\Http\Requests\SubCategoryUpdateRequest;
use App\Models\Category;
use App\Models\SubCategory;
use App\Support\CategorySupport;
use App\Support\MessageSupport;
use App\Support\SubCategorySupport;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    protected $support;
    protected $categorySupport;
    protected $messageSupport;
    function __construct(SubCategorySupport $subCategorySupport, CategorySupport $categorySupport, MessageSupport $messageSupport)
    {
        $this->middleware('auth');
        $this->support = $subCategorySupport;
        $this->categorySupport=$categorySupport;
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
        return view('admin.subcategory-index', ['subcategories'=>$this->support->getAll(), 'n'=>1, 'messages'=>$this->messageSupport->getOnlyNotRead()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
        //
        return view('admin.subcategory-create', ['category'=>$category, 'categories'=>$this->categorySupport->getAll(), 'messages'=>$this->messageSupport->getOnlyNotRead(), 'n'=>1]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubCategoryRequest $request, Category $category)
    {
        //
        $this->support->store($request, $category);
        return redirect()->route('admin.subcategory.index')->with('success', 'Successfully 1 Recorded Added');
    }
    public function storeAgain(SubCategoryRequest $request)
    {
        //
        $category = Category::findOrFail($request->parent_id);
        $this->support->store($request, $category);
        return redirect()->route('admin.subcategory.index')->with('success', 'Successfully 1 Recorded Added');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
        return view('admin.subcategory-show', ['subcategory'=>$subCategory, 'messages'=>$this->messageSupport->getOnlyNotRead(), 'n'=>1]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        // to return a view with subcategory

        return view('admin.subcategory-update', ['category'=>$this->categorySupport->getParticular($subCategory->parent_id), 'categories'=>$this->categorySupport->getAll(), 'subcategory'=>$subCategory, 'messages'=>$this->messageSupport->getOnlyNotRead(), 'n'=>1]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(SubCategoryUpdateRequest $request, SubCategory $subCategory)
    {
        //
        $this->support->update($request, $subCategory);
        return redirect()->route('admin.subcategory.index')->with('success', 'Successfully 1 record updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        //
        if($subCategory->delete()){
            return redirect()->route('admin.subcategory.index')->with('success', 'Successfully 1 record deleted');
        }else{
            return back()->with('error', 'could not be deleted please try again later');
        }
    }
    public function getTrash()
    {
        return view('admin.subcategory-trash-index', ['categories'=>$this->support->getTrash(), 'n'=>1, 'messages'=>$this->messageSupport->getOnlyNotRead()]);
    }
    public function restore($id)
    {
        $this->support->restore($id);
        return redirect()->route('admin.subcategory.index')->with('success', 'Successfully 1 record restored');
    }
}
