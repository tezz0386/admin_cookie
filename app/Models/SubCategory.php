<?php

namespace App\Models;

use App\Models\Category;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Sluggable; 
    protected $fillable=[
    	'title',
    	'description',
    	'image',
    	'parent_id',
        'title_tag',
        'meta_keywords',
        'meta_description',
    ];

    public function category()
    {
    	return $this->belongsTo(Category::class, 'parent_id');
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
