<?php

namespace App\Models;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;
    protected $fillable=[
        'message',
        'logo',
        'address',
        'footer_quoation',
        'location',
        'md_profile',
    ];
    public function contacts()
    {
        $this->hasMany(Contact::class, 'site_id', 'logo', );
    }
}
