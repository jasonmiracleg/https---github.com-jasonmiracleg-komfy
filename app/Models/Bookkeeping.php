<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bookkeeping extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'bill_id', 'account_id', 'title', 'description', 'amount'];

    public function bookkeeper(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function bookkeeping(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'account_id', 'id');
    }
    public function income(): BelongsTo
    {
        return $this->belongsTo(Bill::class, 'bill_id', 'id');
    }
}
