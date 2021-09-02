<?php

namespace App\Models;

use App\Models\SubCategory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
	use Sluggable;
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
    		'title',
    		'description',
    		'slug',
    		'image',
            'has_child',
            'title_tag',
            'meta_keywords',
            'meta_description',
    ];


    public function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'parent_id');
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
