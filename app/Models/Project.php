<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'projectName', 'projectImage', 'projectBy', 'projectBrief'
    ];

    public static function last()
    {
        return self::latest()->first();
    }
}
