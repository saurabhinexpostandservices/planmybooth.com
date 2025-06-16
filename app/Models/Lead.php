<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
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

}
