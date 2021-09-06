<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Special extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =[
    	'special_title',
    ];

    // public function product()
    // {
    // 	return $this->belongsToMany(Product::class, 'product_id');
    // }


}
