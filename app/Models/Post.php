<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
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
        'author_id'
    ];
}
