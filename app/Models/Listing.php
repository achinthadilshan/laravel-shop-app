<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'price', 'description', 'is_published', 'is_featured'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
