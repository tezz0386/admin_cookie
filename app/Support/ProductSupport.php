<?php 

namespace App\Support;

use App\Models\Product;
use App\Support\CategorySupport;
use App\Support\ImageSupport;
class ProductSupport
{
	protected $imageSupport;
	protected $width=425;
	protected $height=307;
	protected $folder_name = 'product';
	protected $categorySupport;
	function __construct(ImageSupport $imageSupport, CategorySupport $categorySupport)
	{
		$this->imageSupport = $imageSupport;
		$this->categorySupport = $categorySupport;
	}
	// returning all products
	public function getAll()
	{
		return Product::orderByDesc('updated_at')->get();
	}
	// returning products with pagination or limit
	public function getWithLimit($count)
	{
		return Product::orderByDesc('crerate_at')->limit($count)->get();
	}
	public function store($data)
	{
		$product = new Product();
		$product->title=$data->title;
		$product->description=$data->description;
		$product->slug = $this->categorySupport->getSlug($data->title);
		if($data->check=false)
		{
			$product->parent_id = $data->parent_id;
		}else{
			$product->child_id = $data->parent_id;	
		}
		$image = $this->imageSupport->saveAnyImg($data, $this->folder_name, 'image', $this->width, $this->height);
		$product->image = $image;
		if($product->save())
		{
			return true;
		}else{
			return false;
		}
	}
}


 ?>