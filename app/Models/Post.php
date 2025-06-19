<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
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
        'author_id'
    ];

    protected $casts = [
        'markup_schema' => 'array',
    ];

}
