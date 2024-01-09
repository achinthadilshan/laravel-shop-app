<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'price', 'description', 'is_published', 'is_featured'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function listing_status(): BelongsTo
    {
        return $this->belongsTo(ListingStatus::class);
    }
}
