<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'subscriber_id',
        'type',
        'start_date',
        'end_date',
        'meta_data'
    ];
}
