<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = ['is_cash', 'is_paid', 'user_id'];
    
    public function billing(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'bill_id', 'id');
    }

    public function income(): HasOne
    {
        return $this->hasOne(Bookkeeping::class, 'bill_id', 'id');
    }
}
