<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Testimony extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'is_accepted', 'user_id'];
    public function testify(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
