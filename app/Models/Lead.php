<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Show;
use App\Models\City;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'show_id',
        'city_id',
        'stand_size',
        'stand_size_measurement_unit',
        'services',
        'price_range',
        'design_attachments',
        'require_elements',
        'employee_onsite_avilable',
        'author_id'
    ];

    protected $casts = [
        'price_range' => 'array',
        'design_attachments' => 'array',
        'require_elements' => 'array',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function show()
    {
        return $this->belongsTo(Show::class);
    }
}
