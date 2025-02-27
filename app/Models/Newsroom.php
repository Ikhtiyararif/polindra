<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsroom extends Model
{
    use HasFactory;

    protected $table = 'newsroom';

    protected $fillable = [
        'title',
        'description'
    ];

    protected $guarded = [
        'image',
    ];
}
