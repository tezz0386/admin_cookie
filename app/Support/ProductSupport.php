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

	// to store product data
	public function store($data)
	{
		$product = new Product();
		$product->title=$data->title;
		$product->description=$data->description;
		$product->price = $data->price;
		$product->slug = $this->categorySupport->getSlug($data->title);
		if($data->check==true)
		{
			$product->child_id = $data->parent_id;
		}else{
			$product->parent_id = $data->parent_id;	
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
	// to update product data
	public function update($data, $product)
	{
        if(!$data->parent_id == '')
        {
           if($data->check==true)
          {
              $product->child_id = $data->parent_id;
              $product->parent_id = null;
          }else{
              $product->parent_id = $data->parent_id; 
              $product->child_id = null;
          }
        }
		if($data->file('image')==''){

		}else{
			$this->imageSupport->deleteImg($this->folder_name, $product->image);
			$image = $this->imageSupport->saveAnyImg($data, $this->folder_name, 'image', $this->width, $this->height);
			$product->image = $image;
		}
		$product->title=$data->title;
		$product->description=$data->description;
		$product->price = $data->price;
		$product->slug = $this->categorySupport->getSlug($data->title);
		if($product->save())
		{
			return true;
		}else{
			return false;
		}
	}
	// for delete product and image
	public function delete($data)
	{
		$this->imageSupport->deleteImg($this->folder_name, $data->image);
		if($data->forceDelete())
		{
			return true;
		}else{
			return false;
		}
	}



}


 ?>