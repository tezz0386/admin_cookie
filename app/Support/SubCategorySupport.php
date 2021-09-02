<?php

namespace App\Support;

use App\Models\SubCategory;
use App\Support\CategorySupport;

class SubCategorySupport 
{
	protected $parentSupport;

	function __construct(CategorySupport $parentSupport)
	{
		$this->parentSupport = $parentSupport;
	}

	public function getAll()
	{
		return SubCategory::orderByDesc('created_at')->limit(15)->get();
	}
	public function store($data, $category)
	{
		$subCategory = new SubCategory();
		$subCategory->fill($data->all());
		// getting slug fro other class
		$slug = $this->parentSupport->getSlug($data->title);
		$subCategory->slug = $slug;
		// saving data with relationship
		$category->subCategories()->save($subCategory);
		return true;
	}

	public function update($data, $subCategory)
	{
		$subCategory->fill($data->all());
		// getting slug from other class
		$slug = $this->parentSupport->getSlug($data->title);
		$subCategory->slug = $slug;
		// saving data with relationship
		$category = $this->parentSupport->getParticular($data->parent_id);
		$category->subCategories()->save($subCategory);
		return true;
	}
   // to get trash file
	public function getTrash()
	{
		return SubCategory::onlyTrashed()->limit(15)->get();
	}

    // to restore the deleted data
	public function restore($id)
	{
		$subCategory = SubCategory::withTrashed()->where('id', $id);
		if($subCategory->restore()){
			return true;
		}else{
			return false;
		}
	}


}
?>