<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductPicture extends Model
{
    use HasFactory;
    protected $fillable = ['picture', 'product_id'];
    public function pictures(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
