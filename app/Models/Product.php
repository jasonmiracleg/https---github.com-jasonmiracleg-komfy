<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['product_name', 'description'];

    public function variants(): HasMany
    {
        return $this->hasMany(Variant::class, 'product_id', 'id');
    }
    
}
