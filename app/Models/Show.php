<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable = [
        'meta_title',
        'meta_description',
        'markup_schema',
        'slug',
        'logo',
        'title',
        'content',
        'status',
        'country_id',
        'city_id',
        'start_date',
        'end_date',
        'industry',
        'website',
        'author_id'
    ];
}
