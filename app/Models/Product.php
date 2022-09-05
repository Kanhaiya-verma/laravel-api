<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'price', 'image_name', 'discription', 'category_id'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
