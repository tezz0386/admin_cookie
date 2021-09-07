<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use App\Support\CategorySupport;
use App\Support\MessageSupport;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    protected $category;
    protected $categories;
    protected $categorySupport;
    protected $messageSupport;
    function __construct(CategorySupport $categorySupport, MessageSupport $messageSupport)
    {
    	$this->middleware('auth');
    	$this->category = new Category();
    	$this->categorySupport = $categorySupport;
        $this->messageSupport = $messageSupport;
    }
    public function index()
    {
    	// index goes here
    	$this->categories = $this->categorySupport->getAll();
    	return view('admin.category-index', ['categories'=>$this->categories, 'n'=>1, 'messages'=>$this->messageSupport->getOnlyNotRead()]);
    }
    public function create()
    {
    	// category creation goes here
    	return view('admin.category-create', ['messages'=>$this->messageSupport->getOnlyNotRead(), 'n'=>1]);
    }
    public function store(CategoryRequest $request)
    {
    	$this->categorySupport->store($request);
    	return redirect()->route('admin.category.index')->with('success', 'Successfully Added');
    }
    public function edit(Category $category)
    {
    	return view('admin.category-update', ['category'=>$category]);
    }
    public function update(CategoryUpdateRequest $request, Category $category)
    {
    	// update code goes here
    	// dd($request);
    	$this->categorySupport->update($request, $category);
    	return redirect()->route('admin.category.index')->with('success', '1 record Successfuly updated');

    }
    public function destroy(Category $category)
    {
    	// destroy code goes here;
    	$category->delete();
        $category->subCategories()->delete();
    	return redirect()->route('admin.category.index')->with('success', '1 record Successfuly Deleted You can Restore from the trash');
    }
    // to get trash
    public function getTrash()
    {
    	return view('admin.category-trash-index', ['categories'=>$this->categorySupport->getTrash(), 'n'=>1, 'messages'=>$this->messageSupport->getOnlyNotRead()]);
    }

    // to restore
    public function restore(Request $request, $id)
    {
    	$this->categorySupport->restore($id);
    	return redirect()->route('admin.category.index')->with('success', 'Successfully Restored');
    }
    // for view detail of category including the included sub category
    public function details(Category $category)
    {
        return view('admin.category-show-details', ['category'=>$category, 'n'=>1, 'messages'=>$this->messageSupport->getOnlyNotRead()]);
    }
}
