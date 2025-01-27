<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ourleadership extends Model
{
    use HasFactory;

    protected $table = 'ourleaderships';

    protected $fillable = [
        'name',
        'email',
        'position',
        'description'
    ];

    protected $guarded = [
        'image',
    ];
}

