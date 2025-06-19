<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Show extends Model
{
    use HasFactory;
    
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

    protected $casts = [
        'markup_schema' => 'array',
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }
    
    public function getAuthorNameAttribute(): ?string
    {
        return $this->author?->name;
    }

    // public function getLogoImageUrlAttribute()
    // {
    //     return asset('storage/' . $this->logo); // Assuming you store images in the 'public/storage' directory
    // }

}
