<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    /** @use HasFactory<\Database\Factories\JobListingFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'application_deadline' => 'date',
        'published' => 'date'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
