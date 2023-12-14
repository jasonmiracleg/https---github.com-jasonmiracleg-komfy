<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partnership extends Model
{
    protected $fillable = ['partnership_name', 'description', 'url', 'phone_number', 'partnership_picture'];
    use HasFactory;
}
