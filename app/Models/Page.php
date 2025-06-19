<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory;
    
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

    protected $casts = [
        'markup_schema' => 'array',
    ];

    
}
