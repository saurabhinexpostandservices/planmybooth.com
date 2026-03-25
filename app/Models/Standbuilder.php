<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Country;
use App\Models\City;

class Standbuilder extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'title',
        'description',
        'founded_year',
        'country_id',
        'city_id',
        'website',
        'email',
        'vat_number',
        'phone',
        'logo',

        // --- Ye 5 lines add kardo ---
        'instagram',
        'facebook',
        'pinterest',
        'linkedin',
        'twitter',
        // ----------------------------

        'gallery',
        'video',
        'cover_image',
        'services',
        'services_cities',
        'priorty',
        'status',
        'author_id',
    ];

    protected $casts = [
        'services' => 'array',
        'services_continents' => 'array',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

}
