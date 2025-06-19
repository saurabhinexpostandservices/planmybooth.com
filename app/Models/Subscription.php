<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subscription extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'subscriber_id',
        'type',
        'start_date',
        'end_date',
        'meta_data'
    ];

    protected $casts = [
        'meta_data' => 'array',
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

}
