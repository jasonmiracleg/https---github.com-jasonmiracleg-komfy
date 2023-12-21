<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'variant_id', 'bill_id', 'quantity', 'order_price'];

    public function orders(): BelongsTo
    {
        return $this->belongsTo(Bill::class, 'bill_id', 'id');
    }
    public function ordered(): BelongsTo
    {
        return $this->belongsTo(Variant::class, 'variant_id', 'id');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
