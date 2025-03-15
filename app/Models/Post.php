<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;  // Corrected namespace
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;  // Use HasFactory trait to enable factory functionality
    
    protected $fillable = [
        'title',
        'body',
        'created_at',
        'updated_at'
    ];
}
