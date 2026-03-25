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
        'show',
        'city',
        'stand_size',
        'budget',
        'service',
        'attachments',
        'message',
        'page_url',
        'ip',
        'author_id'
    ];

    protected $casts = [
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
