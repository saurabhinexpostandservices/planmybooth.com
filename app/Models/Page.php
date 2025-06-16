<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'meta_title',
        'meta_description',
        'markup_schema',
        'slug',
        'featured_image',
        'title',
        'content',
        'status',
        'type',
        'country_id',
        'city_id',
        'author_id'
    ];
    
}
