<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Variant extends Model
{
    use HasFactory;

    protected $fillable = ['variant_name', 'category_id', 'product_id'];
    public function varies(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function variants(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
