<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'authorName', 'authorBy', 'quote'
    ];

    public static function last()
    {
        return self::latest()->first();
    }
}
