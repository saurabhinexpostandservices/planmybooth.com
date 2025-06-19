<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'author_id',
        'continent_id',
        'name'
    ];
}
