<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
