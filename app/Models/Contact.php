<?php

namespace App\Models;

use App\Models\Site;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable=[
        'contact',
        'email',
        'facebook_link',
        'twiter_link',
        'insta_link',
        'site_id',
    ];

    public function site()
    {
        return $this->belongsTo(Site::class, 'site_id');
    }
}
