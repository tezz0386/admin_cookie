<?php

namespace App\Support;

use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
/**
 * 
 */
class CategorySupport 
{
	protected $slug;
	function __construct()
	{
		# code...
	}
	public function getAll()
	{
		return $this->categories();
	}
	public function getParticular($id)
	{
		return Category::findOrFail($id);
	}
	public function store($data)
	{
		$category = new Category();
		$category->fill($data->all());
		$category->slug=$this->getSlug($data->title);
		if($category->save()){
			return true;
		}else{
			return false;
		}
	}
	public function update($data, $category)
	{
		$category->fill($data->all());
		if(!isset($data->has_child))
		{
			$category->has_child = false;
		}
		$category->slug=$this->getSlug($data->title);
		if($category->save()){
			return true;
		}else{
			return false;
		}
	}
	public function getTrash()
	{
		return Category::onlyTrashed()->limit(15)->get();
	}
	public function restore($id)
	{
		$category=Category::withTrashed()->where('id', $id)->first();
		if($category->restore()){
			$category->subCategories()->restore();
			return true;
		}else{
			return false;
		}
	}
	public function categories()
	{
		return Category::orderByDesc('created_at')->limit(15)->get();
	}
	public function getSlug($toSlug)
	{
		$this->slug = SlugService::createSlug(Category::class, 'slug', $toSlug);
	}
}
?>