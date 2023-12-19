<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductPicture extends Model
{
    use HasFactory;
    protected $fillable = ['picture', 'variant_id'];
    
    public function variant_s(): BelongsTo
    {
        return $this->belongsTo(Variant::class, 'variant_id', 'id');
    }
}
