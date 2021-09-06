<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Special;
use App\Models\SubCategory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Sluggable;
    protected $fillable =[
        'parent_id',
        'title', 
        'description',
        'slug',
        'child_id',
        'image',
        'price',
        'special_id',
    ];

    // public function specials()
    // {
    //      return $this->belongsToMany(Sepcial::class, 'special_id');
    // }

    
    public function category()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'child_id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


}
