<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    protected $fillable = [
        'icon', 'heading', 'description'
    ];

    public static function last()
    {
        return self::latest()->first();
    }
}
