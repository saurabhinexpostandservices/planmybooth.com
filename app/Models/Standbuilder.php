<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Standbuilder extends Model
{
    protected $fillable = [
        'username',
        'title',
        'description',
        'founded_year',
        'country_id',
        'city_id',
        'website',
        'email',
        'phone',
        'logo',
        'cover_image',
        'services',
        'services_continents',
        'priorty',
        'status',
        'author_id'
    ];
}
